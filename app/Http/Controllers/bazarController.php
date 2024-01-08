<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bazarController extends Controller
{
    public function bazar()
    {
        return view('bazar');
    }

    public function santunan()
    {
        return view('santunan');
    }
    public function berbagimakanan()
    {
        return view('berbagimakanan');
    }
}
