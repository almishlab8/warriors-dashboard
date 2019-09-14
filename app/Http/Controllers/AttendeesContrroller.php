<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Students;
use App\Attendees;
class AttendeesContrroller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

=======

class AttendeesContrroller extends Controller
{
>>>>>>> 8d9ec8ba7c2c9b69eac32a358538dc7914468874
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $month = date('m');
        $day = date('d');
        $year = date('Y');

        $today = $year . '-' . $month . '-' . $day;
        $attendance = Attendees::all();
        return view('attendance.index' , [
            'date' =>$today
        ]);
=======
        //
>>>>>>> 8d9ec8ba7c2c9b69eac32a358538dc7914468874
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        $student = Students::all();
          return view('attendance.create',
        [
            'student' => $student
        ]);
=======
        //
>>>>>>> 8d9ec8ba7c2c9b69eac32a358538dc7914468874
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $item = array();
        foreach( $request->all() as $value){
            $item =$value;
        }
          for ($i = 0;$i<count($request->input('students_id'));$i++){

            $month = date('m');
            $day = date('d');
            $year = date('Y');

            $today = $year . '-' . $month . '-' . $day;

            $add= new Attendees();
            $add->status = $request->input('status')[$i];
            $add->students_id = $request->input('students_id')[$i];
            $add->date = $today;
            $add->save();

          }

          return redirect()->back()->with('success' , 'تم الاضافة بنجاح ');
=======
        //
>>>>>>> 8d9ec8ba7c2c9b69eac32a358538dc7914468874
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function show($date)
    {
        $student = Students::all();
      $attendance = Attendees::where('date', $date)->get();
      return view('attendance.show' ,
      [
            'attendance'=> $attendance ,
            'student' => $student
      ]);

=======
    public function show($id)
    {
        //
>>>>>>> 8d9ec8ba7c2c9b69eac32a358538dc7914468874
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
<<<<<<< HEAD
    public function destroy($date)
    {
        $studingSubject = Attendees::findOrfail($date);
        $studingSubject->delete();

        return redirect()->route('attendance.index');
    }
    public function search(Request $request){
       echo  $attendance = Attendees::where('date', $request->input('date'))->get();
       return view('attendance.index' , [
       'attendance' => $attendance,
       'date' =>$request->input('date')
       ]);
=======
    public function destroy($id)
    {
        //
>>>>>>> 8d9ec8ba7c2c9b69eac32a358538dc7914468874
    }
}
