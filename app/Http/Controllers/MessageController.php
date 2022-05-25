<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestStoreOrUpdateMessage;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.messages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestStoreOrUpdateMessage $request)
    {
        $validated = $request->validated();

        $newMessage = Message::create($validated);


        if($request->ajax()){
            return response()->json([
                'success' => true,
                'message' => 'Message created successfully'
            ]);
        }

        return redirect()->route('messages.index')->with('success', 'Message created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        return $message;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        return view('dashboard.messages.edit', compact('message'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(RequestStoreOrUpdateMessage $request, Message $message)
    {
        $validated = $request->validated();

        $message->update($validated);

        return redirect()->route('messages.index')->with('success', 'Message updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        $message->delete();

        if(request()->ajax()){
            return response()->json([
                'success' => true,
                'message' => 'Message deleted successfully'
            ]);
        }

        return redirect()->route('messages.index')->with('success', 'Message deleted successfully');
    }
}
