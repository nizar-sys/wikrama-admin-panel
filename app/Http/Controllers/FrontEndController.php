<?php

namespace App\Http\Controllers;

use App\Events\NewVisitors;

class FrontEndController extends Controller
{
    public function landingPage()
    {
        event(new NewVisitors());
        return view('frontend.landing.index');
    }
}
