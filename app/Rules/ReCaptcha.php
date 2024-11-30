<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ReCaptcha implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $response = Http::get("https://www.google.com/recaptcha/api/siteverify",[

            'secret' => env('GOOGLE_RECAPTCHA_SECRET'),

            'response' => $value
        ]);

        if ($response->json()["success"]) {
            $fail('The google recaptcha is required.');
        }
    }
}
