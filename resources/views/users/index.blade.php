@extends('layouts.app')
@section('title', 'Pengguna - Admin Panel')
@section('page-title', 'Daftar Pengguna')
@section('menu-users', 'active')
@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/2.3.8/css/dataTables.bootstrap5.min.css">
@endpush
@section('content')
<div class="d-flex justify-content-end mb-3">
    <a href="{{ route('users.create') }}" class="btn btn-primary">Tambah Pengguna</a>
</div>
@if (session('status'))
<div class="alert alert-success">{{ session('status') }}</div>
@endif
<div class="card border-0 shadow-sm">
    <div class="card-body">
        <table id="tabelPengguna" class="table table-striped table-hover align-middle w-100">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Terdaftar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('d/m/Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/2.3.8/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.3.8/js/dataTables.bootstrap5.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    new DataTable('#tabelPengguna', {
        pageLength: 10,
        lengthMenu: [5, 10, 25, 50]
    });
});
</script>
@endpush