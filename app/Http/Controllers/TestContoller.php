<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestContoller extends Controller
{
    public function web_master()
    {
        return view('layouts.master');
    }

    public function web_welcome()
    {
        return view('welcome');
    }

}
