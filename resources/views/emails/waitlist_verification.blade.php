<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Your Email - {{ config('app.name') }}</title>
    <style>
        /* General Reset */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding: 10px 0;
        }
        .header img {
            width: 150px;
            margin-bottom: 10px;
        }
        .header h1 {
            font-size: 24px;
            color: #007bff;
        }
        .content {
            padding: 20px 0;
            line-height: 1.6;
        }
        .content p {
            font-size: 16px;
            margin-bottom: 20px;
        }
        .button-container {
            text-align: center;
            margin: 20px 0;
        }
        .verify-button {
            background-color: #007bff;
            color: #fff;
            padding: 15px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            display: inline-block;
        }
        .verify-button:hover {
            background-color: #0056b3;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
        .footer a {
            color: #007bff;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        /* Responsive Styles */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }
            .header h1 {
                font-size: 20px;
            }
            .verify-button {
                font-size: 16px;
                padding: 10px 15px;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <img src="{{ asset($web->logo) }}" alt="{{ config('app.name') }} Logo">
        <h1>Verify Your Email</h1>
    </div>
    <div class="content">
        <p>Hi {{ $user->name }},</p>
        <p>
            Thank you for signing up for the {{ config('app.name') }} waitlist! To complete your registration and secure your spot, we need to verify your email address.
            Please click the button below to confirm your email and join the waitlist. This link expires after 30 Days, and auto-delete account.
        </p>
        <div class="button-container">
            <a href="{{ $verificationUrl }}" class="verify-button">Verify My Email</a>
        </div>
        <p>
            If you didn’t sign up for {{ config('app.name') }}, you can safely ignore this email.
            If you have any questions, feel free to <a href="{{ route('home.contact') }}">contact us</a>.
        </p>
    </div>
    <div class="footer">
        <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
        <p>
            <a href="{{ route('legal.privacy') }}">Privacy Policy</a> |
            <a href="{{ route('legal.terms') }}">Terms of Service</a>
        </p>
    </div>
</div>
</body>
</html>
