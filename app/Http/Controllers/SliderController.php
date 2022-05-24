<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestStoreOrUpdateSlider;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.sliders.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestStoreOrUpdateSlider $request)
    {
        $validated = $request->validated() + [
            'created_at' => now(),
        ];

        // upload media
        $fileName = time() . '-slider.' . $request->file('media')->getClientOriginalExtension();
        $request->file('media')->move(public_path('uploads/images/'), $fileName);
        $validated['media'] = $fileName;

        $newMedia = Slider::create($validated);

        return redirect(route('sliders.index'))->with('success', 'Slider berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        return $slider;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('dashboard.sliders.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(RequestStoreOrUpdateSlider $request, Slider $slider)
    {
        $validated = $request->validated() + [
            'updated_at' => now(),
        ];

        $validated['media'] = $slider->media;
        if($request->hasFile('media')){
            $fileName = time() . '-slider.' . $request->file('media')->getClientOriginalExtension();
            $request->file('media')->move(public_path('uploads/images/'), $fileName);
            $validated['media'] = $fileName;

            $old_media = public_path('uploads/images/' . $slider->media);
            if (file_exists($old_media) && $slider->media != 'avatar.png') {
                unlink($old_media);
            }
        }

        $slider->update($validated);

        return redirect(route('sliders.index'))->with('success', 'Slider berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $old_media = public_path('uploads/images/' . $slider->media);
        if (file_exists($old_media) && $slider->media != 'avatar.png') {
            unlink($old_media);
        }

        $slider->delete();

        return response()->json([
            'success' => true,
            'message' => 'Slider berhasil dihapus'
        ]);
    }
}
