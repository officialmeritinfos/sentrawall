<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Jenssegers\Agent\Agent;
use Stevebauman\Location\Facades\Location;

class HomeController extends Controller
{
    //landing page
    public function index(Request $request)
    {
        // Retrieve general settings
        $web = GeneralSetting::find(1);

        // Determine the IP address based on environment
        $ip = config('app.env') === 'local' ? config('location.testing.ip') : $request->ip();

        // Attempt to fetch location data
        $position = null;
        try {
            $position = Location::get($ip);
        } catch (\Exception $e) {
            // Log the error if needed
            \Log::error("Location fetching failed: " . $e->getMessage());
        }

        // Safely retrieve the country name or provide a default value
        $countryName = $position->countryName ?? 'Africa';

        // Set page name dynamically
        $pageName = "Reliable Protection from DDoS and Hacker Attacks in " . $countryName;

        // Return the view with data
        return view('home.home')->with([
            'web' => $web,
            'pageName' => $pageName,
            'siteName' => $web->name,
        ]);
    }
    //privacy policy
    public function privacyPolicy()
    {
        // Retrieve general settings
        $web = GeneralSetting::find(1);
        // Return the view with data
        return view('home.privacy')->with([
            'web' => $web,
            'pageName' => 'Privacy Policy',
            'siteName' => $web->name,
        ]);
    }
}
