<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Periksa apakah session 'user' ada
        if (!$request->session()->has('user')) {
            Log::warning('User not authenticated, redirecting to login');
            return redirect('/login');
        }

        $user = $request->session()->get('user');
        Log::info('User is authenticated:', ['user' => $user]);

        // Tambahkan pengecekan tambahan untuk memastikan user memiliki akses ke dashboard
        if (!$this->canAccessDashboard($user)) {
            Log::warning('User does not have access to dashboard:', ['user' => $user]);
            return redirect('/')->with('error', 'Anda tidak memiliki akses ke dashboard.');
        }

        return $next($request);
    }

    private function canAccessDashboard($user)
    {
        // Implementasikan logika untuk memeriksa apakah user memiliki akses ke dashboard
        // Contoh sederhana: periksa apakah user memiliki role tertentu
        return isset($user->role) && $user->role === 'admin';
    }
}