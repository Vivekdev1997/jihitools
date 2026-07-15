<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | JIHI Hand Tools Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #1c2434; display: flex; align-items: center; min-height: 100vh; }
        .login-card { max-width: 400px; width: 100%; }
    </style>
</head>
<body>
<div class="container d-flex justify-content-center">
    <div class="card login-card shadow">
        <div class="card-body p-4">
            <h1 class="h4 text-center mb-1">JIHI Hand Tools Admin</h1>
            <p class="text-muted text-center mb-4">Sign in to manage your website</p>

            @if ($errors->any())
                <div class="alert alert-danger py-2">{{ $errors->first() }}</div>
            @endif

            <form method="POST" action="{{ route('admin.login.post') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" required autofocus>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-check mb-3">
                    <input type="checkbox" name="remember" id="remember" class="form-check-input">
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>
                <button type="submit" class="btn btn-warning w-100 fw-semibold">Sign In</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
