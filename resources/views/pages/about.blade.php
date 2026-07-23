@extends('layouts.app')

@section('title', 'About Us | JIHI Hand Tools')

@section('content')
<!--Page Title-->
<section class="page-banner style-two" style="background-image:url({{ asset('images/background/breadcrumb.png') }});">
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
            <div class="text">JIHI Hand Tools is a trusted manufacturer, trader, supplier and exporter of high quality hand tools, industrial tools, lubricant equipment and garden tools. We are committed to delivering reliable products that meet the demanding requirements of professionals across industrial, automotive, agricultural, construction and maintenance sectors.</div>
        </div>

        <div class="row">
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <figure class="image"><a href="{{ asset('images/resource/about.jpg') }}" class="lightbox-image"><img src="{{ asset('images/resource/about.jpg') }}" alt="JIHI Hand Tools"></a></figure>
                </div>
            </div>

            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="text">
                        <p>Our extensive product range is manufactured and sourced under strict quality standards to ensure durability, precision and consistent performance. Every product reflects our commitment to quality, innovation and customer satisfaction.</p>
                        <p><strong>With a growing network of dealers, distributors and business partners, JIHI Hand Tools continues to supply dependable tooling solutions across India and international markets.</p>
                        <p>Our goal is simple—to provide products that professionals can trust every day.</p>
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

                    <ul style="padding-left:0;list-style:none;margin-top:10px;">
                        <li style="margin-bottom:18px;">
                            <span class="fa fa-check" style="color:#fdc134;margin-right:10px;"></span><strong style="font-size:17px;">High Quality Products</strong>
                            <div style="margin-left:26px;margin-top:2px;">Manufactured and inspected to meet high-quality standards.</div>
                        </li>
                        <li style="margin-bottom:18px;">
                            <span class="fa fa-check" style="color:#fdc134;margin-right:10px;"></span><strong style="font-size:17px;">Wide Product Range</strong>
                            <div style="margin-left:26px;margin-top:2px;">Comprehensive solutions for industrial, workshop, agricultural and professional applications.</div>
                        </li>
                        <li style="margin-bottom:18px;">
                            <span class="fa fa-check" style="color:#fdc134;margin-right:10px;"></span><strong style="font-size:17px;">Competitive Pricing</strong>
                            <div style="margin-left:26px;margin-top:2px;">Best value without compromising on quality.</div>
                        </li>
                        <li style="margin-bottom:18px;">
                            <span class="fa fa-check" style="color:#fdc134;margin-right:10px;"></span><strong style="font-size:17px;">Reliable Supply Chain</strong>
                            <div style="margin-left:26px;margin-top:2px;">Consistent availability and timely delivery.</div>
                        </li>
                        <li style="margin-bottom:18px;">
                            <span class="fa fa-check" style="color:#fdc134;margin-right:10px;"></span><strong style="font-size:17px;">OEM &amp; Private Label Support</strong>
                            <div style="margin-left:26px;margin-top:2px;">Customized branding and packaging solutions.</div>
                        </li>
                        <li style="margin-bottom:18px;">
                            <span class="fa fa-check" style="color:#fdc134;margin-right:10px;"></span><strong style="font-size:17px;">Export Ready</strong>
                            <div style="margin-left:26px;margin-top:2px;">Professional packaging and documentation for international markets.</div>
                        </li>
                        <li style="margin-bottom:18px;">
                            <span class="fa fa-check" style="color:#fdc134;margin-right:10px;"></span><strong style="font-size:17px;">Dedicated Customer Support</strong>
                            <div style="margin-left:26px;margin-top:2px;">Responsive service before and after sales.</div>
                        </li>
                    </ul> 
                </div>
            </div>

            <!-- image Column -->
            <div class="image-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column" style="padding-top: 50px;">
                    <!-- <figure class="image wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"> -->
                    <img src="{{ asset('images/resource/about-why.jpg') }}" alt="JIHI Hand Tools">
                    <!-- </figure> -->
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

<!-- Mission & Vision Section -->
<section class="mission-section" style="background-image: url({{ asset('images/background/mission-bg.jpg') }});">
    <div class="auto-container">
        <div class="row no-gutters">
            <div class="colum col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="content-box" style="background-image: url({{ asset('images/icons/logo-icon-2.png') }});">
                        <h4>Our Vision</h4>
                        <div class="text">To provide dependable, innovative and high-quality tools that improve productivity while building long-term relationships through trust, quality and service.</div>
                    </div>
                    <div class="image-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <figure class="image"><a href="{{ asset('images/resource/jihi-vision.svg') }}" class="lightbox-image"><img src="{{ asset('images/resource/jihi-vision.svg') }}" alt="JIHI Hand Tools vision"></a></figure>
                    </div>
                </div>
            </div>

            <div class="colum right-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="image-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <figure class="image"><a href="{{ asset('images/resource/jihi-mission.svg') }}" class="lightbox-image"><img src="{{ asset('images/resource/jihi-mission.svg') }}" alt="JIHI Hand Tools set"></a></figure>
                    </div>
                    <div class="content-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms" style="background-image: url({{ asset('images/icons/logo-icon-2.png') }});">
                        <h4>Our Mission</h4>
                        <div class="text">To become one of the most trusted global brands in hand tools and industrial solutions by delivering excellence in quality, innovation and customer satisfaction.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Mission & Vision Section -->

<!-- Our Values Section -->
<section class="about-section" style="padding:80px 0 40px;">
    <div class="auto-container">
        <div class="sec-title centered">
            <div class="title">What We Stand For</div>
            <h2>Our Values</h2>
        </div>
        <div class="row clearfix">
            @php
                $values = [
                    ['flaticon-tools-1', 'Quality First'],
                    ['flaticon-engineer-2', 'Customer Commitment'],
                    ['flaticon-drill-3', 'Innovation'],
                    ['flaticon-safety', 'Integrity'],
                    ['flaticon-settings-4', 'Reliability'],
                    ['flaticon-tape-measure', 'Continuous Improvement'],
                ];
            @endphp
            @foreach ($values as [$icon, $label])
                <div class="col-lg-4 col-md-6 col-sm-12" style="margin-bottom:30px;">
                    <div class="wow fadeInUp" data-wow-delay="{{ ($loop->index % 3) * 200 }}ms" data-wow-duration="1500ms"
                         style="display:flex;align-items:center;background:#f7f8fa;border-left:3px solid #e8641c;border-radius:6px;padding:22px 24px;height:100%;">
                        <span class="icon {{ $icon }}" style="font-size:34px;color:#e8641c;margin-right:18px;line-height:1;"></span>
                        <h4 style="margin:0;font-size:18px;">{{ $label }}</h4>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Our Values Section -->

<!-- Dealer & Distributor Section -->
<section class="about-section-two" style="background-image:url({{ asset('images/background/about-section-two-bg.png') }});padding:80px 0;">
    <div class="auto-container">
        <div class="title-style-one style-two centered">
            <div class="subtitle">Dealer &amp; Distributor Invitation</div>
            <h2>Become Our Dealer or Distributor</h2>
            <div class="text">Partner with JIHI Hand Tools and grow your business with a trusted tools brand. We welcome dealers, distributors, wholesalers, retailers and export partners looking for reliable products, competitive pricing and consistent supply.</div>
        </div>

        <div class="row clearfix" style="margin-top:20px;">
            <div class="col-md-6">
                <ul style="padding-left:0;list-style:none;">
                    <li style="font-size:17px;margin-bottom:16px;"><span class="fa fa-check" style="color:#e8641c;margin-right:12px;"></span>Wide Product Portfolio</li>
                    <li style="font-size:17px;margin-bottom:16px;"><span class="fa fa-check" style="color:#e8641c;margin-right:12px;"></span>Attractive Dealer Margins</li>
                    <li style="font-size:17px;margin-bottom:16px;"><span class="fa fa-check" style="color:#e8641c;margin-right:12px;"></span>Marketing &amp; Branding Support</li>
                    <li style="font-size:17px;margin-bottom:16px;"><span class="fa fa-check" style="color:#e8641c;margin-right:12px;"></span>Reliable Inventory Supply</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul style="padding-left:0;list-style:none;">
                    <li style="font-size:17px;margin-bottom:16px;"><span class="fa fa-check" style="color:#e8641c;margin-right:12px;"></span>Fast Order Processing</li>
                    <li style="font-size:17px;margin-bottom:16px;"><span class="fa fa-check" style="color:#e8641c;margin-right:12px;"></span>OEM &amp; Private Label Opportunities</li>
                    <li style="font-size:17px;margin-bottom:16px;"><span class="fa fa-check" style="color:#e8641c;margin-right:12px;"></span>Dedicated Business Support</li>
                    <li style="font-size:17px;margin-bottom:16px;"><span class="fa fa-check" style="color:#e8641c;margin-right:12px;"></span>Long-Term Partnership</li>
                </ul>
            </div>
        </div>

        <div style="text-align:center;margin-top:20px;">
            <p style="font-size:17px;"><strong>Let's build success together. Join the JIHI Dealer &amp; Distributor Network today.</strong></p>
            <div class="btn-box" style="margin-top:20px;">
                <a href="{{ url('/contact') }}" class="theme-btn btn-style-one">Become a Partner</a>
            </div>
        </div>
    </div>
</section>
<!-- End Dealer & Distributor Section -->

<!-- Supplier CTA Section -->
<section class="quote-section wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
    <div class="auto-container">
        <div class="inner-section">
            <div class="clearfix">
                <div class="pull-left">
                    <div class="content">
                        <div class="icon flaticon-hammer"></div>
                        <h3>Looking For A Reliable Hand Tool Supplier?</h3>
                        <div class="text">Contact us today to explore dealership, distributorship, bulk supply,<br> and OEM business opportunities with JIHI Hand Tools</div>
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