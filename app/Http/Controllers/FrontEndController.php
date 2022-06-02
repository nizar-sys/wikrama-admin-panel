<?php

namespace App\Http\Controllers;

use App\Models\Album;
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
        return view('frontend.app.homepage', compact('carouselGalery', 'beritaAcara', 'virtualWikrama', 'galeries'));
    }
}
