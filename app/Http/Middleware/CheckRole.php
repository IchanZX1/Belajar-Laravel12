<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * Middleware sederhana: mengecek status keaktifan member lewat session.
     * Jika flag "is_member_active" belum ada, request ditolak dengan Error 403.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (! $request->session()->get('is_member_active', false)) {
            abort(403, 'Akun member belum aktif. Kunjungi /member/activate dulu.');
        }

        return $next($request);
    }
}
