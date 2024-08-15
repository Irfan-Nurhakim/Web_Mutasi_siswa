<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register'); // Menampilkan form pendaftaran
    }

    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|email|unique:tabel_admin', // Pastikan username unik
            'password' => 'required|min:6', // Validasi password
        ]);

        // Simpan user baru
        DB::table('tabel_admin')->insert([
            'username' => $request->username,
            'password' => Hash::make($request->password), // Hash password
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/login')->with('success', 'Pendaftaran berhasil! Silakan login.'); // Arahkan ke halaman login
    }
}