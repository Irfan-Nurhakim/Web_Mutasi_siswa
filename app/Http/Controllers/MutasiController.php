<?php

namespace App\Http\Controllers;

use App\Models\Mutasi; // Menggunakan model Mutasi untuk mengakses data mutasi
use Illuminate\Http\Request; // Menggunakan request untuk menghandle inputan dari user
use Illuminate\Support\Facades\Log; // Menggunakan Log untuk mencatat aktivitas dalam aplikasi
use Illuminate\Support\Facades\Auth; // Menggunakan Auth untuk mengautentikasi user

class MutasiController extends Controller
{
    // Fungsi untuk menampilkan daftar mutasi
    public function index()
    {
        // Cek apakah user telah login
        if (Auth::check()) {
            // Jika user telah login, redirect ke dashboard
            return redirect('/dashboard');
        }
        // Mengambil semua data mutasi
        $mutasi = Mutasi::all();
        // Menampilkan view untuk daftar mutasi
        return view('mutasi');
    }

    // Fungsi untuk menampilkan form tambah mutasi baru
    public function create()
    {
        // Menampilkan view untuk form tambah mutasi baru
        return view('mutasi.create');
    }

    // Fungsi untuk menyimpan data mutasi baru
    public function store(Request $request)
    {
        // Mencatat data yang diterima dalam log
        Log::info('Data yang diterima:', $request->all());
        // Validasi data yang dikirimkan
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
            'prov_sekolah_tujuan' => 'required|string',
            'no_wa' => 'required|string',
            'email' => 'required|email',
            'keterangan' => 'nullable|string',
        ]);

        try {
            // Membuat data mutasi baru
            $mutasi = Mutasi::create($validatedData);
            // Mencatat data mutasi yang berhasil disimpan dalam log
            Log::info('Data mutasi berhasil disimpan:', $mutasi->toArray()); // Log penyimpanan yang berhasil
            // Redirect ke halaman index dengan pesan sukses
            return redirect()->route('mutasi.index')->with('success', 'Data mutasi berhasil dikirim');
        } catch (\Exception $e) {
            // Mencatat kesalahan saat menyimpan data mutasi dalam log
            Log::error('Error saat menyimpan data mutasi: ' . $e->getMessage());
            // Redirect kembali dengan pesan error
            return back()->with('error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.');
        }
    }

    // Fungsi untuk menampilkan detail mutasi berdasarkan ID
    public function show($id)
    {
        // Mengambil data mutasi berdasarkan ID
        $mutasi = Mutasi::findOrFail($id);
        // Menampilkan view untuk detail mutasi
        return view('mutasi.show', compact('mutasi'));
    }

    // Fungsi untuk menampilkan form edit mutasi
    public function edit($id)
    {
        // Mengambil data mutasi berdasarkan ID untuk diedit
        $mutasi = Mutasi::findOrFail($id);
        // Menampilkan view untuk form edit mutasi
        return view('mutasi.edit', compact('mutasi'));
    }

    // Fungsi untuk memperbarui data mutasi
    public function update(Request $request, $id)
    {
        // Mengambil data mutasi berdasarkan ID untuk diedit
        $mutasi = Mutasi::findOrFail($id);

        // Validasi data yang dikirimkan untuk update
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
            'prov_sekolah_tujuan' => 'required|string',
            'no_wa' => 'required|string',
            'email' => 'required|email',
            'keterangan' => 'nullable|string',
        ]);

        try {
            // Memperbarui data mutasi
            $mutasi->update($validatedData);
            // Redirect ke halaman index dengan pesan sukses
            return redirect()->route('mutasi.index')->with('success', 'Data mutasi berhasil diperbarui');
        } catch (\Exception $e) {
            // Mencatat kesalahan saat memperbarui data mutasi dalam log
            Log::error('Error saat memperbarui data mutasi: ' . $e->getMessage());
            // Redirect kembali dengan pesan error
            return back()->with('error', 'Terjadi kesalahan saat memperbarui data. Silakan coba lagi.');
        }
    }

    // Fungsi untuk menghapus data mutasi
    public function destroy($id)
    {
        // Mengambil data mutasi berdasarkan ID untuk dihapus
        $mutasi = Mutasi::findOrFail($id);
        try {
            // Menghapus data mutasi
            $mutasi->delete();
            // Redirect ke halaman index dengan pesan sukses
            return redirect()->route('mutasi.index')->with('success', 'Data mutasi berhasil dihapus');
        } catch (\Exception $e) {
            // Mencatat kesalahan saat menghapus data mutasi dalam log
            Log::error('Error saat menghapus data mutasi: ' . $e->getMessage());
            // Redirect kembali dengan pesan error
            return back()->with('error', 'Terjadi kesalahan saat menghapus data. Silakan coba lagi.');
        }
    }
}