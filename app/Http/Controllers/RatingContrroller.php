<?php

namespace App\Http\Controllers;
use App\Rating;
use App\Students;
use Illuminate\Http\Request;
class RatingContrroller extends Controller
{


    public function index()
    {
        $all_students = Rating::get();
        $students = Students::get();
        return view('students_evaluated.index' , compact('all_students' , 'students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_students = Students::get();
        return view('students_evaluated.create' , compact('all_students'));
    }


    public function store(Request $request)
    {
         $this->validate($request ,[
          'mark' => 'required|numeric' ,
          'description' => 'required|max:45|string'
         ],[
         'mark.required' => 'درجة الطالب مطلوبة',
         'description.required' => 'وصف الطالب مطلوب',
          'max' => '45 حرف حد الاقصى',
          "numeric" => "رجاء ادخل رقم",
         ]);

         $rating_tudent =  new Rating();
         $rating_tudent->create($request->all());
         return redirect()->route('students_evaluated.index')->with('successs' , ' ');
    }





    public function edit($id)
    {
      $edit_rating =    Rating::FindOrFail($id);
      $all_students = Students::get();
      return view('students_evaluated.edit' , compact('edit_rating' , 'all_students' ));

    }


    public function update(Request $request, $id)
    {
        $this->validate($request ,[
            'mark' => 'required|numeric' ,
            'description' => 'required|max:45|string'
           ],[
           'mark.required' => 'درجة الطالب مطلوبة',
           'description.required' => 'وصف الطالب مطلوب',
            'max' => '45 حرف حد الاقصى',
            "numeric" => "رجاء ادخل رقم",
           ]);


        $update_rating =    Rating::FindOrFail($id);
        $update_rating->update($request->all());
        return redirect()->route('students_evaluated.index')->with('success' , ' ');

    }

    public function destroy($id)
    {
        $update_rating = Rating::FindOrFail($id);
        $update_rating->delete();

        return redirect()->back()->with('delete' , '  ');
    }
}
