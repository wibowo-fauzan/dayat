<?php

// UserMiddleware.php

namespace App\Http\Middleware;

use Closure;

class UserMiddleware
{
    public function handle($request, Closure $next)
    {
        // Cek apakah pengguna memiliki role 'user'
        if (auth()->check() && auth()->user()->role == 'user') {
            return $next($request);
        }

        // Redirect atau melakukan tindakan lain jika tidak memiliki akses
        return redirect('/')->with('error', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
    }
}