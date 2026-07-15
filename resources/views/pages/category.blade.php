@extends('layouts.app')

@section('title', $category->name . ' | JIHI Hand Tools')

@section('content')
<!--Page Title-->
<section class="page-banner" style="background-image:url({{ media_url($category->image, 'images/background/services-title-bg.jpg') }});">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <h1>{{ $category->name }}</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ route('products') }}">Products</a></li>
                <li>{{ $category->name }}</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Category Products -->
<section class="news-section" style="padding: 90px 0 60px;">
    <div class="auto-container">
        @if ($category->description)
            <div class="sec-title">
                <div class="title">Product Category</div>
                <h2>{{ $category->name }}</h2>
                <div class="text">{{ $category->description }}</div>
            </div>
        @endif

        <div class="row clearfix">
            @forelse ($products as $product)
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
                <div class="col-12"><p>No products in this category yet.</p></div>
            @endforelse
        </div>

        {{ $products->links() }}
    </div>
</section>
<!-- End Category Products -->
@endsection
