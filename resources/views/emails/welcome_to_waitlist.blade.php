<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to {{ config('app.name') }}</title>
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
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <img src="{{ $web->logo }}" alt="{{ config('app.name') }} Logo">
        <h1>Welcome to {{ config('app.name') }}</h1>
    </div>
    <div class="content">
        <p>Hi {{ $user->name }},</p>
        <p>
            Congratulations! You’ve successfully verified your email and have been added to the {{ config('app.name') }} waitlist.
            We’re thrilled to have you on board as we prepare to launch our advanced anti-DDoS protection and secure hosting services.
        </p>
        <p>
            As part of our waitlist, you’ll receive exclusive updates, early access opportunities, and the latest news about {{ config('app.name') }}’s features and services.
        </p>
        <p>
            Here’s what you can look forward to:
        </p>
        <ul>
            <li>State-of-the-art DDoS protection for websites, apps, and IT infrastructures.</li>
            <li>Real-time threat detection and mitigation to keep your digital assets safe.</li>
            <li>Scalable solutions tailored to developers, businesses, and enterprises.</li>
            <li>Exclusive resources and insights for waitlist members.</li>
        </ul>
        <p>
            Stay tuned for more updates, and feel free to <a href="mailto:{{ $web->email }}">reach out to us</a> if you have any questions.
        </p>
        <p>
            Thank you for trusting {{ config('app.name') }} to protect what matters most.
        </p>
        <p>Best regards,<br>The {{ config('app.name') }} Team</p>
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
