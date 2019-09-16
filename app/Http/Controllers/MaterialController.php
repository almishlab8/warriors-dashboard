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
        $materialss = Material::all();
        return view('materials.index', $vars)->with(['materialss' => $materialss]);
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
        $materials = Material::all();
        return view('materials.create', $vars)->with(['materials' => $materials]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(json_encode($request->material_name,JSON_UNESCAPED_UNICODE));
        $this->validate($request,[
            'material_name' => 'required|max:255',
            'class_id'      => 'required',
        ]);
        // json_encode($request->material_name)
        // JSON_UNESCAPED_UNICODE
        // JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES
        // unserialize
        // serialize
        //$inputs = $request->all();
        //$array = $inputs['material_name'];
        //dd(serialize($array,JSON_UNESCAPED_UNICODE));
        /////dd(serialize($array));
        //$serializedArr = unserialize($array);
        
        // $test = Material::create([
        //     'material_name' => json_encode($request->material_name, JSON_UNESCAPED_UNICODE),
        //     'class_id'      => $request->class_id,
        // ]);
        $test = Material::create([
            'material_name' => $request->material_name,
            'class_id'      => $request->class_id,
        ]);
       // dd($test);
              
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
        //$vars = compact(array_keys(get_defined_vars()));
        // $materials = Material::all();
        //dd($material);
        return view('materials.edit', compact('classes','material'));
    
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
            'material_name' => 'required',
            'class_id'      => 'required',
        ]);
        
        $material->update([
            // $material->material_name = json_encode($request->material_name);
            // $material->class_id = $request->class_id;
            'material_name' => json_encode($request->material_name, JSON_UNESCAPED_UNICODE),
            'class_id'      => $request->class_id,
        ]);
        
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
