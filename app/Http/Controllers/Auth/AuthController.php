<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function showLoginForm()
    {
        return view('auth.login'); // resources/views/auth/login.blade.php
    }

    /**
     * İstifadəçi login prosesi.
     */
    public function login(Request $request)
    {
        // Validasiya
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Giriş məlumatları
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Admin isə → dashboard
            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.dashboard');
            }

            // Əks halda → ana səhifə
            return redirect()->route('home');
        }

        // Uğursuz giriş
        return back()->withErrors([
            'email' => 'Invalid credentials',
        ])->withInput();
    }

    /**
     * İstifadəçi çıxış prosesi.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Logged out successfully');
    }
}
