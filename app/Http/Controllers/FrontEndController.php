<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Page;
use App\Models\Post;
use App\Models\Slider;
use App\Models\VirtualWikrama;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function landingPage()
    {
        $carouselGalery = Slider::active()->get(['media', 'id']);
        $beritaAcara = Post::active()->get(['title', 'media', 'created_at'])->sortByDesc('created_at');
        $virtualWikrama = VirtualWikrama::first();
        $galeries = Album::active()->take(4)->get(['title', 'media'])->sortByDesc('created_at');
        $pages = Page::active()->with('posts')->get(['title', 'id']);
        return view('frontend.app.homepage', compact('carouselGalery', 'beritaAcara', 'virtualWikrama', 'galeries', 'pages'));
    }

    public function beritaDetail($judul)
    {
        $judul = str_replace('-', ' ', $judul);
        $berita = Post::whereTitle($judul)->get(['title', 'content', 'media'])->first() ?? abort(404);
        $pages = Page::active()->get(['title', 'id']);
        return view('frontend.app.berita.detail', compact('berita', 'pages'));
    }

    public function pageDetail($page)
    {
        $berita = str_replace('-', ' ', $page);
        $berita = Page::whereTitle($berita)->get(['title', 'content', 'media'])->firstOrFail();
        $pages = Page::active()->get(['title', 'id']);
        return view('frontend.app.berita.detail', compact('berita', 'pages'));
    }
}
