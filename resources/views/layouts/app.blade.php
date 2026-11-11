<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin Panel')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    @stack('styles')
</head>

<body class="bg-body-tertiary">

    <div class="container-fluid">
        <div class="row">

            <aside class="col-md-3 col-xl-2 px-0 bg-dark min-vh-100 d-flex flex-column" data-bs-theme="dark">

                <div class="p-3 border-bottom border-secondary">
                    <span class="fs-5 fw-bold text-white">
                        Admin Panel
                    </span>
                </div>

                <ul class="nav nav-pills flex-column p-3 gap-1 flex-grow-1">
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link @yield('menu-dashboard')">Dashboard</a>
                    </li>
                    @if (auth()->user()->role === 'admin')
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link @yield('menu-users')">Pengguna</a>
                        </li>
                    @endif
                    @if (auth()->user()->role === 'user')
                        <li class="nav-item">
                            <a href="{{ route('anggota.index') }}" class="nav-link @yield('menu-anggota')">Anggota</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kegiatan.index') }}" class="nav-link @yield('menu-kegiatan')">Kegiatan</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a href="#" class="nav-link">Pengaturan</a>
                    </li>
                </ul>

                <div class="p-3 border-top border-secondary">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-danger btn-sm w-100">Logout</button>
                    </form>
                </div>

            </aside>

            <div class="col px-0 d-flex flex-column min-vh-100">

                <header class="bg-white border-bottom px-4 py-3 d-flex justify-content-between align-items-center">

                    <h1 class="h5 mb-0">
                        @yield('page-title', 'Dashboard')
                    </h1>

                    <div class="d-flex align-items-center gap-2">
                        <span class="text-secondary small">Halo, {{ auth()->user()->name }}</span>
                        <span class="badge rounded-pill text-bg-primary px-3 py-2">{{ strtoupper(substr(auth()->user()->name, 0, 2)) }}</span>
                    </div>

                </header>

                <main class="p-4 flex-grow-1">
                    @yield('content')
                </main>

                <footer class="border-top px-4 py-3 text-secondary small">
                    Politeknik Negeri Bengkalis &middot;
                    D4 Keamanan Sistem Informasi
                </footer>

            </div>

        </div>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    @stack('scripts')

</body>

</html>