<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestStoreOrUpdatePosts;
use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pages.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = Page::all(['id', 'title']);
        return view('dashboard.pages.posts.create', compact('pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestStoreOrUpdatePosts $request)
    {
        $lastOrder = Post::lastOrder();
        $validated = $request->validated() + [
            'seq' => $lastOrder + 1,
        ];

        // upload media
        $fileName = time() . '-post.' . $request->file('media')->getClientOriginalExtension();
        $request->file('media')->move(public_path('uploads/images/'), $fileName);
        $validated['media'] = $fileName;

        $post = Post::create($validated);

        return redirect(route('posts.index'))->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $pages = Page::all(['id', 'title']);
        return view('dashboard.pages.posts.edit', compact('pages', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(RequestStoreOrUpdatePosts $request, Post $post)
    {
        $validated = $request->validated();

        $validated['media'] = $post->media;
        if($request->hasFile('media')){
            $fileName = time() . '-post.' . $request->file('media')->getClientOriginalExtension();
            $request->file('media')->move(public_path('uploads/images/'), $fileName);
            $validated['media'] = $fileName;

            $old_media = public_path('uploads/images/' . $post->media);
            if (file_exists($old_media) && $post->media != 'avatar.png') {
                unlink($old_media);
            }
        }

        $post->update($validated);

        return redirect(route('posts.index'))->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        $old_media = public_path('uploads/images/' . $post->media);
        if (file_exists($old_media) && $post->media != 'avatar.png') {
            unlink($old_media);
        }

        return response()->json([
            'success' => true,
            'message' => 'Post deleted successfully'
        ]);
    }
}
