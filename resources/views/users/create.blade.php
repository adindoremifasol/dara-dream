@extends('layouts.app')
@section('title', 'Tambah Pengguna - Admin Panel')
@section('page-title', 'Tambah Pengguna')
@section('menu-users', 'active')

@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-header bg-white fw-semibold">Formulir Tambah Pengguna</div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <p class="fw-semibold mb-1">Periksa kembali isian berikut:</p>
                <ul class="mb-0">
                    @foreach ($errors->all() as $pesan)
                        <li>{{ $pesan }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('users.store') }}" novalidate>
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text"
                        class="form-control @error('name') is-invalid @enderror"
                        id="name" 
                        name="name" 
                        value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email"
                        class="form-control @error('email') is-invalid @enderror"
                        id="email" 
                        name="email" 
                        value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password"
                        class="form-control @error('password') is-invalid @enderror"
                        id="password" 
                        name="password">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <hr class="my-4">

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('users.index') }}" class="btn btn-outline-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection