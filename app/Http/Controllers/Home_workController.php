<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home_work;
use App\Classes;
use App\Studing_subjects;

class Home_workController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeWorks = Home_work::with('class' , 'studing_subject')->paginate(5);
        return view('homeworks.index' , compact('homeWorks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = Classes::get(['id' , 'class_name']);
        $studingSubjects = Studing_subjects::get(['id' , 'name']);
        return view('homeworks.create' , compact('classes' , 'studingSubjects'));
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
            'subject'               => 'required|string',
            'hw_date'               => 'required|date',
            'classes_ID'            => 'required|numeric',
            'studing_subjects_ID'   => 'required|numeric',
        ], [] , [
            'subject'               => 'اسم المادة',
            'hw_date'               => 'تاريج الواجب',
            'classes_ID'            => 'اسم الصف',
            'studing_subjects_ID'   => ' واجب الطالب ',
        ]);

        Home_work::create($data);
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
        $homework = Home_work::with('class')->findOrfail($id);
        $classes = Classes::get(['id' , 'class_name']);
        $studingSubjects = Studing_subjects::get(['id' , 'name']);
        return view('homeworks.edit' , compact('homework' , 'classes' , 'studingSubjects'));
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
        $homeWork = Home_work::findOrfail($id);
        $data = $this->validate($request , [
            'subject'               => 'sometimes|string',
            'hw_date'               => 'sometimes|date',
            'classes_ID'            => 'sometimes|numeric',
            'studing_subjects_ID'   => 'sometimes|numeric',
        ], [] , [
            'subject'               => 'اسم المادة',
            'hw_date'               => 'تاريج الواجب',
            'classes_ID'            => 'اسم الصف',
            'studing_subjects_ID'   => ' واجب الطالب ',
        ]);

        $homeWork->update($data);

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
        $homeWork = Home_work::findOrfail($id);
        $homeWork->delete();
        session()->flash('success' , 'تم الحذف بنجاح');
        return redirect()->route('homeworks.index');
    }
}
