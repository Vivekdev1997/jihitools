@extends('layouts.app')

@section('title', 'About Us | JIHI Hand Tools')

@section('content')
<!--Page Title-->
<section class="page-banner style-two" style="background-image:url({{ asset('images/background/about-page-title-bg.jpg') }});">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <h1>About Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>About JIHI Hand Tools</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- About Section -->
<section class="about-section-two" style="background-image:url({{ asset('images/background/about-section-two-bg.png') }});">
    <div class="auto-container">
        <div class="title-style-one style-two centered">
            <div class="subtitle">About Us</div>
            <h2>Built For Performance. <br>Trusted By Professionals</h2>
            <div class="text">JIHI Hand Tools is a trusted manufacturer, supplier, and trader of premium-quality hand tools, engineering tools, industrial tools, automotive tools, and workshop equipment. We are committed to delivering reliable products that meet the highest standards of quality, durability, and performance.</div>
        </div>

        <div class="row">
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <figure class="image"><a href="{{ asset('images/resource/image-1.jpg') }}" class="lightbox-image"><img src="{{ asset('images/resource/image-1.jpg') }}" alt="JIHI Hand Tools"></a></figure>
                </div>
            </div>

            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="text">
                        <p>With a strong focus on precision engineering and customer satisfaction, every product is carefully selected or manufactured using quality materials and strict quality control processes. Our tools are designed to deliver consistent performance across industrial, automotive, construction, agricultural, engineering, and maintenance applications.</p>
                        <p><strong>At JIHI, we believe that quality tools build quality work.</strong> Whether you are a professional technician, workshop owner, industrial buyer, contractor, retailer, or DIY user, we provide dependable solutions at competitive prices.</p>
                    </div>
                    <div class="fact-counter wow fadeInRightBig" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="clearfix">
                            <!--Column-->
                            <div class="column counter-column col-lg-4 col-md-4 col-sm-12">
                                <div class="inner">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="2000" data-stop="10">0</span>+
                                        <h4 class="counter-title">Years Experience</h4>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-lg-4 col-md-4 col-sm-12">
                                <div class="inner">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="2500" data-stop="100">0</span>+
                                        <h4 class="counter-title">Products Range</h4>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-lg-4 col-md-4 col-sm-12">
                                <div class="inner">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="500">0</span>+
                                        <h4 class="counter-title">Happy Customers</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->

<!-- Why Choose Us Section -->
<section class="faq-section">
    <div class="auto-container">
        <div class="row">
            <!-- Content Column -->
            <div class="accordion-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="title-style-one">
                        <div class="subtitle">Our Advantages</div>
                        <h2>Why Choose JIHI Hand Tools?</h2>
                    </div>

                    <div class="row" style="margin-top:10px;">
                        <div class="col-md-6">
                            <ul style="padding-left:0;list-style:none;">
                                <li style="margin-bottom:14px;"><span class="fa fa-check" style="color:#fdc134;margin-right:10px;"></span>Premium Quality Products</li>
                                <li style="margin-bottom:14px;"><span class="fa fa-check" style="color:#fdc134;margin-right:10px;"></span>Manufacturer, Supplier &amp; Trader</li>
                                <li style="margin-bottom:14px;"><span class="fa fa-check" style="color:#fdc134;margin-right:10px;"></span>Wide Range of Industrial Hand Tools</li>
                                <li style="margin-bottom:14px;"><span class="fa fa-check" style="color:#fdc134;margin-right:10px;"></span>Competitive Pricing</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul style="padding-left:0;list-style:none;">
                                <li style="margin-bottom:14px;"><span class="fa fa-check" style="color:#fdc134;margin-right:10px;"></span>Reliable Quality Control</li>
                                <li style="margin-bottom:14px;"><span class="fa fa-check" style="color:#fdc134;margin-right:10px;"></span>Bulk Supply for Industries &amp; Projects</li>
                                <li style="margin-bottom:14px;"><span class="fa fa-check" style="color:#fdc134;margin-right:10px;"></span>Timely Delivery Across India</li>
                                <li style="margin-bottom:14px;"><span class="fa fa-check" style="color:#fdc134;margin-right:10px;"></span>Dedicated Customer Support</li>
                            </ul>
                        </div>
                    </div>

                    <div class="btn-box" style="margin-top:25px;">
                        <a href="{{ route('products') }}" class="theme-btn btn-style-one">Explore Our Products</a>
                    </div>
                </div>
            </div>

            <!-- image Column -->
            <div class="image-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <figure class="image wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="{{ asset('images/resource/man-img-1.png') }}" alt="JIHI Hand Tools"></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Why Choose Us Section -->

<!-- Business Partner Section -->
<section class="quote-section wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
    <div class="auto-container">
        <div class="inner-section">
            <div class="clearfix">
                <div class="pull-left">
                    <div class="content">
                        <div class="icon flaticon-hammer"></div>
                        <h3>Become Our Business Partner</h3>
                        <div class="text">We welcome Dealers, Distributors and OEM Partners across India — let's build success together</div>
                    </div>
                </div>
                <div class="pull-right">
                    <a href="{{ url('/contact') }}" class="theme-btn btn-style-three">Partner With Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Business Partner Section -->

<!-- Partner Details Section -->
<section class="about-section" style="padding:80px 0 60px;">
    <div class="auto-container" style="max-width:900px;text-align:center;">
        <div class="sec-title centered">
            <div class="title">Grow With Us</div>
            <h2>Join The JIHI Family</h2>
        </div>
        <p>We are continuously expanding our distribution network across India and welcome <strong>Dealers, Distributors and OEM Partners</strong> to join the JIHI family.</p>
        <p>If you are looking for a reliable business partner offering quality products, competitive pricing, and long-term support, we invite you to grow with us.</p>
    </div>
</section>
<!-- End Partner Details Section -->

<!-- Mission & Vision Section -->
<section class="mission-section" style="background-image: url({{ asset('images/background/mission-bg.jpg') }});">
    <div class="auto-container">
        <div class="row no-gutters">
            <div class="colum col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="content-box" style="background-image: url({{ asset('images/icons/logo-icon-2.png') }});">
                        <h4>Our Vision</h4>
                        <div class="text">To become one of India's most trusted and preferred hand tool brands by delivering innovative, durable, and value-driven products backed by exceptional customer service.</div>
                    </div>
                    <div class="image-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <figure class="image"><a href="{{ asset('images/resource/vision.jpg') }}" class="lightbox-image"><img src="{{ asset('images/resource/vision.jpg') }}" alt="Our Vision"></a></figure>
                    </div>
                </div>
            </div>

            <div class="colum right-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="image-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <figure class="image"><a href="{{ asset('images/resource/mission.jpg') }}" class="lightbox-image"><img src="{{ asset('images/resource/mission.jpg') }}" alt="Our Mission"></a></figure>
                    </div>
                    <div class="content-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms" style="background-image: url({{ asset('images/icons/logo-icon-2.png') }});">
                        <h4>Our Mission</h4>
                        <div class="text">To provide high-quality hand tools that enhance productivity, ensure safety, and create long-term value for our customers while building strong relationships with dealers, distributors, and industrial partners.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Mission & Vision Section -->

<!-- Supplier CTA Section -->
<section class="quote-section wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
    <div class="auto-container">
        <div class="inner-section">
            <div class="clearfix">
                <div class="pull-left">
                    <div class="content">
                        <div class="icon flaticon-hammer"></div>
                        <h3>Looking For A Reliable Hand Tool Supplier?</h3>
                        <div class="text">Contact us today to explore dealership, distributorship, bulk supply, and OEM business opportunities with JIHI Hand Tools</div>
                    </div>
                </div>
                <div class="pull-right">
                    <a href="{{ url('/contact') }}" class="theme-btn btn-style-three">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Supplier CTA Section -->

@endsection
