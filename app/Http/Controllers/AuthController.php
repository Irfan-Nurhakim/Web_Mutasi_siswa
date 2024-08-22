<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session; // Jika Anda menggunakan Session
use Illuminate\Support\Facades\Log; // Tambahkan ini

class AuthController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }
        return view('login'); // Menampilkan form login
    }

    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'username' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/'); // Mengubah redirect ke halaman home
    }
}
