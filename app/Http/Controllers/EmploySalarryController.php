<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmploySalarryController extends Controller
{
    public function salarry()
    {
        return view('salarry.salarry');
    }

    public function form()
    {
        return view('salarry.form');
    }
}
