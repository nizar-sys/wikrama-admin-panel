<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestStoreOrUpdateInformasi;
use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.informasis.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.informasis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestStoreOrUpdateInformasi $request)
    {
        $lastOrder = Informasi::lastOrder();
        $validated = $request->validated() + [
            'created_by' => Auth::id(),
            'created_at' => now(),
            'seq' => $lastOrder + 1,
        ];


        // upload media
        $fileName = time() . '-informasi.' . $request->file('media')->getClientOriginalExtension();
        $request->file('media')->move(public_path('uploads/images/'), $fileName);
        $validated['media'] = $fileName;

        $newInformasi = Informasi::create($validated);

        return redirect(route('informasis.index'))->with('success', 'Informasi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Informasi::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $informasi = Informasi::findOrFail($id);

        return view('dashboard.informasis.edit', compact('informasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function update(RequestStoreOrUpdateInformasi $request, $id)
    {
        $validated = $request->validated() + [
            'updated_by' => Auth::id(),
            'updated_at' => now()
        ];

        $informasi = Informasi::findOrFail($id);

        $validated['media'] = $informasi->media;
        if ($request->hasFile('media')) {
            $fileName = time() . '-informasi.' . $request->file('media')->getClientOriginalExtension();
            $request->file('media')->move(public_path('uploads/images/'), $fileName);
            $validated['media'] = $fileName;

            $old_media = public_path('uploads/images/' . $informasi->media);
            if (file_exists($old_media) && $informasi->media != 'avatar.png') {
                unlink($old_media);
            }
        }

        $informasi->update($validated);

        return redirect(route('informasis.index'))->with('success', 'Informasi berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $informasi = Informasi::findOrFail($id);
        // delete old media
        $old_media = public_path('/uploads/images/' . $informasi->media);
        if (file_exists($old_media)) {
            unlink($old_media);
        }
        $informasi->delete();

        return response()->json([
            'success' => true,
            'message' => 'Informasi berhasil dihapus'
        ]);
    }
}
