<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\User;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatan = Kegiatan::with('pemilik')->latest()->get();
        return view('kegiatan.index', compact('kegiatan'));
    }

    public function create()
    {
        return view('kegiatan.create');
    }

    public function store(Request $request)
    {
        $validated = $this->validasi($request);
        $validated['user_id'] = auth()->id();
        
        Kegiatan::create($validated);

        return redirect()->route('kegiatan.index')
            ->with('status', 'Kegiatan berhasil ditambahkan.');
    }

    public function edit(int $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('kegiatan.edit', compact('kegiatan'));
    }

    public function update(Request $request, int $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        $kegiatan->update($this->validasi($request));

        return redirect()->route('kegiatan.index')
            ->with('status', 'Kegiatan berhasil diperbarui.');
    }

    public function destroy(int $id)
    {
        Kegiatan::findOrFail($id)->delete();

        return redirect()->route('kegiatan.index')
            ->with('status', 'Kegiatan berhasil dihapus.');
    }

    private function validasi(Request $request): array
    {
        return $request->validate([
            'judul' => ['required', 'string', 'max:150'],
            'tanggal' => ['required', 'date'],
            'lokasi' => ['required', 'string', 'max:100'],
            'deskripsi' => ['nullable', 'string', 'max:1000'],
        ], [
            'judul.required' => 'Judul kegiatan wajib diisi.',
            'tanggal.required' => 'Tanggal wajib diisi.',
            'lokasi.required' => 'Lokasi wajib diisi.',
        ]);
    }
}