<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="color-scheme" content="dark light">
    <title> {{ $siteName }} - {{ $pageName }} </title>
    <link rel="shortcut icon" href="{{ asset($web->favicon ?: $web->logo) }}" type="image/x-icon">
    <!-- Primary Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $web->description }}">
    <meta name="keywords" content="{{ $web->keywords }}">
    <meta name="author" content="Xultech Ltd">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $siteName }} - {{ $pageName }}">
    <meta property="og:description" content="{{ $web->description }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:site_name" content="{{ $siteName }}">
    <meta property="og:image" content="{{ asset($web->logo) }}">
    <meta property="og:image:alt" content="{{ $siteName }} Anti-DDoS Hosting Service">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $siteName}} - {{ $pageName }}">
    <meta name="twitter:description" content="{{ $web->description }}">
    <meta name="twitter:image" content="{{ asset($web->logo) }}">
    <meta name="twitter:site" content="@sentrawall">
    <meta name="twitter:creator" content="@sentrawall">

    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- Plugin'stylesheets  -->
    <link rel="stylesheet" type="text/css" href="{{asset('home/fonts/typography/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('home/fonts/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/plugins/aos/aos.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/plugins/fancybox/jquery.fancybox.min.css')}}">
    <!-- Vendor stylesheets  -->
    <link rel="stylesheet" type="text/css" href="{{asset('home/plugins/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/demo.css')}}">
    <style>
        @import url('https://fonts.cdnfonts.com/css/clash-display');
        @import url('https://fonts.googleapis.com/css2?family=Syne:wght@500;600;700&amp;display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Public+Sans:wght@500;600;700;800;900&amp;display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Cabin:wght@500;600;700&amp;display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap');
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;display=swap');
        @import url('https://fonts.cdnfonts.com/css/clash-display');
    </style>
</head>

<body>
<div class="preloader-wrapper">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<div class="page-wrapper overflow-hidden">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~
     Header Area
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <header class="site-header site-header--menu-left site-header--transparent site-header--absolute">
        <div class="container">
            <nav class="navbar site-navbar">
                <!--~~~~~~~~~~~~~~~~~~~~~~~~
                  Brand Logo
              ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="brand-logo">
                    <a href="{{route('home')}}">
                        <!-- light version logo (logo must be black)-->
                        <img class="logo-light" src="{{asset($web->logo)}}" alt="brand logo">
                        <!-- Dark version logo (logo must be White)-->
                    </a>
                </div>
                <div class="menu-block-wrapper ">
                    <div class="menu-overlay"></div>
                    <nav class="menu-block" id="append-menu-header">
                        <div class="mobile-menu-head">
                            <a href="{{route('home')}}">
                                <img src="{{asset($web->logo2)}}" alt="brand logo" style="width: 100px;">
                            </a>
                            <div class="current-menu-title"></div>
                            <div class="mobile-menu-close">&times;</div>
                        </div>
                        <ul class="site-menu-main">
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link-item drop-trigger">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('home') }}#about" class="nav-link-item drop-trigger">About {{$siteName}}</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('home') }}#products" class="nav-link-item drop-trigger">Products & Services</a>
                            </li>

                        </ul>
                    </nav>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~
                mobile menu trigger
               ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="mobile-menu-trigger">
                    <span></span>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~
                  Mobile Menu Hamburger Ends
                ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="header-cta-btn-wrapper">
                    <a href="{{ route('home') }}#wait-list" class="btn-masco btn-masco btn-primary-l04 btn-shadow btn-shadow--reverse btn-shadow--reverse-center rounded-pill">
                        <span>Get Started?</span></a>
                </div>
            </nav>
        </div>
    </header>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~
     navbar-
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    @yield('content')

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  Home 4 : Section Divider
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="section-divider bg-cream-dark">
        <img src="{{asset('home/image/home-4/section-divider-cream.svg')}}" alt="section divider">
    </div>
    <div class="footer footer-padding-default footer--light footer-l04">
        <div class="copyright-block">
            <div class="container">
                <div class="copyright-inner text-center  copyright-border">
                    <p>© Copyright {{ date('Y') }}, All Rights Reserved by {{$siteName}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vendor Scripts -->
<script src="{{asset('home/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('home/plugins/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('home/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- Plugin's Scripts -->
<script src="{{asset('home/plugins/inlineSvg/inlineSvg.min.js')}}"></script>
<script src="{{asset('home/plugins/fancybox/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('home/plugins/aos/aos.min.js')}}"></script>
<script src="{{asset('home/plugins/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('home/plugins/isotope/packery.pkgd.min.js')}}"></script>
<script src="{{asset('home/plugins/isotope/image.loaded.js')}}"></script>
<script src="{{asset('home/plugins/slick/slick.min.js')}}"></script>
<script src="{{asset('home/plugins/countdown/jquery.countdown.js')}}" defer></script>
<script src="{{asset('home/js/menu.js')}}"></script>
<script src="{{asset('home/js/custom.js')}}"></script>
@stack('js')
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '326e1f6b17a69c87e390497f5e92697b50779836';
    window.smartsupp||(function(d) {
        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
        c.type='text/javascript';c.charset='utf-8';c.async=true;
        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
</body>
</html>
