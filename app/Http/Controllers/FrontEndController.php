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

    // public function show(Post $post, $slug_title)
    // {
    //     $pages = Page::all(['id', 'title', 'media'])->first();
    //     $post = Post::where('slug_title', $slug_title)->first();
    //     return view('frontend.landing.berita', compact('post', 'pages'));
    // }
}
