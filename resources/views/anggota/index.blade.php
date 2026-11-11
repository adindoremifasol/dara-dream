@extends('layouts.app')

@section('title', 'Anggota - Admin Panel')
@section('page-title', 'Data Anggota')
@section('menu-anggota', 'active')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="h5 mb-0">Data Anggota</h2>
</div>

<form method="GET" action="{{ route('anggota.index') }}" class="row g-2 mb-3">

    <div class="col-md-6">
        <input
            type="text"
            name="cari"
            class="form-control"
            placeholder="Cari nama, NIM, atau program studi..."
            value="{{ $cari }}"
        >
    </div>

    <div class="col-auto">
        <button type="submit" class="btn btn-primary">
            Cari
        </button>
    </div>

    <div class="col-auto">
        <a href="{{ route('anggota.index') }}" class="btn btn-secondary">
            Reset
        </a>
    </div>

</form>

<div class="mb-3">
    <span class="text-secondary">
        Menampilkan {{ count($anggota) }} anggota
    </span>
</div>

<div class="table-responsive">

    <table class="table table-bordered table-striped">

        <thead class="table-dark">
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Angkatan</th>
            </tr>
        </thead>

        <tbody>

            @forelse ($anggota as $item)

                <tr>
                    <td>{{ $item->nim }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->program_studi }}</td>
                    <td>{{ $item->angkatan }}</td>
                </tr>

            @empty

                <tr>
                    <td colspan="4" class="text-center">
                        Data anggota tidak ditemukan.
                    </td>
                </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection