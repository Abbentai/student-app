<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Colleges extends Controller
{
    public function index()
    {
        return view('colleges');
    }
}
