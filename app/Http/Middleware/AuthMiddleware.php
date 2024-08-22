<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        if (!$user) {
            Log::info('Unauthorized access');
            return redirect('/login')->with('error', 'Anda tidak memiliki akses ke dashboard.');
        }

        // jika user sudah login dan mencoba mengakses halaman login, mutasi, atau home
        // redirect ke dashboard
        if ($user && ($request->is('login') || $request->is('mutasi') || $request->is('/'))) {
            return redirect('/dashboard');
        }

        return $next($request);
    }
}
