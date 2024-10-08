<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaWalimuridController extends Controller
{
    public function index(){
        return view('walimurid.beranda');
    }
}
