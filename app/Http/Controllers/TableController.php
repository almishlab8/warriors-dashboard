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
        $getLessonIdValue = Table::where('day_id', $request->day_id)
                           ->where('lesson_id', $request->lesson_id)->value('lesson_id');
            if ($getLessonIdValue == null) {
                Table::create($request->all());
            }elseif ($getLessonIdValue != null){
                Session::flash('success','تم أضافة هذا الدرس مسبقاً');
                return redirect()->back();
            }else {
                Session::flash('success','تأكد من أدخال البيانات');
                return redirect()->back();
            }

         Session::flash('success','تمت أضافة البيانات بنجاح');
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

    public function destroy($id)
    {
        $table = Table::findOrfail($id);
        $table->delete();
        return redirect()->back();
    }
}
