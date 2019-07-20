<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use App\Classes;
use Auth;

class StudentsContrroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Students::get();
        $class = Classes::get();
        return view ('students/all' , compact('all' , 'class'));
    }
    public function create()
    {
        return view ('students/allstudents');
    }
    public function store(Request $request)
    {
        $students = new Students;
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'birthday' => 'required',
            'gender' => 'required',
            'student_no' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone_no' => 'required|string|max:255',
            'student_documents' => 'mimes:pdf',

           ],
            [
            'name.required' => 'الأسم مطلوب',
            'birthday.required' => 'تاريخ الميلاد مطلوب',
            'gender.required' => 'نوع الجنس مطلوب',
            'student_no.required' => 'الحالة الطالب  مطلوبة',
            'address.required' => ' عنوان السكن  مطلوب',
            'phone_no.required' => '  رقم الهاتف   مطلوب',

        ]);
      if($request->student_documents ){
        $picture = $request->student_documents;
        $student_documents_new =  time()  .  '.'  .  $request->student_documents->getClientOriginalExtension();
        $picture->move('upload/students/' , $student_documents_new);
        $picture->$picture = $student_documents_new;

        $students->name = $request->name;
        $students->birthday = $request->birthday;
        $students->gender = $request->gender;
        $students->student_no = $request->student_no;
        $students->address = $request->address;
        $students->phone_no = $request->phone_no;
        $students->student_documents = ('/upload/students/'. $student_documents_new);
        $students->USERS_ID =  Auth::user()->id;
        $students->save();
        return redirect()->back();
    }else
    {
        $students->name = $request->name;
        $students->birthday = $request->birthday;
        $students->gender = $request->gender;
        $students->student_no = $request->student_no;
        $students->address = $request->address;
        $students->phone_no = $request->phone_no;
        $students->USERS_ID =  Auth::user()->id;
        $students->save();
        return redirect()->back()->with('seuccs' ,' ');;
    }
    }
    public function edit($id)
    {
        $edit = Students::find($id);
        return view('students.edit' , compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $students = Students::find($id);
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'birthday' => 'required',
            'gender' => 'required',
            'student_no' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone_no' => 'required|string|max:255',
            'student_documents' => 'mimes:pdf',
           ] ,  [
            'name.required' => 'الأسم مطلوب',
            'birthday.required' => 'تاريخ الميلاد مطلوب',
            'gender.required' => 'نوع الجنس مطلوب',
            'student_no.required' => 'الحالة الطالب  مطلوبة',
            'address.required' => ' عنوان السكن  مطلوب',
            'phone_no.required' => '  رقم الهاتف   مطلوب',

        ]);
       if ($request->student_documents) {
            $picture = $request->student_documents;
            $student_documents_new = time() .  '.'  . $request->student_documents->getClientOriginalExtension();
            $picture->move('upload/students/' , $student_documents_new);
            $picture->$picture = $student_documents_new;

            $students->name = $request->name;
            $students->birthday = $request->birthday;
            $students->gender = $request->gender;
            $students->student_no = $request->student_no;
            $students->address = $request->address;
            $students->phone_no = $request->phone_no;
            $students->student_documents = ('/upload/students/'. $student_documents_new);
            $students->USERS_ID =  Auth::user()->id;
            $students->save();
        return redirect()->back()->with('seuccs' ,' ');
    }else {
            $students->name = $request->name;
            $students->birthday = $request->birthday;
            $students->gender = $request->gender;
            $students->student_no = $request->student_no;
            $students->address = $request->address;
            $students->phone_no = $request->phone_no;
            $students->USERS_ID =  Auth::user()->id;
            $students->save();
            return redirect()->back()->with('seuccs' ,' ');
    }
    }
    public function destroy($id)
    {
        $student = Students::find($id);
        $student->delete();
        return redirect()->back()->with('delete' ,' ');
    }



    public function merge()
    {
        $students = Students::all();
        $classes = Classes::all();
        return view ('students/merge' , compact('students' , 'classes'));
    }






    public function mergestore(Request $request )
    {
        $student = Students::find($request->stu_id);
        $student->classes_ID = $request->class_id;
        $student->save();

        return redirect()->back()->with('classs' , ' ');
    }

}
