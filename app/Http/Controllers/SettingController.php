<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestStoreSettings;
use App\Models\Setting;
use App\Models\VirtualWikrama;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::first();
        return view('dashboard.setting.index', compact('settings'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestStoreSettings $request)
    {
        $settings = Setting::first();
        $settings->update($request->all());

        return redirect(route('sosmed.index'))->with('success', 'Settings updated successfully');
    }

    public function indexVirtual()
    {
        $virtual = VirtualWikrama::first();
        return view('dashboard.setting.virtual', compact('virtual'));
    }

    public function storeVirtual(Request $request)
    {
        $virtual = VirtualWikrama::first();
        $virtual->update($request->all());

        return redirect(route('virtual-wikrama.index'))->with('success', 'Settings updated successfully');
    }
}
