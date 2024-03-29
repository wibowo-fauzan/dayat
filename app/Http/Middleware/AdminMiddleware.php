<?php

// AdminMiddleware.php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        // Cek apakah pengguna memiliki role 'admin'
        if(auth()->check() && auth()->user()->role == 'admin') {
            return $next($request);
        }

        // Redirect atau melakukan tindakan lain jika tidak memiliki akses
        return redirect('/')->with('error', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
    }
}
