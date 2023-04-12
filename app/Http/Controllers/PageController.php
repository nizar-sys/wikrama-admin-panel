<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestStoreOrUpdatePage;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestStoreOrUpdatePage $request)
    {
        $lastOrder = Page::lastOrder();
        
        $validated = $request->validated() + [
            'created_by' => Auth::id(),
            'created_at' => now(),
            'seq' => $lastOrder + 1,
        ];

        // $nama_folder = "page" . $request->title;
        // $name = $request->file('media')->getClientOriginalName();
        // $media = Storage::put("public/" . $nama_folder, $request->file('media'));


        // $newName = '';
        // if($request->file('media')){
        //     $extension = $request->file('media')->getClientOriginalExtension();
        //     $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
        //     $request->file('media')->storeAs('image', $newName);
        // }

        // $request['image'] = $newName;

        $validated['seo_key'] = str()->lower(implode(', ', explode(' ', $validated['seo_key'])));

        // $newPage = Page::create($validated);
        $path = Storage::put("public", $request->file('media'));
        Page::create([
            'seq' => $lastOrder + 1,
            'seo_key' => $request->seo_key,
            'seo_desc' => $request->seo_desc,
            'media' => $path,
            'link' => $request->link,
            'subtitle' => $request->subtitle,
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect(route('pages.index'))->with('success', 'Page created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        return $page;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('dashboard.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(RequestStoreOrUpdatePage $request, Page $page)
    {
        $validated = $request->validated() + [
            'updated_at' => now(),
            'updated_by' => Auth::id()
        ];

        $validated['media'] = $page->media;
        if($request->hasFile('media')){
            $fileName = time() . '-page.' . $request->file('media')->getClientOriginalExtension();
            $request->file('media')->move(public_path('uploads/images/'), $fileName);
            $validated['media'] = $fileName;

            $old_media = public_path('uploads/images/' . $page->media);
            if (file_exists($old_media) && $page->media != 'avatar.png') {
                unlink($old_media);
            }
        }

        $validated['seo_key'] = str()->lower(implode(', ', explode(' ', $validated['seo_key'])));

        $page->update($validated);

        return redirect(route('pages.index'))->with('success', 'Page updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();

        $old_media = public_path('uploads/images/' . $page->media);
        if (file_exists($old_media) && $page->media != 'avatar.png') {
            unlink($old_media);
        }

        return response()->json([
            'success' => true,
            'message' => 'Page deleted successfully.'
        ]);
    }
}
