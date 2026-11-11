@extends('layouts.app')
@section('title', 'Ubah Kegiatan - Admin Panel')
@section('page-title', 'Ubah Kegiatan')
@section('menu-kegiatan', 'active')

@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-header bg-white fw-semibold">Formulir Ubah Kegiatan</div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $pesan)
                        <li>{{ $pesan }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('kegiatan.update', $kegiatan->id) }}" novalidate>
            @csrf
            @method('PUT')
            
            <div class="row g-3">
                <div class="col-md-8">
                    <label for="judul" class="form-label">Judul Kegiatan</label>
                    <input type="text" 
                        class="form-control @error('judul') is-invalid @enderror"
                        id="judul" 
                        name="judul" 
                        value="{{ old('judul', $kegiatan->judul) }}">
                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" 
                        class="form-control @error('tanggal') is-invalid @enderror"
                        id="tanggal" 
                        name="tanggal" 
                        value="{{ old('tanggal', $kegiatan->tanggal->format('Y-m-d')) }}">
                    @error('tanggal')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="lokasi" class="form-label">Lokasi</label>
                    <input type="text" 
                        class="form-control @error('lokasi') is-invalid @enderror"
                        id="lokasi" 
                        name="lokasi" 
                        value="{{ old('lokasi', $kegiatan->lokasi) }}">
                    @error('lokasi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12">
                    <label for="deskripsi" class="form-label">Deskripsi <span class="text-secondary fw-normal">(opsional)</span></label>
                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" 
                        id="deskripsi" 
                        name="deskripsi" 
                        rows="3">{{ old('deskripsi', $kegiatan->deskripsi) }}</textarea>
                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <hr class="my-4">

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route('kegiatan.index') }}" class="btn btn-outline-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection