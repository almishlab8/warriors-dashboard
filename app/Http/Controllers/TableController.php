<?php

namespace App\Http\Controllers;

use App\Table;
use App\Classes;
use App\Material;
use App\Teachers;
use Session;
use DB;
use Illuminate\Http\Request;

class TableController extends Controller
{

    public function index()
    {
     
        $tables = Table::orderBy('lesson_id')->get();
        $countries = DB::table('classes')->pluck("class_name","id");
        $material = Material::get();
        $teachers = Teachers::get();
        return view('tables.tables',compact('countries', 'material', 'teachers', 'tables'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'class_id_table'            => 'required',
            'material_id_table'         => 'required',
            'teacher_id'                => 'required',
            'day_id'                    => 'required',
            'lesson_id'                 => 'required',
            'time_from'                 => 'required',
            'time_to'                   => 'required'
        ]);

         Table::create($request->all());
         Session::flash('success','تم أضافة البيانات بنجاح');
         return redirect()->back();
    }


    public function getStates($id) 
    {        
        $states = DB::table("materials")->where("class_id",$id)->pluck("material_name","id");
        return json_encode($states);
    }

    public function edit(Table $table)
    {
       
    }


    public function update(Request $request, Table $table)
    {
        
    }

    public function destroy(Table $table)
    {
        //
    }
}
