<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestStoreOrUpdateInformasiLink;
use App\Models\Informasi;
use App\Models\InformasiLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InformasiLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.informasis.links.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $informasiLinks = Informasi::all(['id', 'title']);
        if($request->has('id')){
            $informasiLinks = Informasi::where('id', $request->id)->get(['id', 'title']);
        }
        return view('dashboard.informasis.links.create', compact('informasiLinks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestStoreOrUpdateInformasiLink $request)
    {
        $validated = $request->validated() + [
            'created_by' => Auth::id(),
            'created_at' => now()
        ];

        $newInformasiLink = InformasiLink::create($validated);

        return redirect(route('informasi-link.index', ['id' => $validated['informasi_id']]))->with('success', 'Informasi link berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InformasiLink  $informasiLink
     * @return \Illuminate\Http\Response
     */
    public function show(InformasiLink $informasiLink)
    {
        return $informasiLink;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InformasiLink  $informasiLink
     * @return \Illuminate\Http\Response
     */
    public function edit(InformasiLink $informasiLink)
    {
        $informasiLinks = Informasi::all(['id', 'title']);
        if(request()->has('id')){
            $informasiLinks = Informasi::where('id', request()->id)->get(['id', 'title']);
        }
        return view('dashboard.informasis.links.edit', compact('informasiLink', 'informasiLinks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InformasiLink  $informasiLink
     * @return \Illuminate\Http\Response
     */
    public function update(RequestStoreOrUpdateInformasiLink $request, InformasiLink $informasiLink)
    {
        $validated = $request->validated() + [
            'updated_by' => Auth::id(),
            'updated_at' => now()
        ];

        $informasiLink->update($validated);

        return redirect(route('informasi-link.index'))->with('success', 'Informasi link berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InformasiLink  $informasiLink
     * @return \Illuminate\Http\Response
     */
    public function destroy(InformasiLink $informasiLink)
    {
        $informasiLink->delete();

        return response()->json([
            'success' => 'true',
            'message' => 'Informasi link berhasil dihapus'
        ]);
    }
}
