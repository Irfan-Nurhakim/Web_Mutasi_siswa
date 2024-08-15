<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session; // Jika Anda menggunakan Session
use Illuminate\Support\Facades\Log; // Tambahkan ini

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Menampilkan form login
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|email',
            'password' => 'required',
        ]);

        // Ambil data dari tabel_admin
        $user = DB::table('tabel_admin')->where('username', $request->username)->first();

        // Cek apakah user ada dan password cocok
        if ($user && Hash::check($request->password, $user->password)) { // Verifikasi password yang di-hash
            // Simpan informasi user di session
            session(['user' => $user]); // Simpan data user di session
            Log::info('User logged in:', ['user' => $user]); // Tambahkan log
            return redirect('/dashboard'); // Arahkan ke dashboard
        }

        // Jika login gagal, kembalikan ke halaman login dengan pesan kesalahan
        return back()->withErrors([
            'username' => 'Username atau password salah.', // Pesan kesalahan
        ]);
    }

    public function logout()
    {
        session::forget('user'); // Hapus session user
        return redirect('/'); // Arahkan ke halaman home
    }
}