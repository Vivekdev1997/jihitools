@extends('layouts.app')

@section('title', 'JIHI Hand Tools | Quality Hand Tools Manufacturer')

@section('content')

<!--Main Slider-->
<section class="main-slider">

	<div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
		<div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
			<ul>

				<li data-transition="parallaxvertical" data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{ asset('images/main-slider/1.jpg') }}">
					<img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('images/main-slider/1.jpg') }}">

					<div class="tp-caption"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="text"
						data-height="none"
						data-width="['650','650','650','450']"
						data-whitespace="normal"
						data-hoffset="['15','15','15','15']"
						data-voffset="['-10','-10','-80','-80']"
						data-x="['left','left','left','left']"
						data-y="['middle','middle','middle','middle']"
						data-textalign="['top','top','top','top']"
						data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
						<div class="border-layer"></div>
					</div>

					<div class="tp-caption"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="text"
						data-height="none"
						data-width="['650','650','650','450']"
						data-whitespace="normal"
						data-hoffset="['80','80','15','15']"
						data-voffset="['-60','-60','-80','-80']"
						data-x="['left','left','left','left']"
						data-y="['middle','middle','middle','middle']"
						data-textalign="['top','top','top','top']"
						data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
						<h2>Quality Hand Tools <br> Built To Last</h2>
					</div>

					<div class="tp-caption"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="text"
						data-height="none"
						data-width="['650','650','650','450']"
						data-whitespace="normal"
						data-hoffset="['80','80','15','15']"
						data-voffset="['55','55','30','30']"
						data-x="['left','left','left','left']"
						data-y="['middle','middle','middle','middle']"
						data-textalign="['top','top','top','top']"
						data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
						<div class="text">Precision-engineered tools by JIHI Hand Tools</div>
					</div>

					<div class="tp-caption tp-resizeme"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="text"
						data-height="none"
						data-whitespace="normal"
						data-width="['650','650','650','450']"
						data-hoffset="['270','270','15','15']"
						data-voffset="['155','155','120','120']"
						data-x="['left','left','left','left']"
						data-y="['middle','middle','middle','middle']"
						data-textalign="['top','top','top','top']"
						data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
						<div class="link-box">
							<a href="{{ route('products') }}" class="theme-btn btn-style-two">View Products</a>
						</div>
					</div>

					<div class="tp-caption tp-resizeme"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="text"
						data-height="none"
						data-whitespace="normal"
						data-width="['650','650','650','450']"
						data-hoffset="['480','480','15','15']"
						data-voffset="['155','155','120','120']"
						data-x="['left','left','left','left']"
						data-y="['middle','middle','middle','middle']"
						data-textalign="['top','top','top','top']"
						data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
						<div class="icons-box clearfix">
							<span class="icon flaticon-drill-3"></span>
							<span class="icon flaticon-tools-1"></span>
							<span class="icon flaticon-tape-measure"></span>
						</div>
					</div>

				</li>

				<li data-transition="parallaxvertical" data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{ asset('images/main-slider/2.jpg') }}" data-title="Slide Title">
					<img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('images/main-slider/2.jpg') }}">

					<div class="tp-caption"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="text"
						data-height="none"
						data-width="['650','650','650','450']"
						data-whitespace="normal"
						data-hoffset="['15','15','15','15']"
						data-voffset="['-10','-10','-80','-80']"
						data-x="['left','left','left','left']"
						data-y="['middle','middle','middle','middle']"
						data-textalign="['top','top','top','top']"
						data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
						<div class="border-layer"></div>
					</div>

					<div class="tp-caption"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="text"
						data-height="none"
						data-width="['650','650','650','450']"
						data-whitespace="normal"
						data-hoffset="['80','80','15','15']"
						data-voffset="['-60','-60','-80','-80']"
						data-x="['left','left','left','left']"
						data-y="['middle','middle','middle','middle']"
						data-textalign="['top','top','top','top']"
						data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
						<h2>Precision In <br> Every Tool</h2>
					</div>

					<div class="tp-caption"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="text"
						data-height="none"
						data-width="['650','650','650','450']"
						data-whitespace="normal"
						data-hoffset="['80','80','15','15']"
						data-voffset="['55','55','30','30']"
						data-x="['left','left','left','left']"
						data-y="['middle','middle','middle','middle']"
						data-textalign="['top','top','top','top']"
						data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
						<div class="text">Trusted by professionals, workshops and industries</div>
					</div>

					<div class="tp-caption tp-resizeme"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="text"
						data-height="none"
						data-whitespace="normal"
						data-width="['650','650','650','450']"
						data-hoffset="['270','270','15','15']"
						data-voffset="['155','155','120','120']"
						data-x="['left','left','left','left']"
						data-y="['middle','middle','middle','middle']"
						data-textalign="['top','top','top','top']"
						data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
						<div class="link-box">
							<a href="{{ url('/contact') }}" class="theme-btn btn-style-two">Contact Us</a>
						</div>
					</div>

				</li>

			</ul>
		</div>
	</div>
</section>
<!--End Main Slider-->

<!-- Innovation Section (About) -->
<section class="innovation-section">
	<div class="auto-container">
		<div class="row clearfix">

			<!-- Content Column -->
			<div class="content-column col-lg-6 col-md-12 col-sm-12">
				<div class="inner-column">
					<!-- Sec Title -->
					<div class="sec-title wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="title">We are JIHI Hand Tools</div>
						<h2>Built For Performance. <br> Trusted By Professionals</h2>
					</div>
					<div class="bold-text">JIHI Hand Tools is a trusted manufacturer, supplier, and trader of premium-quality hand tools, engineering tools, industrial tools, automotive tools, and workshop equipment.</div>
					<div class="text">With a strong focus on precision engineering and customer satisfaction, every product is carefully selected or manufactured using quality materials and strict quality control processes. Our tools deliver consistent performance across industrial, automotive, construction, agricultural, engineering, and maintenance applications.</div>
					<div class="text">At JIHI, we believe that quality tools build quality work. Whether you are a professional technician, workshop owner, industrial buyer, contractor, retailer, or DIY user, we provide dependable solutions at competitive prices.</div>
					<ul style="margin:15px 0 5px;padding-left:0;list-style:none;">
						<li style="margin-bottom:8px;"><span class="fa fa-check" style="color:#fdc134;margin-right:10px;"></span>Premium Quality Products</li>
						<li style="margin-bottom:8px;"><span class="fa fa-check" style="color:#fdc134;margin-right:10px;"></span>Manufacturer, Supplier &amp; Trader</li>
						<li style="margin-bottom:8px;"><span class="fa fa-check" style="color:#fdc134;margin-right:10px;"></span>Bulk Supply for Industries &amp; Projects</li>
						<li style="margin-bottom:8px;"><span class="fa fa-check" style="color:#fdc134;margin-right:10px;"></span>Timely Delivery Across India</li>
					</ul>
					<div class="link-box" style="margin-top:20px;">
						<a href="{{ url('/about') }}" class="theme-btn btn-style-one">About Us</a>
					</div>
				</div>
			</div>

			<!-- Images Column -->
			<div class="images-column col-lg-6 col-md-12 col-sm-12">
				<div class="inner-column">
					<div class="image wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<img src="{{ asset('images/gallery/1.jpg') }}" alt="JIHI Hand Tools workshop" />
					</div>
					<div class="image wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<img src="{{ asset('images/resource/innovator-1.jpg') }}" alt="JIHI Hand Tools production" />
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- End Innovation Section -->

<!-- Services Section -->
<section class="services-section">
	<div class="auto-container">
		<div class="row clearfix">

			<!-- Services Block -->
			<div class="services-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
				<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="big-icon flaticon-settings-4"></div>
					<div class="icon-box">
						<span class="icon flaticon-drill-3"></span>
					</div>
					<h3><a href="{{ route('products') }}">Durable Build</a></h3>
					<div class="text">Hardened materials and solid construction for a long working life.</div>
					<a class="arrow" href="{{ route('products') }}"><span class="icon flaticon-next"></span></a>
				</div>
			</div>

			<!-- Services Block -->
			<div class="services-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
				<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
					<div class="big-icon flaticon-settings-4"></div>
					<div class="icon-box">
						<span class="icon flaticon-safety"></span>
					</div>
					<h3><a href="{{ route('products') }}">Safe To Use</a></h3>
					<div class="text">Comfortable, secure grips designed with user safety in mind.</div>
					<a class="arrow" href="{{ route('products') }}"><span class="icon flaticon-next"></span></a>
				</div>
			</div>

			<!-- Services Block -->
			<div class="services-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
				<div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
					<div class="big-icon flaticon-settings-4"></div>
					<div class="icon-box">
						<span class="icon flaticon-tools-1"></span>
					</div>
					<h3><a href="{{ route('products') }}">Precision Made</a></h3>
					<div class="text">Accurate machining and finishing for dependable results every time.</div>
					<a class="arrow" href="{{ route('products') }}"><span class="icon flaticon-next"></span></a>
				</div>
			</div>

			<!-- Services Block -->
			<div class="services-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
				<div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
					<div class="big-icon flaticon-settings-4"></div>
					<div class="icon-box">
						<span class="icon flaticon-tape-measure"></span>
					</div>
					<h3><a href="{{ route('products') }}">Quality Checked</a></h3>
					<div class="text">Every batch is inspected before it reaches your hands.</div>
					<a class="arrow" href="{{ route('products') }}"><span class="icon flaticon-next"></span></a>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- End Services Section -->

<!-- Products Section -->
<section class="news-section">
	<div class="auto-container">
		<!-- Sec Title -->
		<div class="sec-title centered">
			<div class="title">Our Products</div>
			<h2>Browse By Category</h2>
		</div>
		<div class="row clearfix">

			@forelse ($categories as $category)
				<!-- Category Block -->
				<div class="news-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="{{ ($loop->index % 3) * 300 }}ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="{{ route('products.category', $category) }}"><img src="{{ media_url($category->image) }}" alt="{{ $category->name }}" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="{{ route('products.category', $category) }}">{{ $category->name }}</a></h3>
							<div class="post-date">{{ $category->products_count }} {{ Str::plural('product', $category->products_count) }}</div>
							<a class="arrow" href="{{ route('products.category', $category) }}"><span class="icon flaticon-next"></span></a>
						</div>
					</div>
				</div>
			@empty
				<div class="col-12" style="text-align:center;padding:20px 0 40px;">
					<p>Our product catalogue is being updated. Please check back soon.</p>
				</div>
			@endforelse

		</div>
		@if ($categories->isNotEmpty())
			<div class="btn-box" style="text-align:center;margin-top:10px;">
				<a href="{{ route('products') }}" class="theme-btn btn-style-one">View All Products</a>
			</div>
		@endif
	</div>
</section>
<!-- End Products Section -->

@endsection
