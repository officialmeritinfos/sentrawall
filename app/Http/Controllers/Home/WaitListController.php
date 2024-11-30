<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Mail\WaitlistVerificationMail;
use App\Mail\WelcomeToWaitlistMail;
use App\Models\User;
use App\Rules\ReCaptcha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Jenssegers\Agent\Agent;
use Stevebauman\Location\Facades\Location;

class WaitListController extends Controller
{
    public function joinWaitList(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'role' => 'required|string',
            'company' => 'nullable|string|max:255',
            'use_case' => 'required|string|in:Personal,Business,Enterprise',
            'interest_level' => 'required|string|in:High,Medium,Low',
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ],[],[
            'g-recaptcha-response'=>'ReCAPTCHA Response'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $ip = config('app.env') === 'local' ? config('location.testing.ip') : $request->ip();

        // Attempt to fetch location data
        $position = null;
        try {
            $position = Location::get($ip);
        } catch (\Exception $e) {
            // Log the error if needed
            \Log::error("Location fetching failed: " . $e->getMessage());

            return response()->json(['errors' => 'Something went wrong'], 422);
        }

        $agent = new Agent();

        $verificationToken = Str::random(64);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'company' => $request->company,
            'use_case' => $request->use_case,
            'interest_level' => $request->interest_level,
            'ip_address' => $ip,
            'device' => $agent->device(),
            'country' => $position->countryName,
            'countryCode' => $position->countryCode,
            'verification_token' => $verificationToken,
        ]);

        Mail::to($user->email)->queue(new WaitlistVerificationMail($user));

        return response()->json(['message' => 'Please check your email to verify your address.'], 201);
    }

    public function verify($token)
    {
        // Find the user by the verification token
        $user = User::where('verification_token', $token)->first();

        if (!$user) {
            // Redirect to an error page if the token is invalid
            return redirect()->route('home')->with('error', 'Verification failed.');
        }

        // Update the user as verified and clear the token
        $user->update([
            'is_verified' => true,
            'verification_token' => null, // Clear the token after verification
        ]);

        // Send the welcome email
        Mail::to($user->email)->queue(new WelcomeToWaitlistMail($user));

        // Redirect to a success page
        return redirect()->route('home')->with('success', 'Your account has been verified.');
    }

}
