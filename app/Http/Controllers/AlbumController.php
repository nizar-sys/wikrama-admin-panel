<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestStoreOrUpdateAlbums;
use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.albums.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.albums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestStoreOrUpdateAlbums $request)
    {
        $validated = $request->validated();

        // upload media
        $fileName = time() . '-album.' . $request->file('media')->getClientOriginalExtension();
        $request->file('media')->move(public_path('uploads/images/'), $fileName);
        $validated['media'] = $fileName;

        $album = Album::create($validated);

        return redirect(route('albums.index'))->with('success', 'Album created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        return $album;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        return view('dashboard.albums.edit', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(RequestStoreOrUpdateAlbums $request, Album $album)
    {
        $validated = $request->validated();

        $validated['media'] = $album->media;
        if($request->hasFile('media')){
            $fileName = time() . '-albu$album.' . $request->file('media')->getClientOriginalExtension();
            $request->file('media')->move(public_path('uploads/images/'), $fileName);
            $validated['media'] = $fileName;

            $old_media = public_path('uploads/images/' . $album->media);
            if (file_exists($old_media) && $album->media != 'avatar.png') {
                unlink($old_media);
            }
        }

        $album->update($validated);

        return redirect(route('albums.index'))->with('success', 'Album updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        $album->delete();

        $old_media = public_path('uploads/images/' . $album->media);
        if (file_exists($old_media) && $album->media != 'avatar.png') {
            unlink($old_media);
        }


        return response()->json([
            'success' => true,
            'message' => 'Album deleted successfully.'
        ]);
    }
}
