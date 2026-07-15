<ul class="navigation clearfix">
	<li class="{{ request()->routeIs('home') ? 'current' : '' }}"><a href="{{ url('/') }}">Home</a></li>
	<li class="{{ request()->routeIs('about') ? 'current' : '' }}"><a href="{{ url('/about') }}">About us</a></li>
	<li class="dropdown {{ request()->routeIs('products*') ? 'current' : '' }}"><a href="{{ route('products') }}">Products</a>
		<ul>
			<li><a href="{{ route('products') }}">All Products</a></li>
			@foreach ($navCategories as $navCategory)
				<li><a href="{{ route('products.category', $navCategory) }}">{{ $navCategory->name }}</a></li>
			@endforeach
		</ul>
	</li>
	<li class="{{ request()->routeIs('contact') ? 'current' : '' }}"><a href="{{ url('/contact') }}">Contact</a></li>
</ul>
