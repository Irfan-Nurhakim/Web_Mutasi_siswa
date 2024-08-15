<?php

namespace App\Http\Controllers;

use App\Models\Mutasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MutasiController extends Controller
{
    public function index()
    {
        $mutasi = Mutasi::all();
        return view('mutasi');
    }

    public function create()
    {
        return view('mutasi.create');
    }

    public function store(Request $request)
    {
        Log::info('Data yang diterima:', $request->all());
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'nama_siswa' => 'required|string',
            'ttl' => 'required|string',
            'asal_sekolah' => 'required|string',
            'no_surat_sekolah' => 'required|string',
            'ttl_surat_dari_sekolah' => 'required|date',
            'jenis_kelamin' => 'required|string',
            'nis' => 'required|string',
            'nisn' => 'required|string',
            'kelas' => 'required|string',
            'kecamatan' => 'required|string',
            'kabupaten' => 'required|string',
            'nama_sekolah_baru' => 'required|string',
            'kec_sekolah_tujuan' => 'required|string',
            'kab_kota_sekolah_tujuan' => 'required|string',
            'no_wa' => 'required|string',
            'email' => 'required|email',
            'keterangan' => 'nullable|string',
        ]);

        try {
            $mutasi = Mutasi::create($validatedData);
            return redirect()->route('mutasi.index')->with('success', 'Data mutasi berhasil disimpan');
        } catch (\Exception $e) {
            Log::error('Error saat menyimpan data mutasi: ' . $e->getMessage());
            return back()->with('error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.');
        }
    }

    public function show($id)
    {
        $mutasi = Mutasi::findOrFail($id);
        return view('mutasi.show', compact('mutasi'));
    }

    public function edit($id)
    {
        $mutasi = Mutasi::findOrFail($id);
        return view('mutasi.edit', compact('mutasi'));
    }

    public function update(Request $request, $id)
    {
        $mutasi = Mutasi::findOrFail($id);

        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'nama_siswa' => 'required|string',
            'ttl' => 'required|string',
            'asal_sekolah' => 'required|string',
            'no_surat_sekolah' => 'required|string',
            'ttl_surat_dari_sekolah' => 'required|date',
            'jenis_kelamin' => 'required|string',
            'nis' => 'required|string',
            'nisn' => 'required|string',
            'kelas' => 'required|string',
            'kecamatan' => 'required|string',
            'nama_sekolah_baru' => 'required|string',
            'kec_sekolah_tujuan' => 'required|string',
            'kab_kota_sekolah_tujuan' => 'required|string',
            'no_wa' => 'required|string',
            'email' => 'required|email',
            'keterangan' => 'nullable|string',
        ]);

        try {
            $mutasi->update($validatedData);
            return redirect()->route('mutasi.index')->with('success', 'Data mutasi berhasil diperbarui');
        } catch (\Exception $e) {
            Log::error('Error saat memperbarui data mutasi: ' . $e->getMessage());
            return back()->with('error', 'Terjadi kesalahan saat memperbarui data. Silakan coba lagi.');
        }
    }

    public function destroy($id)
    {
        $mutasi = Mutasi::findOrFail($id);
        try {
            $mutasi->delete();
            return redirect()->route('mutasi.index')->with('success', 'Data mutasi berhasil dihapus');
        } catch (\Exception $e) {
            Log::error('Error saat menghapus data mutasi: ' . $e->getMessage());
            return back()->with('error', 'Terjadi kesalahan saat menghapus data. Silakan coba lagi.');
        }
    }
}