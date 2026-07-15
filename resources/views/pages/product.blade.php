@extends('layouts.app')

@section('title', $product->name . ' | JIHI Hand Tools')

@section('content')
<!--Page Title-->
<section class="page-banner" style="background-image:url({{ asset('images/background/services-title-bg.jpg') }});">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <h1>{{ $product->name }}</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ route('products.category', $product->category) }}">{{ $product->category->name }}</a></li>
                <li>{{ $product->name }}</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Product Detail -->
<section class="about-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <img src="{{ media_url($product->image) }}" alt="{{ $product->name }}" style="width:100%;border-radius:8px;" />
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="sec-title">
                    <div class="title">{{ $product->category->name }}</div>
                    <h2>{{ $product->name }}</h2>
                </div>
                @if ($product->short_description)
                    <p><strong>{{ $product->short_description }}</strong></p>
                @endif
                <div class="product-content">
                    {!! $product->description !!}
                </div>
                <div class="btn-box" style="margin-top:30px;">
                    <a href="{{ route('contact') }}" class="theme-btn btn-style-one">Enquire Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Product Detail -->

@if ($related->isNotEmpty())
<!-- Related Products -->
<section class="news-section" style="padding: 0 0 90px;">
    <div class="auto-container">
        <div class="sec-title">
            <div class="title">More from {{ $product->category->name }}</div>
            <h2>Related Products</h2>
        </div>
        <div class="row clearfix">
            @foreach ($related as $rel)
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="{{ ($loop->index % 3) * 300 }}ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="{{ route('products.show', $rel) }}"><img src="{{ media_url($rel->image) }}" alt="{{ $rel->name }}" /></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{ route('products.show', $rel) }}">{{ $rel->name }}</a></h3>
                            <div class="post-date">{{ $rel->short_description }}</div>
                            <a class="arrow" href="{{ route('products.show', $rel) }}"><span class="icon flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Related Products -->
@endif
@endsection
