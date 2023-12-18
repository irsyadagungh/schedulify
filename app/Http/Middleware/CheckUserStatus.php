<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $status): Response
    {
        // Ini sekalian sama fortify tadi, tapi masih belom yakin
        // $user = auth()->user();

        // if ($user && in_array($user->status, $status)) {
        //     return $next($request);
        // }

        if ($request->user() && $request->user()->role === '1') {
            return $next($request);
        } else if ($request->user() && $request->user()->role === '2') {
            return $next($request);
        } else if ($request->user() && $request->user()->role === '3') {
            return $next($request);
        }
        abort(403, 'Akses Dilarang: Perlu peran user / super user / admin');
    }
}
