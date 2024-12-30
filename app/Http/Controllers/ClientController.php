<?php

namespace App\Http\Controllers;

use Illuminate\Http\request;

class ClientController extends Controller
{
    public function home()
    {
        return view('client.homeclient');
    }
}
