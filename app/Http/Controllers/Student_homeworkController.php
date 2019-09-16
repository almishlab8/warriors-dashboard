<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student_home_work;
use App\Students;
use App\Material;

class Student_homeworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student_homeworks = Student_home_work::paginate(5);
        return view('student-homeworks.index' , compact('student_homeworks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materials = Material::get(['id' , 'material_name']);
        $students = Students::get(['id' , 'name']);
        return view('student-homeworks.create' , compact('students' , 'materials'));
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
            'material_ID'           => 'required|numeric',
            'student_ID'            => 'required|numeric',
        ], [] , [
            'notes'                 => 'ملاحظات او وصف للواجب',
            'deadline_date'         => 'تاريج تسليم الواجب',
            'material_ID'           => 'اسم المادة',
            'student_ID'            => ' اسم الطالب ',
        ]);

        $student_home_works = Student_home_work::create($data);
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
        $student_homework = Student_home_work::findOrfail($id);
        $materials = Material::get(['id' , 'material_name']);
        $students = Students::get(['id' , 'name']);
        return view('student-homeworks.edit' , compact('student_homework' , 'materials' , 'students'));
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
        $student_homework = Student_home_work::findOrfail($id);
        $data = $this->validate($request , [
            'notes'                 => 'sometimes|string|max:255',
            'deadline_date'         => 'sometimes|date',
            'material_ID'           => 'sometimes|numeric',
            'student_ID'            => 'sometimes|numeric',
        ], [] , [
            'notes'                 => 'ملاحظات او وصف للواجب',
            'deadline_date'         => 'تاريج تسليم الواجب',
            'material_ID'           => 'اسم المادة',
            'student_ID'            => ' اسم الطالب ',
        ]);

        $student_homework->update($data);

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
        $student_homework = Student_home_work::findOrfail($id);
        $student_homework->delete();
        session()->flash('success' , 'تم الحذف بنجاح');
        return redirect()->route('student_homeworks.index');
    }
}
