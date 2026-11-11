@extends('layouts.app')
@section('title', 'Kegiatan - Admin Panel')
@section('page-title', 'Data Kegiatan')
@section('menu-kegiatan', 'active')

@section('content')
<div class="d-flex justify-content-end mb-3">
    <a href="{{ route('kegiatan.create') }}" class="btn btn-primary">Tambah Kegiatan</a>
</div>

@if (session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
@endif

<div class="card border-0 shadow-sm">
    <div class="card-body">
        <table class="table table-striped table-hover align-middle w-100">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Lokasi</th>
                    <th class="text-end">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($kegiatan as $row)
                    <tr>
                        <td>{{ $row->judul }}</td>
                        <td>{{ $row->tanggal->format('d/m/Y') }}</td>
                        <td>{{ $row->lokasi }}</td>
                        <td class="text-end">
                            <a href="{{ route('kegiatan.edit', $row->id) }}" class="btn btn-sm btn-outline-primary">Ubah</a>
                            <form action="{{ route('kegiatan.destroy', $row->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus kegiatan ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-secondary py-4">Belum ada kegiatan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection