<?php

namespace App\Http\Controllers;

class FrontEndController extends Controller
{
    public function landingPage()
    {
        return view('frontend.landing.index');
    }
}
