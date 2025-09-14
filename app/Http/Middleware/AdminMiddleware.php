<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
  public function handle($request, Closure $next)
    {
        // Əgər login olmayıbsa -> login səhifəsinə yönləndir
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login first.');
        }

        // Əgər user admin deyilsə -> giriş icazəsi vermə
        if (Auth::user()->role !== 'admin') {
            abort(403, 'You are not authorized to access this page.');
        }

        return $next($request);
    }
}
