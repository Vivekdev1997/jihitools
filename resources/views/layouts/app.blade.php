<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	@php $pageMeta = \App\Models\PageMeta::bySlug(\Illuminate\Support\Facades\Route::currentRouteName()); @endphp
	@if ($pageMeta && $pageMeta->meta_title)
		<title>{{ $pageMeta->meta_title }}</title>
	@else
		<title>@yield('title', 'JIHI Hand Tools')</title>
	@endif
	@if ($pageMeta && $pageMeta->meta_keywords)
		<meta name="keywords" content="{{ $pageMeta->meta_keywords }}">
	@endif
	@if ($pageMeta && $pageMeta->meta_description)
		<meta name="description" content="{{ $pageMeta->meta_description }}">
	@endif
	<!-- Stylesheets -->
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('plugins/revolution/css/settings.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
	<link href="{{ asset('plugins/revolution/css/layers.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
	<link href="{{ asset('plugins/revolution/css/navigation.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->

	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

	<link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
	<link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="{{ asset('js/respond.js') }}"></script><![endif]-->

	<style>
		/* Uniform product/category cards — equal heights, no zigzag */
		.news-section .row.clearfix { display: flex; flex-wrap: wrap; }
		.news-section .news-block { display: flex; margin-bottom: 30px; }
		.news-section .news-block > .inner-box { display: flex; flex-direction: column; width: 100%; height: 100%; }
		.news-section .news-block .inner-box .image { overflow: hidden; }
		.news-section .news-block .inner-box .image img { width: 100%; height: 250px; object-fit: cover; display: block; }
		.news-section .news-block .inner-box .lower-content { flex: 1 1 auto; }
	</style>
</head>

<body>

	<div class="page-wrapper">
		<!-- Preloader -->
		<div class="preloader"></div>

		<header class="main-header">
			<!--Header Top-->
			<div class="header-top">
				<div class="auto-container clearfix">
					<div class="top-left clearfix">
						<div class="text">{{ setting('top_bar_text', 'We offer revolution of industrial engineering') }}</div>
						<!-- Social Links -->
						<ul class="social-links clearfix">
							<li><a href="{{ setting('facebook', '#') }}"><span class="fab fa-facebook-f"></span></a></li>
							<li><a href="{{ setting('instagram', '#') }}"><span class="fab fa-instagram"></span></a></li>
							<li><a href="{{ setting('twitter', '#') }}"><span class="fab fa-twitter"></span></a></li>
							<li><a href="{{ setting('linkedin', '#') }}"><span class="fab fa-linkedin-in"></span></a></li>
							<li><a href="{{ setting('youtube', '#') }}"><span class="fab fa-youtube"></span></a></li>
						</ul>
					</div>
					<div class="top-right clearfix">
						<!-- Info List -->
						<ul class="info-list clearfix">
							<li><a href="tel:{{ setting('phone') }}"><span class="icon fa fa-phone-square"></span> <span class="txt">{{ setting('phone') }}</span></a></li>
							<li><a href="mailto:{{ setting('email') }}"><span class="icon fa fa-envelope"></span> <span class="txt">{{ setting('email') }}</span></a></li>
							<li><a href="{{ route('admin.login') }}" target="_blank"><span class="icon fa fa-user"></span> <span class="txt">{{ auth()->check() ? 'Admin Panel' : 'Admin Login' }}</span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- End Header Top -->

			<!-- Header Upper -->
			<div class="header-upper">
				<div class="inner-container">
					<div class="auto-container clearfix">
						<!--Info-->
						<div class="logo-outer">
							<div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt="" title=""></a></div>
						</div>

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
									@include('layouts.nav')
								</div>
							</nav>
							<!-- Main Menu End-->

							<!-- Main Menu End-->
							<div class="outer-box clearfix">
								<!--Search Box-->
								<!-- <div class="search-box-outer">
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
								</div> -->

								<!-- Button Box -->
								<div class="btn-box">
									<a href="{{ url('/contact') }}" class="theme-btn btn-style-one">Get an Estimate</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--End Header Upper-->

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
								@include('layouts.nav')
							</div>
						</nav><!-- Main Menu End-->
					</div>
				</div>
			</div><!-- End Sticky Menu -->
		</header>
		<!-- End Main Header -->

		@yield('content')

		<!--Newsleter Section-->
		<!-- <section class="newsletter-section wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
			<div class="auto-container">
				<div class="inner-container">
					<div class="row clearfix"> 
						<div class="title-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<h2>Stay Updated With Our Newsletter</h2>
							</div>
						</div> 
						<div class="form-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column"> 
								<div class="subscribe-form">
									<form method="post" action="#">
										<div class="form-group">
											<span class="icon far fa-envelope"></span>
											<input type="email" name="email" value="" placeholder="Email address ..." required>
											<button type="submit" class="theme-btn submit-btn">Submit</button>
										</div>
									</form>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>
		</section> -->
		<!--End Newsleter Section-->

		<!--Main Footer-->
		<footer class="main-footer">

			<div class="auto-container">

				<!--Widgets Section-->
				<div class="widgets-section">
					<div class="row clearfix">

						<!--big column-->
						<div class="big-column col-lg-6 col-md-12 col-sm-12">
							<div class="row clearfix">

								<!--Footer Column-->
								<div class="footer-column col-lg-6 col-md-6 col-sm-12">
									<div class="footer-widget about-widget">
										<h2>JIHI Hand Tools</h2>
										<div class="text">{{ setting('footer_about') }}</div>
										<a href="{{ url('/about') }}" class="theme-btn btn-style-four">About Company</a>
									</div>
								</div>

								<!--Footer Column-->
								<div class="footer-column col-lg-6 col-md-6 col-sm-12">
									<div class="footer-widget services-widget">
										<h2>Our Products</h2>
										<ul class="footer-service-list">
											@forelse ($navCategories as $navCategory)
												<li><a href="{{ route('products.category', $navCategory) }}">{{ $navCategory->name }}</a></li>
											@empty
												<li><a href="{{ route('products') }}">All Products</a></li>
											@endforelse
										</ul>
									</div>
								</div>

							</div>
						</div>

						<!--big column-->
						<div class="big-column col-lg-6 col-md-12 col-sm-12">
							<div class="row clearfix">

								<!--Footer Column-->
								<div class="footer-column col-lg-5 col-md-6 col-sm-12">
									<div class="footer-widget services-widget">
										<h2>Quick Links</h2>
										<ul class="footer-service-list">
											<li><a href="{{ url('/') }}">Home</a></li>
											<li><a href="{{ url('/about') }}">About Us</a></li>
											<li><a href="{{ route('products') }}">Products</a></li>
											<li><a href="{{ url('/contact') }}">Contact</a></li>
										</ul>
									</div>
								</div>

								<!--Footer Column-->
								<div class="footer-column col-lg-7 col-md-6 col-sm-12">
									<div class="footer-widget contact-widget">
										<h2>Contact</h2>
										<div class="number"><span class="icon fa fa-phone-square"></span> {{ setting('phone') }}</div>
										<ul>
											<li><span class="icon fa fa-home"></span> {{ setting('address') }}</li>
											<li><span class="icon fa fa-envelope"></span> <a href="mailto:{{ setting('email') }}"> {{ setting('email') }}</a></li>
											<li><span class="icon fa fa-clock"></span> {{ setting('working_hours') }}</li>
										</ul>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>

				<!-- Footer Bottom -->
				<div class="footer-bottom">
					<div class="clearfix">
						<div class="pull-left">
							<div class="copyright">{{ setting('copyright', '© ' . date('Y') . ' JIHI Hand Tools. All rights reserved.') }}</div>
						</div>
						<div class="pull-right">
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
				</div>

			</div>
		</footer>

	</div>
	<!--End pagewrapper-->

	<!--Scroll to top-->
	<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
	<!--Scroll to top-->

	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<!--Revolution Slider-->
	<script src="{{ asset('plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
	<script src="{{ asset('plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
	<script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
	<script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
	<script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
	<script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
	<script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
	<script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
	<script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
	<script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
	<script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
	<script src="{{ asset('js/main-slider-script.js') }}"></script>
	<!--Revolution Slider-->

	<script src="{{ asset('js/jquery-ui.js') }}"></script>
	<script src="{{ asset('js/jquery.fancybox.js') }}"></script>
	<script src="{{ asset('js/owl.js') }}"></script>
	<script src="{{ asset('js/wow.js') }}"></script>
	<script src="{{ asset('js/appear.js') }}"></script>
	<script src="{{ asset('js/script.js') }}"></script>

	<script>
		// Fallback: hide the preloader if the template's window-load handler never fires
		document.addEventListener('DOMContentLoaded', function() {
			setTimeout(function() {
				var p = document.querySelector('.preloader');
				if (p && getComputedStyle(p).display !== 'none') {
					p.style.display = 'none';
				}
			}, 2500);
		});
	</script>
</body>

</html>