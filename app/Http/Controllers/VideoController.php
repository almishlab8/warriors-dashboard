<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::paginate(10);
        $vars = compact(array_keys(get_defined_vars()));
    
        return view('videos.index', $vars);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'video_title' => 'required|string|max:191',
            'video_url' => 'required|string|max:191',
        ]);
        $video = Video::create([
            'video_title' => $request->video_title,
            'video_url' => $request->video_url,
        ]);
        
        return redirect()->back()->with('success' ,'تم الحفظ بنجاح');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video = Video::find($id);
        $vars = compact(array_keys(get_defined_vars()));
    
        return view('videos.edit', $vars);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $video = Video::find($id);
        $this->validate($request,[
            'video_title' => 'required|string|max:191',
            'video_url' => 'required|string|max:191',
        ]);
        $video->video_title = $request->video_title;
        $video->video_url = $request->video_url;

        $video->save();
        return redirect()->route('videos.index')->with('success' ,'تم التعديل بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Video::find($id);

        $video->delete();

        return redirect()->back()->with('delete' ,'  ');
    }
}
