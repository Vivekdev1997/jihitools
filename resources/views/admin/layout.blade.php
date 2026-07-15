<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin') | JIHI Hand Tools Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body { background: #f4f6f9; }
        .sidebar {
            min-height: 100vh; background: #1c2434; width: 240px;
            position: fixed; top: 0; left: 0; z-index: 100;
        }
        .sidebar .brand { color: #fff; font-weight: 700; font-size: 1.15rem; padding: 1.1rem 1.25rem; display: block; text-decoration: none; border-bottom: 1px solid rgba(255,255,255,.08); }
        .sidebar .nav-link { color: #aeb7c0; padding: .65rem 1.25rem; border-left: 3px solid transparent; }
        .sidebar .nav-link:hover { color: #fff; }
        .sidebar .nav-link.active { color: #fff; background: rgba(255,255,255,.06); border-left-color: #ffc400; }
        .sidebar .nav-link .bi { width: 1.4rem; display: inline-block; }
        .main { margin-left: 240px; padding: 1.5rem 2rem; }
        .card { border: none; box-shadow: 0 1px 3px rgba(0,0,0,.08); }
        .table img.thumb { width: 52px; height: 40px; object-fit: cover; border-radius: 4px; }
        @media (max-width: 767px) { .sidebar { position: static; width: 100%; min-height: auto; } .main { margin-left: 0; } }
    </style>
</head>
<body>

<nav class="sidebar">
    <a class="brand" href="{{ route('admin.dashboard') }}"><i class="bi bi-gear-wide-connected me-2"></i>JIHI Hand Tools Admin</a>
    <ul class="nav flex-column mt-2">
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}" href="{{ route('admin.categories.index') }}"><i class="bi bi-tags"></i> Categories</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin.products.*') ? 'active' : '' }}" href="{{ route('admin.products.index') }}"><i class="bi bi-box-seam"></i> Products</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin.messages.*') ? 'active' : '' }}" href="{{ route('admin.messages.index') }}"><i class="bi bi-envelope"></i> Enquiries</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}" href="{{ route('admin.settings.edit') }}"><i class="bi bi-sliders"></i> Site Settings</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin.meta.*') ? 'active' : '' }}" href="{{ route('admin.meta.edit') }}"><i class="bi bi-code-square"></i> Meta Tags (SEO)</a></li>
        <li class="nav-item mt-3 border-top pt-2" style="border-color: rgba(255,255,255,.08) !important;">
            <a class="nav-link" href="{{ url('/') }}" target="_blank"><i class="bi bi-globe"></i> View Website</a>
        </li>
        <li class="nav-item">
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="nav-link btn btn-link text-start w-100"><i class="bi bi-box-arrow-right"></i> Logout</button>
            </form>
        </li>
    </ul>
</nav>

<main class="main">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">@yield('title')</h1>
        <div>@yield('actions')</div>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>
