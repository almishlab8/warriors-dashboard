<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alert;
use App\Students;
use App\Teachers;

class AlertsContrroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alerts = Alert::paginate(10);
        $vars = compact(array_keys(get_defined_vars()));
    
        return view('alerts.index', $vars);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $teachers = Teachers::all();
        $students = Students::all();
        $vars = compact(array_keys(get_defined_vars()));
        return view('alerts.create', $vars);
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
          'title'                  => 'required|string',
          'teachers_id'                       => '',
          'students_id'                       => '',
          'for_all'                       => '',
          'classes_ID'                       => '',
     
          ] ,  [
            'title.required'       => 'التبليغ مطلوب',
      
    
        ]);
    
   
      if ($request->teachers_id == null) {$data['teachers_id'] = 0;};
      if ($request->students_id == null) {$data['students_id'] = 0;};

      if ($request->type == 0) {$data['for_all']  = 1;}else{$data['for_all']  = 0;};
      Alert::create($data);
    
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alert = Alert::find($id);

        $alert->delete();

        return redirect()->back()->with('delete' ,'  ');
    }
}
