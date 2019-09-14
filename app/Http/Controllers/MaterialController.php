<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
use App\Classes;
use DB;
use Auth;
use App\User;
use Illuminate\Support\Facades\Storage;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials = Material::paginate(10);
        $vars = compact(array_keys(get_defined_vars()));
    
        return view('materials.index', $vars);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = Classes::all();
        $vars = compact(array_keys(get_defined_vars()));
    
        return view('materials.create', $vars);
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
            'material_name' => 'required|string|max:191',
            'class_name' => 'required|string|max:191',
        ]);
        $material = Material::create([
            'material_name' => $request->material_name,
            'class_name' => $request->class_name,
        ]);
        
        return redirect()->back()->with('success' ,'تم الحفظ بنجاح');

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
        $classes = Classes::all();
        $material = Material::find($id);
        $vars = compact(array_keys(get_defined_vars()));
    
        return view('materials.edit', $vars);
    
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
        $material = Material::find($id);
        $this->validate($request,[
            'material_name' => 'required|string|max:191',
            'class_name' => 'required|string|max:191',
        ]);
        $material->material_name = $request->material_name;
        $material->class_name = $request->class_name;

        $material->save();
        return redirect()->route('materials.index')->with('success' ,'تم التعديل بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $material = Material::find($id);

        $material->delete();

        return redirect()->back()->with('delete' ,'  ');
    }
}
