<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestStoreOrUpdatePosts;
use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class PostController extends Controller
{

    public function __construct()
    {
        $this->Post= new Post();
    }

    public function tampildata()
    {
        $data= $this->Post->alldata(); 
        return response()->json($data);
    }
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
            'content' => 'required',
            'title' => 'required',
            'media'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];


        // $newName = '';
        // if($request->file('media')){
        //     $extension = $request->file('media')->getClientOriginalExtension();
        //     $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
        //     $request->file('media')->storeAs('image', $newName);
        // }

        // $request['image'] = $newName;
        
        // $post = Post::create($validated);

        $path = Storage::put("public", $request->file('media'));
        Post::create([
            'seq' => $lastOrder + 1,
            'content' => $request->content,
            'title' => $request->title,
            'media' => $path,
            'page_id' => $request->page_id,
        ]);

        return redirect(route('posts.index'))->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, $slug_title)
    {
        $pages = Page::all(['id', 'title', 'media'])->first();
        $post = Post::where('slug_title', $slug_title)->first();
        return view('frontend.landing.berita', compact('post', 'pages'));
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
