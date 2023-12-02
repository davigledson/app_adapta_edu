<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\video;
class videoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $videos = video::all();
        return view('site.videos',[
            'videos' => $videos 
        ]);
    }

    public function tabela()
    {
        //
        $videos = video::all();
        return view('app.video.tabela',[
            'videos' => $videos 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('app.video.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        video::create($request->all());
        return redirect()->route('app.video.tabela');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //
        $video = video::find($id);
        return view('app.video.create_edit',[
            'video' => $video
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, video $video)
    {
        $video->update($request->all());
        return redirect()->route('app.video.tabela');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(video $video)
    {
        //
        $video->delete();
        return redirect()->route('app.video.tabela');

    }
}
