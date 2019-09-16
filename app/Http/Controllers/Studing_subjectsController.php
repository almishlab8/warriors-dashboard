<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studing_subjects;
use App\Teachers;
use App\Classes;

class Studing_subjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studingSubjects = Studing_subjects::with('class')->paginate(5);
        return view('studingSubjects.index' , compact('studingSubjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = Classes::get(['id' , 'class_name']);
        $teachers = Teachers::get(['id' , 'name']);
        return view('studingSubjects.create' , compact('classes' , 'teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request , [
            'name'              => 'required|string',
            'classes_ID'        => 'required|numeric',
            'teachers_id'       => 'required|numeric',
        ], [] , [
            'name'              => 'اسم الواجب',
            'classes_ID'        => 'اسم الصف',
            'teachers_id'       => ' اسم  الاستاذ ',
        ]);

        Studing_subjects::create($data);
        return redirect()->back()->with('success' ,' ');
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
        $studingSubject = Studing_subjects::findOrfail($id);
        $classes = Classes::get(['id' , 'class_name']);
        $teachers = Teachers::get(['id' , 'name']);
        return view('studingSubjects.edit' , compact('studingSubject' , 'classes' , 'teachers'));
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
        $studingSubject = Studing_subjects::findOrfail($id);
        $data = $this->validate($request , [
            'name'              => 'sometimes|string',
            'classes_ID'        => 'sometimes|numeric',
            'teachers_id'       => 'sometimes|numeric',
        ], [] , [
            'name'              => 'اسم الواجب',
            'classes_ID'        => 'اسم الصف',
            'teachers_id'       => ' اسم  الاستاذ ',
        ]);

        $studingSubject->update($data);

        return redirect()->back()->with('success' ,' ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $studingSubject = Studing_subjects::findOrfail($id);
        $studingSubject->delete();
        session()->flash('success' , 'تم الحذف بنجاح');
        return redirect()->route('studingSubjects.index');
    }
}
