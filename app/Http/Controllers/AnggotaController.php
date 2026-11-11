<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;


class AnggotaController extends Controller
{
    public function index(Request $request)
    {
        $cari = $request->query('cari');

        $anggota = Anggota::query()
            ->when($cari, function ($query, $cari) {
                $query->where('nama', 'like', '%' . $cari . '%')
                      ->orWhere('nim', 'like', '%' . $cari . '%')
                      ->orWhere('program_studi', 'like', '%' . $cari . '%');
            })
            ->orderBy('nama')
            ->get();

        return view('anggota.index', compact('anggota', 'cari'));
    }
}