@extends('layouts.app')

@section('title', 'Automation Industry | JIHI Hand Tools')

@section('content')

<header class="main-header header-style-two">
    <!--Header Top-->
    <div class="header-top-two">
        <div class="auto-container clearfix">
            <div class="top-left clearfix">
                <div class="text">We offer revolution of industrial engineering</div>
            </div>
            <div class="top-right clearfix">
                <!-- Social Links -->
                <ul class="social-links clearfix">
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                </ul>

                <!-- Change Location -->
                <div class="change-location">
                    <div class="location dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Global Site &nbsp;<span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu2">
                            <li><a href="#">China</a></li>
                            <li><a href="#">Canada</a></li>
                            <li><a href="#">Russia</a></li>
                            <li><a href="#">Germany</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="inner-container">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo-outer">
                    <div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt="" title=""></a></div>
                </div>

                <!--Info-->
                <div class="info-outer clearfix">
                    <!--Info Box-->
                    <div class="info-box">
                        <div class="icon"><span class="icon-call-in"></span></div>
                        <div class="text">
                            <strong>Call Us Today</strong>
                            <span class="info"><a href="#">1 (934) 256 7850</a></span>
                        </div>
                    </div>
                    <!--Info Box-->
                    <div class="info-box">
                        <div class="icon"><span class="icon-clock"></span></div>
                        <div class="text">
                            <strong>Working Hours</strong>
                            <span class="info">Mon - fri: 9:00 to 18:00</span>
                        </div>
                    </div>
                    <!--Info Box-->
                    <div class="info-box">
                        <div class="icon"><span class="icon-home"></span></div>
                        <div class="text">
                            <strong>C73 Ringer House Lane</strong>
                            <span class="info">Florida, 26098</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <div class="header-lower">
        <div class="auto-container">
            <!--Nav Box-->
            <div class="nav-outer clearfix">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="navbar-header">
                        <!-- Togg le Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon flaticon-menu-button"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li class="dropdown"><a href="#">Home</a>
                                <ul>
                                    <li><a href="{{ url('/') }}">Home page 01</a></li>
                                    <li><a href="#">Home page 02</a></li>
                                    <li><a href="#">Home page 03</a></li>
                                    <li class="dropdown"><a href="#">Header Styles</a>
                                        <ul>
                                            <li><a href="{{ url('/') }}">Header Style One</a></li>
                                            <li><a href="#">Header Style Two</a></li>
                                            <li><a href="#">Header Style Three</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/about') }}">About us</a></li>
                            <li class="current dropdown"><a href="#">Services</a>
                                <ul>
                                    <li><a href="{{ url('/services') }}">Services Version 01</a></li>
                                    <li><a href="#">Services Version 02</a></li>
                                    <li><a href="#">Building & Construction</a></li>
                                    <li><a href="#">Power Generation</a></li>
                                    <li><a href="#">Oil & Gas Engineering</a></li>
                                    <li><a href="{{ url('/auto-industry') }}">Automation Industry</a></li>
                                    <li><a href="#">Manufacturing Plants</a></li>
                                    <li><a href="#">Chemical Research</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Pages</a>
                                <ul>
                                    <li><a href="{{ url('/about') }}">About Us</a></li>
                                    <li><a href="#">Our Approach</a></li>
                                    <li><a href="{{ url('/team') }}">Our Team</a></li>
                                    <li><a href="#">Faq's</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">News</a>
                                <ul>
                                    <li><a href="#">Blog Default</a></li>
                                    <li><a href="#">Blog Post Details</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Main Menu End-->

                <!-- Main Menu End-->
                <div class="outer-box clearfix">
                    <!--Search Box-->
                    <div class="search-box-outer">
                        <div class="dropdown">
                            <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                            <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                <li class="panel-outer">
                                    <div class="form-container">
                                        <form method="post" action="#">
                                            <div class="form-group">
                                                <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Button Box -->
                    <div class="btn-box">
                        <a href="{{ url('/contact') }}" class="theme-btn btn-style-one">Get an Estimate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="{{ url('/') }}" title=""><img src="{{ asset('images/logo-small.png') }}" alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-collapse show collapse clearfix">
                        <ul class="navigation clearfix">
                            <li class="dropdown"><a href="#">Home</a>
                                <ul>
                                    <li><a href="{{ url('/') }}">Home page 01</a></li>
                                    <li><a href="#">Home page 02</a></li>
                                    <li><a href="#">Home page 03</a></li>
                                    <li class="dropdown"><a href="#">Header Styles</a>
                                        <ul>
                                            <li><a href="{{ url('/') }}">Header Style One</a></li>
                                            <li><a href="#">Header Style Two</a></li>
                                            <li><a href="#">Header Style Three</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/about') }}">About us</a></li>
                            <li class="current dropdown"><a href="#">Services</a>
                                <ul>
                                    <li><a href="{{ url('/services') }}">Services Version 01</a></li>
                                    <li><a href="#">Services Version 02</a></li>
                                    <li><a href="#">Building & Construction</a></li>
                                    <li><a href="#">Power Generation</a></li>
                                    <li><a href="#">Oil & Gas Engineering</a></li>
                                    <li><a href="{{ url('/auto-industry') }}">Automation Industry</a></li>
                                    <li><a href="#">Manufacturing Plants</a></li>
                                    <li><a href="#">Chemical Research</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Pages</a>
                                <ul>
                                    <li><a href="{{ url('/about') }}">About Us</a></li>
                                    <li><a href="#">Our Approach</a></li>
                                    <li><a href="{{ url('/team') }}">Our Team</a></li>
                                    <li><a href="#">Faq's</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">News</a>
                                <ul>
                                    <li><a href="#">Blog Default</a></li>
                                    <li><a href="#">Blog Post Details</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>
        </div>
    </div><!-- End Sticky Menu -->
</header>
<!-- End Main Header -->

<!--Page Title-->
<section class="page-banner" style="background-image:url({{ asset('images/background/breadcrumb.png') }});">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <h1>Automation Industry</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/services') }}">What We Do</a></li>
                <li>Automation Industry</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar padding-right">

                    <!-- Category Widget -->
                    <div class="sidebar-widget categories-two">
                        <div class="widget-content">
                            <!-- Services Category -->
                            <ul class="services-categories">
                                <li><a href="#">Building & Construction</a></li>
                                <li><a href="#">Power Generation</a></li>
                                <li><a href="#">Oil & Gas Engineering</a></li>
                                <li class="active"><a href="{{ url('/auto-industry') }}">Automation Industry</a></li>
                                <li><a href="#">Manufacturing Plants</a></li>
                                <li><a href="#">Chemical Research</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Brochures Widget -->
                    <div class="sidebar-widget brochures">
                        <div class="sidebar-title">
                            <h5>Service Downloads</h5>
                        </div>
                        <div class="widget-content">
                            <a href="#" class="brochure-btn"><span class="icon fas fa-file-pdf"></span> Presentation PDF</a>
                            <a href="#" class="brochure-btn"><span class="icon fas fa-file-alt"></span> Brochure DOC</a>
                        </div>
                    </div>

                    <!-- Services Widget -->
                    <div class="sidebar-widget services-widget">
                        <div class="widget-content" style="background-image:url({{ asset('images/resource/support.jpg') }});">
                            <div class="icon flaticon-settings-4"></div>
                            <h3>Optimising Perfomance with Special Services</h3>
                            <div class="text">Discover how we're improving <br> quality of Industries</div>
                            <a href="#" class="theme-btn btn-style-two">get in touch</a>
                        </div>
                    </div>

                    <!-- Support Widget -->
                    <div class="sidebar-widget support-widget">
                        <div class="widget-content">
                            <span class="icon flaticon-telephone-1"></span>
                            <div class="text">Got any Questions? <br> Call us Today!</div>
                            <div class="number">1-800-369-8527</div>
                            <div class="email"><a href="#">support@JIHI Hand Tools.net</a></div>
                        </div>
                    </div>

                </aside>
            </div>

            <!--Content Side / Services Detail-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="services-detail">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('images/resource/service-14.jpg') }}" alt="" />
                        </div>
                        <div class="lower-content">
                            <!-- Title Box -->
                            <div class="title-box">
                                <div class="title">We are JIHI Hand Tools</div>
                                <h2>Automation Industry</h2>
                            </div>
                            <div class="bold-text">Consectetur adipisicing elit sed do eiusmod tempor dolor magna aliquat enim veniam, quis nostrud exdra anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan catium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</div>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comds do consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla paria tur. Excepteur sint occaecat cupidatat non proident sunt in culpa.</p>
                                <h3>Why Choose us</h3>
                                <p>Auis nostrud exercitation ullamc laboris sed nisit aliquip ex bea sed consequat ipsum duis sit amet consecter adipisicing elit sed ipsum eiusmod tempor incididunt ut labore.</p>
                                <!-- Services Featured Outer -->
                                <div class="services-featured-outer">
                                    <div class="row clearfix">

                                        <!-- Feature Block -->
                                        <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                            <div class="inner-box">
                                                <div class="icon-box">
                                                    <span class="icon flaticon-home-2"></span>
                                                </div>
                                                <h4>Well Maintained</h4>
                                                <div class="featured-text">Incididunt laboret dolore magna exercitation laboris nisis dolor in derit in voluptate velit.</div>
                                            </div>
                                        </div>

                                        <!-- Feature Block -->
                                        <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                            <div class="inner-box">
                                                <div class="icon-box">
                                                    <span class="icon flaticon-fan"></span>
                                                </div>
                                                <h4>Modern Equipments</h4>
                                                <div class="featured-text">Incididunt laboret dolore magna exercitation laboris nisis dolor in derit in voluptate velit.</div>
                                            </div>
                                        </div>

                                        <!-- Feature Block -->
                                        <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                            <div class="inner-box">
                                                <div class="icon-box">
                                                    <span class="icon flaticon-worker"></span>
                                                </div>
                                                <h4>All Expert Engineers</h4>
                                                <div class="featured-text">Incididunt laboret dolore magna exercitation laboris nisis dolor in derit in voluptate velit.</div>
                                            </div>
                                        </div>

                                        <!-- Feature Block -->
                                        <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                            <div class="inner-box">
                                                <div class="icon-box">
                                                    <span class="icon flaticon-nuclear-plant"></span>
                                                </div>
                                                <h4>Power Efficient Factory</h4>
                                                <div class="featured-text">Incididunt laboret dolore magna exercitation laboris nisis dolor in derit in voluptate velit.</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- Default Two Column -->
                                <div class="default-two-column">
                                    <div class="row clearfix">
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <div class="image">
                                                <img src="{{ asset('images/resource/service-15.jpg') }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <p>Incididunt ut labore et dolore magna aliqua ut enim trud exercitation ullamco laboris nisi ut aliquip ex ea aute irure dolor in reprehenderit ex bea sed conseq uat ipsum duis sit amet.</p>
                                            <ul class="list-style-one">
                                                <li>Leading industrial solutions with machinery</li>
                                                <li>Voluptatem acusantium doloremque laudant</li>
                                                <li>Eperiam eaque ipsa quae ab illo inventore</li>
                                                <li>Quasi architecto beatae vitae dicta sunt</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <h3>Innovative Industrial Technology</h3>
                                <p>Auis nostrud exercitation ullamc laboris sed nisit aliquip ex bea sed consequat ipsum duis sit amet consecter adipisicing elit sed ipsum eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adip-isicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commod consequat. Duis aute irure dolor in reprehe derit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                            </div>

                            <h5>Our services at a glance ...</h5>
                            <!-- Fact Counter -->
                            <div class="fact-counter">
                                <div class="clearfix">

                                    <!--Column-->
                                    <div class="column counter-column col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="2000" data-stop="25">0</span>+
                                                <h4 class="counter-title">Years Experience</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Column-->
                                    <div class="column counter-column col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="2500" data-stop="36">0</span>
                                                <h4 class="counter-title">Industries Served</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Column-->
                                    <div class="column counter-column col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="105">0</span>
                                                <h4 class="counter-title">Factories Built</h4>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
