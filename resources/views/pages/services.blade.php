@extends('layouts.app')

@section('title', 'Our Services | JIHI Hand Tools')

@section('content')

<!--Page Title-->
<section class="page-banner style-two" style="background-image:url({{ asset('images/background/breadcrumb.png') }});">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <h1>Our Services</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>What We Do</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Services Section Three -->
<section class="services-section-three style-two">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title">
            <div class="row">
                <div class="col-lg-4 col-md-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="title">We are JIHI Hand Tools</div>
                    <h2>We’re Helping Industries</h2>
                </div>
                <div class="col-lg-8 col-md-12 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="text">Aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit voluptate velit sunt culpa quis officia deseru mollit anim ipsum id est laborum sed do eiusmod tempor incididunt.</div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Services Block Three -->
            <div class="services-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="#"><img src="{{ asset('images/resource/service-2-1.jpg') }}" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">Building & Construction</a></h3>
                        <div class="text">Auis nostrud exercitation ullamc laboris nisitm aliquip ex bea sed consequat duis autes ure dolor. dolore magna aliqua nim ad minim.</div>
                        <a href="#" class="read-more">Read More <span class="fas fa-angle-right"></span></a>
                    </div>
                </div>
            </div>

            <!-- Services Block Three -->
            <div class="services-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="#"><img src="{{ asset('images/resource/service-2-2.jpg') }}" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">Chemical Research</a></h3>
                        <div class="text">Auis nostrud exercitation ullamc laboris nisitm aliquip ex bea sed consequat duis autes ure dolor. dolore magna aliqua nim ad minim.</div>
                        <a href="#" class="read-more">Read More <span class="fas fa-angle-right"></span></a>
                    </div>
                </div>
            </div>

            <!-- Services Block Three -->
            <div class="services-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="#"><img src="{{ asset('images/resource/service-2-3.jpg') }}" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">Oil & Gas Engineering</a></h3>
                        <div class="text">Auis nostrud exercitation ullamc laboris nisitm aliquip ex bea sed consequat duis autes ure dolor. dolore magna aliqua nim ad minim.</div>
                        <a href="#" class="read-more">Read More <span class="fas fa-angle-right"></span></a>
                    </div>
                </div>
            </div>

            <!-- Services Block Three -->
            <div class="services-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="#"><img src="{{ asset('images/resource/service-2-4.jpg') }}" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">Petrolium Refinery</a></h3>
                        <div class="text">Auis nostrud exercitation ullamc laboris nisitm aliquip ex bea sed consequat duis autes ure dolor. dolore magna aliqua nim ad minim.</div>
                        <a href="#" class="read-more">Read More <span class="fas fa-angle-right"></span></a>
                    </div>
                </div>
            </div>

            <!-- Services Block Three -->
            <div class="services-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="{{ url('/auto-industry') }}"><img src="{{ asset('images/resource/service-2-5.jpg') }}" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <h3><a href="{{ url('/auto-industry') }}">Automation Industry</a></h3>
                        <div class="text">Auis nostrud exercitation ullamc laboris nisitm aliquip ex bea sed consequat duis autes ure dolor. dolore magna aliqua nim ad minim.</div>
                        <a href="{{ url('/auto-industry') }}" class="read-more">Read More <span class="fas fa-angle-right"></span></a>
                    </div>
                </div>
            </div>

            <!-- Services Block Three -->
            <div class="services-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="{{ url('/auto-industry') }}"><img src="{{ asset('images/resource/service-2-6.jpg') }}" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <h3><a href="{{ url('/auto-industry') }}">Mechanical Works</a></h3>
                        <div class="text">Auis nostrud exercitation ullamc laboris nisitm aliquip ex bea sed consequat duis autes ure dolor. dolore magna aliqua nim ad minim.</div>
                        <a href="{{ url('/auto-industry') }}" class="read-more">Read More <span class="fas fa-angle-right"></span></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Services Section Three -->

<!-- Skill Section -->
<section class="skill-section" style="background-image:url({{ asset('images/background/1.jpg') }})">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Skill Column -->
            <div class="skill-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h2>We produce positive results from ever-growing <span>Industrial & manufacturing</span> estates.</h2>

                    <!--Skills-->
                    <div class="skills">
                        <!--Skill Item-->
                        <div class="skill-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">Latest Equipemnts Used</div>
                                <div class="skill-percentage">
                                    <div class="count-box"><span class="count-text" data-speed="2000" data-stop="95">0</span>%</div>
                                </div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="95"></div>
                                </div>
                            </div>
                        </div>
                        <!--Skill Item-->
                        <div class="skill-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">Factories Production</div>
                                <div class="skill-percentage">
                                    <div class="count-box"><span class="count-text" data-speed="2000" data-stop="80">0</span>%</div>
                                </div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="80"></div>
                                </div>
                            </div>
                        </div>
                        <!--Skill Item-->
                        <div class="skill-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">Management & Services</div>
                                <div class="skill-percentage">
                                    <div class="count-box"><span class="count-text" data-speed="2000" data-stop="65">0</span>%</div>
                                </div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="65"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Video Column -->
            <div class="video-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column clearfix">

                    <!--Video Box-->
                    <div class="video-link-box">
                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-box"><span class="icon-outer"><span class="icon flaticon-play-button"><i class="ripple"></i></span></span></a>
                        <div class="video-title">watch the intro video</div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Skill Section -->

<!-- Clients Section -->
<section class="clients-section">
    <div class="auto-container">
        <div class="logo-icon flaticon-settings-4"></div>
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title">We are JIHI Hand Tools</div>
            <h2>Client’s Reviews</h2>
        </div>

        <div class="single-item-carousel owl-carousel owl-theme">

            <!-- Testimonial Block -->
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="image-outer">
                        <!-- Quote Left -->
                        <div class="quote quote-left">
                            <span class="icon flaticon-right-quotation-sign"></span>
                        </div>
                        <!-- Quote Right -->
                        <div class="quote quote-right">
                            <span class="icon flaticon-right-quotation-sign"></span>
                        </div>
                        <div class="image">
                            <img src="{{ asset('images/resource/author-1.jpg') }}" alt="" />
                        </div>
                    </div>
                    <div class="text">Since vindictively over agile the some far well besides constructively well airy then one during with close excellent grabbed gosh contrary far dalmatian upheld intrepid bought and toucan majestic more some apart dear boa much cast falcon a dwelled ouch busy.</div>
                    <h3>James Shane Well</h3>
                    <div class="location">California, USA</div>
                </div>
            </div>

            <!-- Testimonial Block -->
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="image-outer">
                        <!-- Quote Left -->
                        <div class="quote quote-left">
                            <span class="icon flaticon-right-quotation-sign"></span>
                        </div>
                        <!-- Quote Right -->
                        <div class="quote quote-right">
                            <span class="icon flaticon-right-quotation-sign"></span>
                        </div>
                        <div class="image">
                            <img src="{{ asset('images/resource/author-1.jpg') }}" alt="" />
                        </div>
                    </div>
                    <div class="text">Since vindictively over agile the some far well besides constructively well airy then one during with close excellent grabbed gosh contrary far dalmatian upheld intrepid bought and toucan majestic more some apart dear boa much cast falcon a dwelled ouch busy.</div>
                    <h3>James Shane Well</h3>
                    <div class="location">California, USA</div>
                </div>
            </div>

            <!-- Testimonial Block -->
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="image-outer">
                        <!-- Quote Left -->
                        <div class="quote quote-left">
                            <span class="icon flaticon-right-quotation-sign"></span>
                        </div>
                        <!-- Quote Right -->
                        <div class="quote quote-right">
                            <span class="icon flaticon-right-quotation-sign"></span>
                        </div>
                        <div class="image">
                            <img src="{{ asset('images/resource/author-1.jpg') }}" alt="" />
                        </div>
                    </div>
                    <div class="text">Since vindictively over agile the some far well besides constructively well airy then one during with close excellent grabbed gosh contrary far dalmatian upheld intrepid bought and toucan majestic more some apart dear boa much cast falcon a dwelled ouch busy.</div>
                    <h3>James Shane Well</h3>
                    <div class="location">California, USA</div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Clients Section -->

<!-- Sponsors Section -->
<section class="sponsors-section alternate-2">
    <div class="auto-container">
        <div class="factories-icons-carousel owl-carousel owl-theme">

            <div class="logo">
                <a href="#"><img src="{{ asset('images/clients/6.png') }}" alt="" /></a>
            </div>

            <div class="logo">
                <a href="#"><img src="{{ asset('images/clients/7.png') }}" alt="" /></a>
            </div>

            <div class="logo">
                <a href="#"><img src="{{ asset('images/clients/8.png') }}" alt="" /></a>
            </div>

            <div class="logo">
                <a href="#"><img src="{{ asset('images/clients/9.png') }}" alt="" /></a>
            </div>

            <div class="logo">
                <a href="#"><img src="{{ asset('images/clients/10.png') }}" alt="" /></a>
            </div>

            <div class="logo">
                <a href="#"><img src="{{ asset('images/clients/6.png') }}" alt="" /></a>
            </div>

            <div class="logo">
                <a href="#"><img src="{{ asset('images/clients/7.png') }}" alt="" /></a>
            </div>

            <div class="logo">
                <a href="#"><img src="{{ asset('images/clients/8.png') }}" alt="" /></a>
            </div>

            <div class="logo">
                <a href="#"><img src="{{ asset('images/clients/9.png') }}" alt="" /></a>
            </div>

            <div class="logo">
                <a href="#"><img src="{{ asset('images/clients/10.png') }}" alt="" /></a>
            </div>
        </div>
    </div>
</section>
<!-- End Sponsors Section -->

@endsection