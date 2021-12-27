<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HackatonController extends Controller
{
    public function halamanUtama()
    {
        return view('halamanUtama');
    }
}
