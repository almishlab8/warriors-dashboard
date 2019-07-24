<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
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
       
<<<<<<< HEAD
        $news = News::latest()->paginate(5);
=======
        $news = News::paginate(10);
>>>>>>> 7f1fa51de82824cfaa92939e24693856d6e870e6
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
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload\news'), $new_name);
        } 
        else {
            $new_name = "default.png";
        }
        $new = News::create([
            'image' => $new_name,
            'title' => $request->title,
            'description' => $request->description
        ]);
         Session::flash('success','تم أضافة الخبر بنجاح');
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::find($id);
        return view('news.show',compact('news'));
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

        $image = $request->file('image');
        if($image != ''){
            if ($new->image == "default.png") {
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('upload\news'), $new_name);
            } else {
                $image_path = public_path('upload\news').'/'.$new->image;
                unlink($image_path);
                $new->delete();
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('upload\news'), $new_name);
            }
        }
        else {
            $new_name = $new->image;
        }
            $new->image = $new_name;
            $new->title = $request->title;
            $new->description = $request->description;
            $new->save();   
        Session::flash('success','تم تحديث الخبر بنجاح');
        return redirect('news');
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
        if ($news->image == "default.png") {
            $news->delete();
        } else {
            $image_path = public_path('upload\news').'/'.$news->image;
            unlink($image_path);
            $news->delete();
        }
        Session::flash('success','تم حذف الخبر بنجاح');
        return redirect('news');


    }
}
