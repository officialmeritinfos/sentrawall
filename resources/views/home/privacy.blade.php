@extends('home.layout.base')
@section('content')

    <div class="inner_banner-section">
        <img class="inner_banner-background-image" src="{{asset('home/image/common/inner-bg.png')}}" alt="image alt">
        <div class="container">
            <div class="inner_banner-content-block">
                <h3 class="inner_banner-title">{{$pageName}}</h3>
                <ul class="banner__page-navigator">
                    <li>
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li class="active">
                        <a href="#">
                            {{ $pageName }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
   FAQ  : FAQ Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="faq-section_main section-padding-120">
        <div class="container">
            <div class="row row--custom justify-content-center">
                <div class="col-lg-10">

                    <div class="container my-5">
                        <header class="text-center mb-4">
                            <h1 class="display-4">Privacy Policy</h1>
                            <p class="text-muted">Effective Date: November 30, 2024</p>
                        </header>

                        <section class="mb-5">
                            <h2 class="h3">1. Introduction</h2>
                            <p>
                                Welcome to {{ $web->name }}! We are committed to protecting your privacy and ensuring the security of your personal information.
                                This Privacy Policy outlines how we collect, use, and protect your data when you access our website, services, or interact with us.
                            </p>
                            <p>
                                By using {{ $web->name }}, you agree to the terms of this Privacy Policy. If you have any questions, please <span class="text-primary">contact us</span>.
                            </p>
                        </section>

                        <section class="mb-5">
                            <h2 class="h3">2. Information We Collect</h2>
                            <p>
                                We collect different types of information to provide and improve our services. This includes:
                            </p>
                            <ul>
                                <li><strong>Personal Information:</strong> Name, email address, phone number, country, and any other details you provide when signing up or contacting us.</li>
                                <li><strong>Technical Information:</strong> IP address, browser type, device information, and operating system used to access our services.</li>
                                <li><strong>Usage Data:</strong> Details about your interactions with our website, such as pages visited, time spent, and actions taken.</li>
                                <li><strong>Cookies and Tracking Data:</strong> Small files stored on your device to enhance user experience and analyze website performance.</li>
                            </ul>
                        </section>

                        <section class="mb-5">
                            <h2 class="h3">3. How We Use Your Information</h2>
                            <p>
                                We use the information we collect for the following purposes:
                            </p>
                            <ul>
                                <li>To provide, maintain, and improve our services.</li>
                                <li>To communicate with you about updates, promotions, and customer support.</li>
                                <li>To ensure the security of our website and detect potential threats or fraud.</li>
                                <li>To analyze and enhance the performance and functionality of our website.</li>
                                <li>To comply with legal obligations and enforce our terms of service.</li>
                            </ul>
                        </section>

                        <section class="mb-5">
                            <h2 class="h3">4. How We Protect Your Information</h2>
                            <p>
                                We implement industry-standard security measures to protect your data from unauthorized access, alteration, disclosure, or destruction.
                                However, please note that no method of transmission over the internet or electronic storage is 100% secure.
                            </p>
                            <p>
                                Our measures include:
                            </p>
                            <ul>
                                <li>Encryption of sensitive data.</li>
                                <li>Regular security assessments and audits.</li>
                                <li>Restricted access to personal information on a need-to-know basis.</li>
                            </ul>
                        </section>

                        <section class="mb-5">
                            <h2 class="h3">5. Sharing Your Information</h2>
                            <p>
                                We do not sell or rent your personal information to third parties. However, we may share your data with:
                            </p>
                            <ul>
                                <li><strong>Service Providers:</strong> Third-party companies that assist us in delivering our services, such as hosting providers, analytics platforms, or email services.</li>
                                <li><strong>Legal Obligations:</strong> When required by law or in response to valid legal requests.</li>
                                <li><strong>Business Transfers:</strong> In the event of a merger, acquisition, or sale of assets, your data may be transferred to the new owner.</li>
                            </ul>
                        </section>

                        <section class="mb-5">
                            <h2 class="h3">6. Your Rights</h2>
                            <p>
                                As a user, you have certain rights regarding your personal information:
                            </p>
                            <ul>
                                <li><strong>Access:</strong> Request a copy of the personal data we hold about you.</li>
                                <li><strong>Correction:</strong> Request corrections to any inaccuracies in your personal data.</li>
                                <li><strong>Deletion:</strong> Request the deletion of your personal data, subject to legal obligations.</li>
                                <li><strong>Opt-Out:</strong> Unsubscribe from marketing emails or withdraw consent for specific data processing activities.</li>
                            </ul>
                            <p>
                                To exercise these rights, please <span class="text-primary">contact us</span>.
                            </p>
                        </section>

                        <section class="mb-5">
                            <h2 class="h3">7. Cookies and Tracking</h2>
                            <p>
                                We use cookies and similar tracking technologies to enhance user experience and analyze website traffic. By using {{ $web->name }}, you consent to our use of cookies.
                            </p>
                            <p>
                                You can manage your cookie preferences through your browser settings.
                            </p>
                        </section>

                        <section class="mb-5">
                            <h2 class="h3">8. Changes to This Privacy Policy</h2>
                            <p>
                                We may update this Privacy Policy from time to time to reflect changes in our practices or legal requirements. Any updates will be posted on this page, and significant changes will be communicated via email or website notifications.
                            </p>
                            <p>
                                Please review this Privacy Policy periodically to stay informed about how we protect your data.
                            </p>
                        </section>

                        <section class="mb-5">
                            <h2 class="h3">9. Contact Us</h2>
                            <p>
                                If you have any questions, concerns, or requests regarding this Privacy Policy, please contact us at:
                            </p>
                            <address>
                                <strong>{{ $web->name }} Team</strong><br>
                                Email: <a href="mailto:{{ $web->email }}" class="text-primary">{{ $web->email }}</a><br>
                                Website: <a href="{{url('/')}}" class="text-primary">{{ url('/') }}</a>
                            </address>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
