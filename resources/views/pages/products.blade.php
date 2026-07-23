@extends('layouts.app')

@section('title', 'Our Products | JIHI Hand Tools')

@section('content')
<!--Page Title-->
<section class="page-banner" style="background-image:url({{ asset('images/background/breadcrumb.png') }});">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <h1>Our Products</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Products</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Products Section -->
<section class="news-section" style="padding: 90px 0 40px;">
    <div class="auto-container">
        @forelse ($categories as $category)
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="title">Product Category</div>
                <h2>{{ $category->name }}</h2>
                @if ($category->description)
                    <div class="text">{{ $category->description }}</div>
                @endif
            </div>

            <div class="row clearfix">
                @forelse ($category->activeProducts as $product)
                    <!-- Product Block -->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="{{ ($loop->index % 3) * 300 }}ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="{{ route('products.show', $product) }}"><img src="{{ media_url($product->image) }}" alt="{{ $product->name }}" /></a>
                            </div>
                            <div class="lower-content">
                                <h3><a href="{{ route('products.show', $product) }}">{{ $product->name }}</a></h3>
                                <div class="post-date">{{ $product->short_description }}</div>
                                <a class="arrow" href="{{ route('products.show', $product) }}"><span class="icon flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12"><p style="margin-bottom:40px;">No products in this category yet.</p></div>
                @endforelse
            </div>

            <div class="btn-box" style="margin-bottom:60px;">
                <a href="{{ route('products.category', $category) }}" class="theme-btn btn-style-one">View All {{ $category->name }}</a>
            </div>
        @empty
            <div class="sec-title centered">
                <h2>No products available yet</h2>
                <div class="text">Please check back soon.</div>
            </div>
        @endforelse
    </div>
</section>
<!-- End Products Section -->
@endsection
