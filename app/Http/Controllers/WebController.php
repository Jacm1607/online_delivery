<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function inicio() {
        return view('welcome');
    }
    public function from_cliente () {
        return view('from/cliente');
    }
}
