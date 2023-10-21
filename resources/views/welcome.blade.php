    <!doctype html>
    <html class="no-js" lang="zxx">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>S.M.N</title>
    <meta name="description" content>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="https://preview.colorlib.com/theme/courses/site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>

    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
        <div class="preloader-circle"></div>
        <div class="preloader-img pere-text">
        <img src="assets/img/logo/loder.png" alt>
        </div>
        </div>
        </div>
    </div>

    <header>

    <div class="header-area header-transparent">
    <div class="main-header">
        <div class="header-bottom header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="{{url('/')}}"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10">
                        <div class="menu-wrapper d-flex align-items-center justify-content-end">
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li class="active"><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="{{url('/courses')}}">Courses</a></li>
                                        <li><a href="{{url('/contact')}}">Contact</a></li>
                                        @if (Route::has('login'))
                                            @auth
                                                <li class="button-header"><a href="{{ url('/dashboard') }}" class="btn btn3">Dashboard</a></li>
                                            @else
                                                <li class="button-header"><a href="{{ route('login') }}" class="btn btn3">Log in</a></li>
                                                @if (Route::has('register'))
                                                    <li class="button-header"><a href="{{ route('register') }}" class="btn btn3">Register</a></li>
                                                @endif
                                            @endauth
                                        @endif
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</header>


<main>

<section class="slider-area ">
<div class="slider-active">

<div class="single-slider slider-height d-flex align-items-center">
<div class="container">
<div class="row">
<div class="col-xl-6 col-lg-7 col-md-12">
<div class="hero__caption">
<h1 data-animation="fadeInLeft" data-delay="0.2s">S.M.N<br></h1>
<p data-animation="fadeInLeft" data-delay="0.4s">A Student Information Management System (SIMS) streamlines student data management in educational institutions, covering admissions, enrollment, attendance, and academic records. It enhances communication among educators, students, and parents, fostering transparency and efficiency in education.</p>
<a href="{{url('/login')}}#" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">Get Started</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<div class="services-area">
<div class="container">
<div class="row justify-content-sm-center">
<div class="col-lg-4 col-md-6 col-sm-8">
<div class="single-services mb-30">
<div class="features-icon">
<img src="assets/img/icon/icon1.svg" alt>
</div>
<div class="features-caption">
<h3>60+ courses</h3>
<p>You can find here <span>+60</span> courses.</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-8">
<div class="single-services mb-30">
<div class="features-icon">
<img src="assets/img/icon/icon2.svg" alt>
</div>
<div class="features-caption">
<h3>Expert instructors</h3>
<p>Skilled, knowledgeable educators.</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-8">
<div class="single-services mb-30">
<div class="features-icon">
<img src="assets/img/icon/icon3.svg" alt>
</div>
<div class="features-caption">
<h3>Life time access</h3>
<p>Unlimited lifetime access.</p>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="about-area3 fix">
<div class="support-wrapper align-items-center">
<div class="right-content3">

<div class="right-img">
<img src="assets/img/gallery/about3.png" alt>
</div>
</div>
<div class="left-content3">

<div class="section-tittle section-tittle2 mb-20">
<div class="front-text">
<h2 class>Welcom To S.M.N</h2>
</div>
</div>
<div class="single-features">
<div class="features-caption">
<p></p>
</div>
</div>
<div class="single-features">
<div class="features-icon">
<img src="assets/img/icon/right-icon.svg" alt>
</div>
<div class="features-caption">
<p>A student management system is a software tool used by educational institutions to efficiently manage student information, records, and administrative tasks.</p>
</div>
</div>
</div>
</div>
</section>

</main>
<footer>
    <div class="footer-wrapper footer-bg">
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12">
                            <div class="footer-copy-right text-center">
                                <p>
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This S.M.N is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://zobirofkir.com" target="_blank">FIROZ</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="back-top">
<a title="Go to Top" href="{{url('/')}}#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>

<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.slicknav.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/slick.min.js"></script>

<script src="assets/js/wow.min.js"></script>
<script src="assets/js/animated.headline.js"></script>
<script src="assets/js/jquery.magnific-popup.js"></script>

<script src="assets/js/gijgo.min.js"></script>

<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery.sticky.js"></script>

<script src="assets/js/jquery.barfiller.js"></script>

<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/hover-direction-snake.min.js"></script>

<script src="assets/js/contact.js"></script>
<script src="assets/js/jquery.form.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/mail-script.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"819486cf5ff3184c","b":1,"version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>
</html>