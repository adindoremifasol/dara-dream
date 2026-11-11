@extends('layouts.app')
@section('title', 'Dashboard - Admin Panel')
@section('page-title', 'Dashboard')
@section('menu-dashboard', 'active')
@section('content')
<div class="row g-3">
    <div class="col-md-4">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <p class="text-uppercase text-secondary small mb-1">Total Pengguna</p>
                <p class="display-6 fw-semibold mb-0">{{ $totalUser }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <p class="text-uppercase text-secondary small mb-1">Framework</p>
                <p class="h3 fw-semibold mb-0">Laravel {{ Illuminate\Foundation\Application::VERSION
}}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <p class="text-uppercase text-secondary small mb-1">Versi PHP</p>
                <p class="h3 fw-semibold mb-0">{{ PHP_VERSION }}</p>
            </div>
        </div>
    </div>
</div>
<div class="card border-0 shadow-sm mt-4">
    <div class="card-header bg-white fw-semibold">Tentang Halaman Ini</div>
    <div class="card-body">
        <p class="mb-0 text-secondary">
            Halaman ini mewarisi layout admin melalui <code>&#64;extends</code>,
            mengisi judul melalui <code>&#64;section('page-title')</code>,
            dan mengisi isi halaman melalui <code>&#64;section('content')</code>.
        </p>
    </div>
</div>
@endsection