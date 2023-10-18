<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('pages.halaman');
    }
    public function calendar()
    {
        return view('pages.calendar');
    }
    public function chat()
    {
        return view('pages.chat');
    }
    
}
