<?php

namespace App\Http\Controllers;
use App\Rating;
use App\Students;
use App\User;
use App\Material;
use Illuminate\Http\Request;
class RatingContrroller extends Controller
{


    public function index()
    {
        $all_students = Rating::get();
        $all_material = Material::get();
        $students = Students::get();
        return view('students_evaluated.index' , compact('all_students' , 'students' , 'all_material'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materials  =    Material::get();
        $all_students = Students::get();
        return view('students_evaluated.create' , compact('all_students' , 'materials'));
    }


    public function store(Request $request)
    {

         $this->validate($request ,[
          'mark' => 'required|numeric' ,
          'description' => 'required|max:45|string',
          'material_name' => 'required'
         ],[
         'mark.required' => 'درجة الطالب مطلوبة',
         'description.required' => 'وصف الطالب مطلوب',
          'max' => '45 حرف حد الاقصى',
          "numeric" => "رجاء ادخل رقم",
         ]);


          Rating::create($request->all());
          return redirect()->route('students_evaluated.index')
          ->with('successs' , ' ');


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
            'description' => 'required|max:45|string',
            'material_name' => 'required',
           ],[
           'mark.required' => 'درجة الطالب مطلوبة',
           'description.required' => 'وصف الطالب مطلوب',
            'max' => '45 حرف حد الاقصى',
            "numeric" => "رجاء ادخل رقم",
            'material_name.required'  => 'المادة مطلوبة'
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
