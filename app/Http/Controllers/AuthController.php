<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function authenticate(Request $request)
    {

        return view('client.homeclient');
    }

    public function store(Request $request)
    {
        return view('auth.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login'); // Arahkan ke halaman login setelah logout
    }

    public function index(Request $request)
    {
        $feedbacks = Feedback::all();
        $nav = 'Feedback' ;

        return view('feedback.index', compact('feedbacks', 'nav'));
    }
}
