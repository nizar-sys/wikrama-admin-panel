<?php

namespace App\Http\Controllers;

use App\Events\NewVisitors;
use App\Models\Page;
use App\Models\Post;

class FrontEndController extends Controller
{
    public function landingPage()
    {
        event(new NewVisitors());
        return view('frontend.landing.index');
    }

    public function pageDetail($slugTitle)
    {
        event(new NewVisitors());
        return view('frontend.landing.index');
    }
}
