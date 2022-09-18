<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Post;
use App\Models\Slider;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function pagesData()
    {
        $menus = Page::active()->get(['id', 'title']);
        return response()->json($menus);
    }

    public function slidersData()
    {
        $sliders = Slider::active()->get(['media', 'title']);

        return response()->json($sliders);
    }

    public function visitorsData()
    {
        $visitor = Visitor::query();
        $totalVisitor = $visitor->count();
        $visitorToday = $visitor->whereDate('created_at', Carbon::today('Asia/Jakarta'))->count();

        return response()->json([
            'today' => sprintf('%04d', $visitorToday),
            'total' => sprintf('%04d', $totalVisitor),
        ]);
    }

    public function newsData()
    {
        $post = Post::active()->latest()->get(['title', 'created_at', 'media', 'content']);

        return response()->json($post);
    }
}
