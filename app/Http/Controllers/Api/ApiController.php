<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function headerMenu()
    {
        $menus = Page::active()->with(['posts' => function($q){
            $q->where('status', 1)->get(['title']);
        }])->get('title');

        return response()->json($menus);
    }
}
