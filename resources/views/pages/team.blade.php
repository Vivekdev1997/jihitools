@extends('layouts.app')

@section('title', 'Our Team | JIHI Hand Tools')

@section('content')

<!--Page Title-->
<section class="page-banner style-two" style="background-image:url({{ asset('images/background/team-title-bg.jpg') }});">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <h1>Our Team</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Team Members</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Team Section -->
<section class="team-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title">We are JIHI Hand Tools</div>
            <h2>Board of Directors</h2>
        </div>

        <div class="row">
            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="{{ url('/team') }}"><img src="{{ asset('images/resource/team-1.jpg') }}" alt=""></a></figure>
                    </div>
                    <div class="lower-content">
                        <h3 class="name"><a href="#">Daniel Ricardo</a></h3>
                        <span class="designation">Director & CEO</span>
                        <a class="arrow" href="#"><span class="icon flaticon-next"></span></a>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="{{ url('/team') }}"><img src="{{ asset('images/resource/team-2.jpg') }}" alt=""></a></figure>
                    </div>
                    <div class="lower-content">
                        <h3 class="name"><a href="#">Thomas Ralph</a></h3>
                        <span class="designation">Senior Director</span>
                        <a class="arrow" href="#"><span class="icon flaticon-next"></span></a>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="{{ url('/team') }}"><img src="{{ asset('images/resource/team-3.jpg') }}" alt=""></a></figure>
                    </div>
                    <div class="lower-content">
                        <h3 class="name"><a href="#">Alexander Max</a></h3>
                        <span class="designation">HR Manager</span>
                        <a class="arrow" href="#"><span class="icon flaticon-next"></span></a>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="{{ url('/team') }}"><img src="{{ asset('images/resource/team-4.jpg') }}" alt=""></a></figure>
                    </div>
                    <div class="lower-content">
                        <h3 class="name"><a href="#">Ruby Charlotte</a></h3>
                        <span class="designation">Engineering Head</span>
                        <a class="arrow" href="#"><span class="icon flaticon-next"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Team Section -->

<!-- Team Section -->
<section class="team-section-two">
    <div class="auto-container">
        <div class="row">
            <!-- Team Block -->
            <div class="team-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="{{ url('/team') }}"><img src="{{ asset('images/resource/team-5.jpg') }}" alt=""></a></figure>
                        <div class="overlay-box">
                            <ul class="contact-list">
                                <li><i class="icon icon-call-in"></i> <a href="#"> +1 (234) 567 8009</a></li>
                                <li><i class="icon icon-envelope-open"></i> <a href="#">ricardo@domain.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h3 class="name"><a href="#">Daniel Ricardo</a></h3>
                        <span class="designation">Director & CEO</span>
                        <ul class="social-links">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="300ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="{{ url('/team') }}"><img src="{{ asset('images/resource/team-6.jpg') }}" alt=""></a></figure>
                        <div class="overlay-box">
                            <ul class="contact-list">
                                <li><i class="icon icon-call-in"></i> <a href="#"> +1 (234) 567 8009</a></li>
                                <li><i class="icon icon-envelope-open"></i> <a href="#">ricardo@domain.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h3 class="name"><a href="#">Thomas Ralph</a></h3>
                        <span class="designation">Senior Director</span>
                        <ul class="social-links">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="600ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="{{ url('/team') }}"><img src="{{ asset('images/resource/team-7.jpg') }}" alt=""></a></figure>
                        <div class="overlay-box">
                            <ul class="contact-list">
                                <li><i class="icon icon-call-in"></i> <a href="#"> +1 (234) 567 8009</a></li>
                                <li><i class="icon icon-envelope-open"></i> <a href="#">ricardo@domain.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h3 class="name"><a href="#">Ruby Charlotte</a></h3>
                        <span class="designation">Engineering Head</span>
                        <ul class="social-links">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Team Section -->

@endsection