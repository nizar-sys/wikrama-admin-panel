<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function landingPage()
    {
        return view('frontend.layouts.homepage');
    }
}
