<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Class_home_work;
use App\Material;
use App\Classes;

class Class_homeworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class_homeworks = Class_home_work::paginate(5);
        return view('class-homeworks.index' , compact('class_homeworks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = Classes::get(['id' , 'class_name']);
        $materials = Material::get(['id' , 'material_name']);
        return view('class-homeworks.create' , compact('classes' , 'materials'));
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
            'notes'                 => 'required|string|max:255',
            'deadline_date'         => 'required|date',
            'classes_ID'            => 'required|numeric',
            'material_ID'           => 'required|numeric',
        ], [] , [
            'notes'                 => 'ملاحظات او وصف للواجب',
            'deadline_date'         => 'تاريج تسليم الواجب',
            'classes_ID'            => 'اسم الصف',
            'material_ID'           => ' اسم المادة ',
        ]);

        //dd($data);
        Class_home_work::create($data);
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class_homework = Class_home_work::findOrfail($id);
        $classes = Classes::get(['id' , 'class_name']);
        $materials = Material::get(['id' , 'material_name']);
        return view('class-homeworks.edit' , compact('class_homework' , 'classes' , 'materials'));
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
        $class_homework = Class_home_work::findOrfail($id);
        $data = $this->validate($request , [
            'notes'                 => 'sometimes|string|max:255',
            'deadline_date'         => 'sometimes|date',
            'classes_ID'            => 'sometimes|numeric',
            'material_ID'           => 'sometimes|numeric',
        ], [] , [
            'notes'                 => 'ملاحظات او وصف للواجب',
            'deadline_date'         => 'تاريج تسليم الواجب',
            'classes_ID'            => 'اسم الصف',
            'material_ID'           => ' اسم المادة ',
        ]);

        $class_homework->update($data);

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
        $class_homework = Class_home_work::findOrfail($id);
        $class_homework->delete();
        session()->flash('success' , 'تم الحذف بنجاح');
        return redirect()->route('class_homeworks.index');
    }
}
