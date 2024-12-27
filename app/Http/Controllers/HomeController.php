<?php

namespace App\Http\Controllers;

use Illuminate\Http\request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
