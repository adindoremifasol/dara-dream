<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masuk - Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body class="bg-body-tertiary">
    <div class="container" style="max-width: 420px;">
        <div class="text-center my-5">
            <h1 class="h4 fw-bold text-primary">Admin Panel</h1>
            <p class="text-secondary">Masuk untuk melanjutkan</p>
        </div>
        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
                @if ($errors->any())
                    <div class="alert alert-danger">{{ $errors->first() }}</div>
                @endif
                <form method="POST" action="{{ route('login') }}" novalidate>
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Ingat saya</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Masuk</button>
                </form>
            </div>
        </div>
        <p class="text-center text-secondary mt-3">
            Belum punya akun? <a href="{{ route('register') }}">Daftar</a>
        </p>
    </div>
</body>
</html>