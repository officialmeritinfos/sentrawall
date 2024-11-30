@extends('home.layout.base')
@section('content')

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 4 : Hero Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-4_hero-section bg-cream">
        <div class="home-4_hero-shape">
            <img class="hero-shape-1" src="{{asset('home/image/home-4/hero-shape.png')}}" alt="image alt" />
            <img class="hero-shape-2" src="{{asset('home/image/home-4/hero-shape-2.png')}}" alt="image shape" />
        </div>
        <div class="container">
            <div class="row row--custom">
                <div class="col-xxl-auto col-xl-5 col-lg-5 col-md-5 col-sm-6 col-xs-8 col-8" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="300">
                    <div class="home-4_hero-image">
                        <img class="hero-image" src="{{asset('home/image/anti-ddos.png')}}" alt="hero image" />
                    </div>
                </div>
                <div class="col-xxl-auto col-xl-7 col-lg-7 col-md-10" data-aos-duration="1000" data-aos="fade-right" data-aos-delay="300">
                    <div class="home-4_hero-content">
                        <div class="home-4_hero-content-text">
                            <h1 class="hero-content__title text-black heading-xl heading-xl heading-xl--dm-sans">
                                When It Comes to DDoS
                                We’ve <span class="text-success">Got You Covered</span>
                            </h1>
                            <p>
                                {{ $siteName }} provides cutting-edge solutions to safeguard your websites, servers, and IT
                                infrastructures from DDoS attacks and cyber threats. Our advanced protection ensures
                                optimal performance and reliability, no matter the scale of your online presence.
                            </p>
                        </div>
                        <div class="home-4_hero-content-button">
                            <a href="#wait-list" class="btn-masco btn-primary-l04 btn-shadow btn-shadow--reverse btn-shadow--reverse-center rounded-pill">
                                <span>Join Wait-list</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~
   Home 4 : Feature Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="home-4_feature-section section-padding bg-cream-dark">
        <div class="container position-relative z-1">
            <div class="home-4_feature-section__shape">
                <img src="{{asset('home/image/home-4/feature-shape.svg')}}" alt="image alt">
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9">
                    <div class="section-heading">
                        <h2 class="section-heading__title heading-md text-black heading-md--dm-sans">
                            Special features that will blow your mind
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center  gutter-y-default">
                <div class="col-md-6 col-lg-5 col-xl-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card-3">
                        <div class="feature-card-3__icon-wrapper">
                            <img src="{{asset('home/image/home-4/skill-icon.svg')}}" alt="feature icon">
                        </div>
                        <h4 class="feature-card-3__title">Rapid Deployment</h4>
                        <p>
                            Activate protection within 10 minutes
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 col-xl-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card-3">
                        <div class="feature-card-3__icon-wrapper">
                            <img src="{{asset('home/image/home-4/expert-icon.svg')}}" alt="feature icon">
                        </div>
                        <h4 class="feature-card-3__title">8 POPs Worldwide</h4>
                        <p>
                            With about 8 POPs and counting, with filtering capacity
                            >4,5 Tbps and growing
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 col-xl-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-card-3">
                        <div class="feature-card-3__icon-wrapper">
                            <img src="{{asset('home/image/home-4/lifelong-icon.svg')}}" alt="feature icon">
                        </div>
                        <h4 class="feature-card-3__title">Jet-Fast Support</h4>
                        <p>
                            24/7 customer support with an average of 15-min response time
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
   Home 1  : Content Section 1
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-1_content-section-1 section-padding-120" id="about">
        <div class="container">
            <div class="row row--custom">
                <div class="offset-xl-1 col-lg-5 col-auto" data-aos-duration="1000" data-aos="fade-left">
                    <div class="home-1_content-image-1 content-image--mobile-width">
                        <img src="{{asset('home/image/home-1/content-image-1.png')}}" alt="alternative text">
                        <div class="home-1_content-image-1-shape">
                            <img src="{{asset('home/image/home-1/content-image-1-shape.svg')}}" alt="alternative text">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-10 col-auto" data-aos-duration="1000" data-aos="fade-right">
                    <div class="content">
                        <div class="content-text-block">
                            <h2 class="content-title heading-md text-black">
                                Keeping You Online and Worry-Free!
                            </h2>
                            <p>
                                At Sentrawall, we’re on a mission to make your digital world safer and simpler. We know the frustration of unexpected downtime or those pesky cyber threats. That’s why we’re here—to shield your websites, apps, and networks from DDoS attacks and keep your digital doors open 24/7.
                                <br/>
                                Think of us as your online bodyguards, working tirelessly behind the scenes so you can focus on what you do best—running your business, developing awesome projects, or simply staying connected.
                            </p>
                            <p>
                                Our promise? Unmatched protection, effortless solutions, and zero headaches.<br/>
                                Oh, and did we mention we're building this with you in mind? Whether you're a tech-savvy developer or a business owner just trying to keep things running smoothly, Sentrawall is designed to grow with you.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 1  : Content Section 2
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-1_content-section-2 padding-bottom-120">
        <div class="container">
            <div class="row row--custom">
                <div class="col-xl-5 col-lg-5 col-auto" data-aos-duration="1000" data-aos="fade-right">
                    <div class="home-1_content-image-2 content-image--mobile-width">
                        <img src="{{asset('home/image/home-1/content-image-2.png')}}" alt="alternative text">
                        <div class="home-1_content-image-2-shape">
                            <img src="{{asset('home/image/home-1/content-image-2-shape.svg')}}" alt="alternative text">
                        </div>
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-6 col-lg-7 col-md-11" data-aos-duration="1000" data-aos="fade-left">
                    <div class="content">
                        <div class="content-text-block">
                            <h2 class="content-title heading-md text-black">
                                Discover Cutting-Edge Cybersecurity Solutions to Keep Your Business Online
                            </h2>
                            <p>
                                Sentrawall is here to empower businesses, developers, and enterprises with state-of-the-art
                                DDoS protection and cybersecurity solutions
                            </p>
                        </div>
                        <div class="content-list-block">
                            <ul class="content-list">
                                <li class="content-list-item">
                                    <img src="{{asset('home/image/icons/icon-check-blue.svg')}}" alt="alternative text">
                                    Prevent downtime and keep your websites, apps, and networks running 24/7.
                                </li>
                                <li class="content-list-item">
                                    <img src="{{asset('home/image/icons/icon-check-blue.svg')}}" alt="alternative text">
                                    Gain real-time threat detection and mitigation for complete peace of mind.
                                </li>
                                <li class="content-list-item">
                                    <img src="{{asset('home/image/icons/icon-check-blue.svg')}}" alt="alternative text">
                                    Scale your security with lightweight, high-performance solutions tailored for your needs,
                                    and only pay for clean networks(we do not calculate the bad networks)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 4  : Content Section 1
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-4_content-section-1 section-padding-120 bg-cream">
        <div class="content-shape">
            <img src="{{asset('home/image/home-4/content-shape.svg')}}" alt="book">
        </div>
        <div class="container">
            <div class="row row--custom ">
                <div class="col-lg-5 col-md-6 col-7" data-aos-duration="1000" data-aos="fade-right">
                    <div class="home-4_content-image-1 ">
                        <img src="{{asset('home/image/protect-yourself.png')}}" alt="alternative text">
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-6 col-lg-7 col-md-10 col-auto" data-aos-duration="1000" data-aos="fade-left">
                    <div class="content">
                        <div class="content-text-block">
                            <h2 class="content-title heading-md heading-md--dm-sans text-black">
                                Safeguard Your Digital Infrastructure with Ease
                            </h2>
                            <p>
                                {{ $siteName }} provides state-of-the-art DDoS protection and cybersecurity solutions designed
                                to secure your websites, networks, and IT systems from online threats.
                            </p>
                            <p>
                                Whether you’re a small business, a developer, or a global enterprise, our scalable and
                                robust services ensure maximum uptime, enhanced performance, and peace of mind.
                            </p>
                        </div>
                        <div class="content-button-block">
                            <a href="#wait-list" class="btn-masco btn-primary-l04 btn-shadow btn-shadow--reverse btn-shadow--reverse-center rounded-pill"><span>Join Wait-list</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 2  : Pricing Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-2_pricing-section section-padding-120 bg-primary-opacity-l2" id="products">
        <div class="container">
            <div class="section-heading">
                <h2 class="section-heading__title heading-md  text-black">PRODUCT SUITE</h2>
            </div>
            <div class="row gutter-y-30 justify-content-center" data-plan-id="pricing-1" data-plan-active="monthly">
                <div class="col-xl-4 col-lg-6 col-md-8 col-sm-9" data-aos-duration="1000" data-aos="fade-up">
                    <div class="pricing-card h-100">
                        <div class="pricing-card__head">
                            <h3 class="pricing-card__plan">For <strong>Web</strong></h3>
                            <p>
                                Powerful solution to make sure your business-crucial web applications are always accessible during even the most severe DDoS attacks.
                            </p>
                        </div>
                        <div class="pricing-card__body">
                            <ul class="pricing-card__list">
                                <li>Retail</li>
                                <li>E-commerce</li>
                                <li>Government</li>
                                <li>Media</li>
                                <li>Banking</li>
                                <li>Entertainment, etc</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-8 col-sm-9" data-aos-duration="1000" data-aos="fade-up">
                    <div class="pricing-card h-100 active">
                        <div class="pricing-card__head">
                            <h3 class="pricing-card__plan">for <strong>Networks</strong></h3>
                           <p>
                               Best-in-class network protection to ensure stable operation of your network and secure your business from unforeseen disruptions.
                            </p>
                        </div>
                        <div class="pricing-card__body">
                            <ul class="pricing-card__list">
                                <li>ISPs</li>
                                <li>Telecom</li>
                                <li>Data Centers</li>
                                <li>Hosting and Cloud Service Providers</li>
                                <li>Large companies with internal networks</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-8 col-sm-9" data-aos-duration="1000" data-aos="fade-up">
                    <div class="pricing-card h-100">
                        <div class="pricing-card__head">
                            <h3 class="pricing-card__plan">for <strong>Servers</strong></h3>
                            <p>
                                Keep your TCP/UDP services operational and safe from the most modern and complex DDoS attacks.
                            </p>
                        </div>
                        <div class="pricing-card__body">
                            <ul class="pricing-card__list">
                                <li>Gaming</li>
                                <li>IP telephony, etc</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
     Home 2 : Feature Section
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-2_feature-section section-padding">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xxl-6 col-lg-7 col-md-9">
                    <div class="section-heading">
                        <h2 class="section-heading__title heading-md text-black">
                            More <strong class="text-success">solutions</strong>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center gutter-y-default">
                <div class="col-lg-6 col-md-6" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="700">
                    <div class="feature-card h-100">
                        <div class="feature-card__icon">
                            <img src="{{ asset('home/image/vdsvps2.png') }}" alt="image alt">
                        </div>
                        <div class="feature-card__body">
                            <h3 class="feature-card__title ">VDS/VPS servers</h3>
                            <p>VDS/VPS servers with DDoS protection</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="600">
                    <div class="feature-card h-100">
                        <div class="feature-card__icon">
                            <img src="{{ asset('home/image/waf2.png') }}" alt="image alt">
                        </div>
                        <div class="feature-card__body">
                            <h3 class="feature-card__title ">Web Application Firewall (WAF)</h3>
                            <p>Protecting web applications with a cloud‑based security tool</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="500">
                    <div class="feature-card h-100">
                        <div class="feature-card__icon">
                            <img src="{{ asset('home/image/hosting2.png') }}" alt="image alt">
                        </div>
                        <div class="feature-card__body">
                            <h3 class="feature-card__title ">Anti-DDoS hosting</h3>
                            <p>Hosting and DDoS protection combined</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="500">
                    <div class="feature-card h-100">
                        <div class="feature-card__icon">
                            <img src="{{ asset('home/image/cdn2.png') }}" alt="image alt">
                        </div>
                        <div class="feature-card__body">
                            <h3 class="feature-card__title ">Content Delivery Network (CDN)</h3>
                            <p>CDN service to speed up content loading</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  Home 4 : Section Divider
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="section-divider bg-cream">
        <img src="{{asset('home/image/home-4/section-divider-gray.svg')}}" alt="section divider">
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 4  : Content Section 2
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-4_content-section-2 section-padding bg-cream">
        <div class="container">
            <div class="row row--custom ">
                <div class="offset-xxl-1 col-lg-5 col-md-6 col-7" data-aos-duration="1000" data-aos="fade-left">
                    <div class="home-4_content-image-2 content-image--mobile-width">
                        <img src="{{asset('home/image/home-4/content-image-2.png')}}" alt="alternative text">
                    </div>
                </div>
                <div class="col-xxl-6 col-lg-7 col-md-11" data-aos-duration="1000" data-aos="fade-right">
                    <div class="content">
                        <div class="content-text-block">
                            <h2 class="content-title heading-md heading-md text-black heading-md--dm-sans">
                                Guard Your Clients’ Websites and Apps with Reliable Protection
                            </h2>
                            <p>
                                Keep your clients' digital platforms secure with {{ $siteName }}'s advanced anti-DDoS solutions.
                                Our platform is built to provide uninterrupted service, robust threat detection, and peace of mind.
                            </p>
                        </div>
                        <div class="content-list-block">
                            <ul class="content-list">
                                <li class="content-list-item">
                                    <img src="{{asset('home/image/icons/icon-check-black.svg')}}" alt="alternative text">
                                    Protect websites and apps from DDoS attacks and hacking attempts.
                                </li>
                                <li class="content-list-item">
                                    <img src="{{asset('home/image/icons/icon-check-black.svg')}}" alt="alternative text">
                                    Ensure maximum uptime with real-time threat mitigation.
                                </li>
                                <li class="content-list-item">
                                    <img src="{{asset('home/image/icons/icon-check-black.svg')}}" alt="alternative text">
                                    Scale protection as your clients' businesses grow.
                                </li>
                                <li class="content-list-item">
                                    <img src="{{asset('home/image/icons/icon-check-black.svg')}}" alt="alternative text">
                                    Trust in enterprise-grade security tailored to all business sizes.
                                </li>
                            </ul>
                        </div>
                        <div class="content-button-block">
                            <a href="#wait-list" class="btn-masco btn-primary-l04 btn-shadow btn-shadow--reverse btn-shadow--reverse-center rounded-pill">
                                <span>Join Wait-list</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  Home 4 : Section Divider
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="section-divider bg-cream-dark">
        <img src="{{asset('home/image/home-4/section-divider-cream.svg')}}" alt="section divider">
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 4 : FAQ Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-4_faq-section section-padding-100 bg-cream-dark">
        <div class="container">
            <div class="row">
                <div class=" col-lg-6 col-md-10">
                    <div class="section-heading">
                        <h2 class="section-heading__title heading-md text-black heading-md--dm-sans">Frequently asked questions about our service</h2>
                        <p>
                            At {{ $siteName }}, we understand that safeguarding your digital platforms/networks is a top priority. While we
                            are currently in wait-list mode, we want to address some common questions to help you better
                            understand our services and how we can benefit you. Explore the FAQs below to learn more
                            about {{ $siteName }} and our upcoming launch.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="accordion-style-2" id="home-4_faq">
                        <button class="accordion-item " type="button" data-bs-toggle="collapse" data-bs-target="#home-4_faq-item" aria-expanded="true" aria-controls="home-4_faq-item">
                            <div class="accordion-button ">
                                Q. What is a {{ $siteName }}?
                            </div>
                            <div id="home-4_faq-item" class="accordion-collapse collapse show" data-bs-parent="#home-4_faq">
                                <div class="accordion-item__body">
                                    {{ $siteName }} is an advanced anti-DDoS protection service designed to safeguard websites,
                                    servers, and IT infrastructures from DDoS attacks and other online threats,
                                    ensuring uninterrupted service and enhanced security.
                                </div>
                            </div>
                        </button>
                        <button class="accordion-item collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#home-4_faq-item-2" aria-expanded="false" aria-controls="home-4_faq-item-2">
                            <div class="accordion-button ">
                                Q.  Is {{ $siteName }} currently available?
                            </div>
                            <div id="home-4_faq-item-2" class="accordion-collapse collapse" data-bs-parent="#home-4_faq">
                                <div class="accordion-item__body">
                                    {{ $siteName }} is currently in wait-list mode. You can register your interest to be among
                                    the first to access our services once we launch.
                                </div>
                            </div>
                        </button>
                        <button class="accordion-item collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#home-4_faq-item-3" aria-expanded="false" aria-controls="home-4_faq-item-3">
                            <div class="accordion-button ">
                                Q. Who can benefit from {{ $siteName }}?
                            </div>
                            <div id="home-4_faq-item-3" class="accordion-collapse collapse" data-bs-parent="#home-4_faq">
                                <div class="accordion-item__body">
                                    {{ $siteName }} is designed for businesses, developers, IT professionals, and enterprises
                                    looking for robust DDoS protection and secure hosting solutions.
                                </div>
                            </div>
                        </button>
                        <button class="accordion-item collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#home-4_faq-item-4" aria-expanded="false" aria-controls="home-4_faq-item-3">
                            <div class="accordion-button ">
                                Q. What features can I expect from {{ $siteName }}?
                            </div>
                            <div id="home-4_faq-item-4" class="accordion-collapse collapse" data-bs-parent="#home-4_faq">
                                <div class="accordion-item__body">
                                    {{ $siteName }} offers real-time DDoS mitigation, advanced threat detection, secure hosting,
                                    scalable infrastructure, and analytics tools to monitor and defend your digital assets.
                                </div>
                            </div>
                        </button>
                        <button class="accordion-item collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#home-4_faq-item-5" aria-expanded="false" aria-controls="home-4_faq-item-3">
                            <div class="accordion-button ">
                                Q. When will {{ $siteName }} launch?
                            </div>
                            <div id="home-4_faq-item-5" class="accordion-collapse collapse" data-bs-parent="#home-4_faq">
                                <div class="accordion-item__body">
                                    We are actively working on finalizing our platform and will share updates with everyone
                                    on the wait-list as we get closer to the launch date.
                                </div>
                            </div>
                        </button>
                        <button class="accordion-item collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#home-4_faq-item-6" aria-expanded="false" aria-controls="home-4_faq-item-3">
                            <div class="accordion-button ">
                                Q. How will I know if I’ve been selected for early access?
                            </div>
                            <div id="home-4_faq-item-6" class="accordion-collapse collapse" data-bs-parent="#home-4_faq">
                                <div class="accordion-item__body">
                                    If you’re on the wait-list, you’ll receive an email notification once early access
                                    opportunities become available then you can try our service free for 14 days.
                                </div>
                            </div>
                        </button>
                        <button class="accordion-item collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#home-4_faq-item-7" aria-expanded="false" aria-controls="home-4_faq-item-3">
                            <div class="accordion-button ">
                                Q.  What makes {{ $siteName }} different from other anti-DDoS services?
                            </div>
                            <div id="home-4_faq-item-7" class="accordion-collapse collapse" data-bs-parent="#home-4_faq">
                                <div class="accordion-item__body">
                                    {{ $siteName }} combines cutting-edge technology, scalability, and user-friendly integration
                                    to provide unparalleled DDoS protection and hosting solutions, tailored for businesses
                                    of all sizes, with premium support available 24/7 with late response of 20 minutes.
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  Home 4 : Section Divider
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="section-divider bg-cream">
        <img src="{{asset('home/image/home-4/section-divider-gray.svg')}}" alt="section divider">
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~
    Home 4 : CTA
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="cta-home-4 bg-cream">
        <div class="container position-relative">
            <div class="cta-content-block">
                <div class="cta-text-block">
                    <h2 class="cta-home-4-title heading-md text-black heading-md--dm-sans">
                        Be Among the First to Experience Sentrawall
                    </h2>
                    <p>
                        Join our wait-list to secure early access to Sentrawall, the ultimate solution for safeguarding
                        your websites, applications, and IT infrastructures from DDoS attacks and cyber threats.
                    </p>
                </div>
            </div>

            <div class="contact-2_form-section padding-top-120 padding-bottom-100" id="wait-list">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-12 border border-5">
                            <div class="form-box-style__form-wrapper bg-light-2">
                                <form class="form-box-style"  id="waitlistForm" action="{{ route('wait-list.join') }}">
                                    @csrf
                                    <div class="form-box-style__form-inner row">
                                        <div class="col-lg-6 col-12">
                                            <div class="form-box-style__form-input">
                                                <h3 class="form-box-style-title">Your name</h3>
                                                <input class="form-control bg-light-2" type="text" placeholder="Enter your full name"
                                                       name="name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12 ">
                                            <div class="form-box-style__form-input">
                                                <h3 class="form-box-style-title">Email address</h3>
                                                <input class="form-control bg-light-2" type="text" placeholder="Enter your email"
                                                       name="email">
                                            </div>
                                        </div>
                                        <div class=" col-12 col-md-6">
                                            <div class="form-box-style__form-input">
                                                <h3 class="form-box-style-title">Role</h3>
                                                <select name="role" id="role" class="form-control" required>
                                                    <option value="">Select Your Role</option>
                                                    <option value="Developer">Developer</option>
                                                    <option value="Business Owner">Business Owner</option>
                                                    <option value="IT Professional">IT Professional</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class=" col-12 col-md-6">
                                            <div class="form-box-style__form-input">
                                                <h3 class="form-box-style-title">Company/Organization (optional)</h3>
                                                <input type="text" name="company" id="company" class="form-control" placeholder="Enter your company name (optional)">
                                            </div>
                                        </div>
                                        <div class=" col-12 col-md-6">
                                            <div class="form-box-style__form-input">
                                                <h3 class="form-box-style-title">Use Case</h3>
                                                <select name="use_case" id="use_case" class="form-control" required>
                                                    <option value="">Select Use Case</option>
                                                    <option value="Personal">Personal</option>
                                                    <option value="Business">Business</option>
                                                    <option value="Enterprise">Enterprise</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class=" col-12 col-md-6">
                                            <div class="form-box-style__form-input">
                                                <h3 class="form-box-style-title">Interest Level</h3>
                                                <select name="interest_level" id="interest_level" class="form-control" required>
                                                    <option value="">Select Your Interest Level</option>
                                                    <option value="High">High</option>
                                                    <option value="Medium">Medium</option>
                                                    <option value="Low">Low</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class=" col-12 col-md-6">
                                            <div class="form-box-style__form-input">
                                                <h3 class="form-box-style-title">ReCaptcha</h3>
                                                <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                                            </div>
                                        </div>

                                        <div class="account-condition-block">
                                            <div id="item-list">
                                                <span class="account-condition">You agree to our <a href="{{ route('legal.privacy') }}" >Privacy Policy</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-box-style__form-input-button text-center">
                                        <button type="submit" class="btn-masco rounded-pill" id="joinWaitlistButton">
                                            <span id="buttonText">Join Wait-list</span>
                                            <span id="buttonSpinner" class="spinner-border spinner-border-sm" style="display: none;" role="status" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>
                                <div id="responseMessage" style="margin-top: 10px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@push('js')
    <script>
        $(document).ready(function() {
            $('#waitlistForm').on('submit', function(event) {
                event.preventDefault(); // Prevent default form submission

                // Change button state to loading
                $('#joinWaitlistButton').attr('disabled', true); // Disable the button
                $('#buttonText').text('Processing...');
                $('#buttonSpinner').show(); // Show the spinner

                $.ajax({
                    url: $(this).attr('action'),
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        // Display success message
                        $('#responseMessage').html('<div class="alert alert-success">' + response.message + '</div>');

                        // Reset the form and button state
                        $('#waitlistForm')[0].reset();
                        $('#joinWaitlistButton').attr('disabled', false);
                        $('#buttonText').text('Join Wait-list');
                        $('#buttonSpinner').hide();
                    },
                    error: function(response) {
                        // Display error messages
                        let errors = response.responseJSON.errors;
                        let errorMessages = '<div class="alert alert-danger"><ul>';
                        for (const field in errors) {
                            errorMessages += '<li>' + errors[field][0] + '</li>';
                        }
                        errorMessages += '</ul></div>';
                        $('#responseMessage').html(errorMessages);

                        // Reset button state
                        $('#joinWaitlistButton').attr('disabled', false);
                        $('#buttonText').text('Join Wait-list');
                        $('#buttonSpinner').hide();
                    }
                });
            });
        });
    </script>
@endpush

@endsection
