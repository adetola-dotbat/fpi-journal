<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('administration.pages.dashboard');
    }

    public function slider()
    {
        return view('administration.pages.slider');
    }

}
