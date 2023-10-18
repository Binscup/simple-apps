<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\LaravelIgnition\Exceptions\ViewExceptionWithSolution;

class SinglePostController extends Controller
{
    public function sp1()
    {
        return view('singlepost.mobileApp');
    }
    public function blog1()
    {
        return view('blog.mobileApp');
    }
    public function spost2()
    {
        return view('singlepost.homePage');
    }
    public function blog2()
    {
        return view('blog.homeApp');
    }
    public function spost3()
    {
        return view('singlepost.database');
    }
    public function blog3()
    {
        return view('blog.databaseApp');
    }
}
