@extends('layouts.app')

@section('title', 'Contact Us | JIHI Hand Tools')

@section('content')
<!--Page Title-->
<section class="page-banner" style="background-image:url({{ asset('images/background/3.jpg') }});">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <h1>Contact us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Get In Touch</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Page Section -->
<section class="contact-page-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Info Column -->
            <div class="info-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInLeft" data-wow-delay="0ms">
                    <!-- Title Box -->
                    <div class="title-box">
                        <h3>Contact Details</h3>
                        <div class="title-text">Get in touch with us for any questions about our industries or products.</div>
                    </div>
                    <ul class="contact-info-list">
                        <li><span class="icon icon-home"></span><strong>Head Office</strong>{{ setting('address', '—') }}</li>
                        <li><span class="icon icon-location-pin"></span><strong>Factory Address</strong>{{ setting('factory_address', '—') }}</li>
                        <li><span class="icon icon-envelope-open"></span><strong>Email us</strong>{{ setting('email', '—') }}</li>
                        <li><span class="icon icon-call-in"></span><strong>Call Support</strong>{{ setting('phone', '—') }}</li>
                    </ul>

                    <!-- Social Links -->
                    <ul class="social-links">
                        <li><a href="{{ setting('facebook', '#') }}"><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href="{{ setting('instagram', '#') }}"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="{{ setting('twitter', '#') }}"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="{{ setting('linkedin', '#') }}"><span class="fab fa-linkedin-in"></span></a></li>
                        <li><a href="{{ setting('youtube', '#') }}"><span class="fab fa-youtube"></span></a></li>
                    </ul>

                </div>
            </div>

            <!-- Form Column -->
            <div class="form-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInRight" data-wow-delay="0ms">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <div class="title">We are JIHI Hand Tools</div>
                        <h2>Send a Message</h2>
                    </div>

                    @if (session('success'))
                        <div style="background:#e6f7e9;border:1px solid #34c759;color:#1a7a30;padding:15px 20px;border-radius:6px;margin-bottom:25px;">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div style="background:#fdecea;border:1px solid #e74c3c;color:#a94442;padding:15px 20px;border-radius:6px;margin-bottom:25px;">
                            <ul style="margin:0;padding-left:18px;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Contact Form -->
                    <div class="contact-form">
                        <form method="post" action="{{ route('contact.send') }}" id="contact-form">
                            @csrf
                            <div class="row clearfix">

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="First Name " required>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name ">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email " required>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Phone ">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="company" value="{{ old('company') }}" placeholder="Company ">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="subject" value="{{ old('subject') }}" placeholder="Subject ">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Message ">{{ old('message') }}</textarea>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <button class="theme-btn btn-style-five" type="submit" name="submit-form">Send Now</button>
                                </div>

                            </div>
                        </form>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Contact Page Section -->
@endsection
