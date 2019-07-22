<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Session;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $news = News::paginate(10);
        return view('news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
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
            'title' => 'required|string|max:191',
            'description' => 'required|string'
        ],[
            'title.required' => 'يرجى ادخال عنوان الخبر',
            'description.required' => 'يرجى ادخال مضمون الخبر'
        ]);
        if($request->hasFile('image')) {
        $img = $request->image;
        $image = time().$img->getClientOriginalName();
        $img->move('upload/news',$image);
        } else {
        $image = 'default.png'; 
        }
        $new = News::create([
            'image' => 'upload/news/'. $image,
            'title' => $request->title,
            'description' => $request->description
        ]);

        Session::flash('success','تم أضافة الخبر بنجاح');
        //dd($request)->get();
        return redirect()->back();

        //return redirect()->route('news');
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
        $news = News::find($id);
        return view('news.edit',compact('news'));

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
        $new = News::find($id);
        $this->validate($request,[
            'title' => 'required|string|max:191',
            'description' => 'required|string'
        ],[
            'title.required' => 'يرجى ادخال عنوان الخبر',
            'description.required' => 'يرجى ادخال مضمون الخبر'
        ]);

        if($request->hasFile('image')) {
        $img = $request->image;
        $image = time().$img->getClientOriginalName();
        $img->move('upload/news',$image);
        $new->image = 'upload/news/'. $image; 
        }

        $new->title = $request->title;
        $new->description = $request->description;
        $new->save();   
           
        Session::flash('success','تم تحديث الخبر بنجاح');
        return redirect()->route('news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findOrfail($id);
        $news->delete();
        Session::flash('success','تم حذف الخبر بنجاح');
        return redirect()->route('news');

    }
}
