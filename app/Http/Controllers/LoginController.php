<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        // Jika pengguna sudah login, arahkan ke halaman home
        if (Auth::check()) {
            dd(Auth::user());
            return redirect()->route('home'); // Ganti dengan route yang sesuai
        }

        // Jika belum login, tampilkan form login
        return view('auth.login');
    }

    public function actionlogin(Request $request): RedirectResponse
    {
        // Validasi data login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        // Coba untuk login
        if (Auth::attempt($credentials)) {
            // Jika login berhasil, redirect berdasarkan role
            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif (Auth::user()->role === 'client') {
                return redirect()->route('client.dashboard');
            }
        }

        // Jika login gagal, redirect kembali dengan pesan error
        return redirect()->back()->with('error', 'Invalid credentials');
    }

    public function actionlogout()
    {
        // Logout pengguna dan redirect ke halaman login
        Auth::logout();
        return redirect()->route('login');
    }
}
