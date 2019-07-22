<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use App\Classes;
use DB;
use Auth;
use App\User;
use Illuminate\Support\Facades\Storage;

class StudentsContrroller extends Controller
{

    public function index()
    {
        $all = DB::table('students')->orderBy('updated_at', 'desc')->get();
        $class = Classes::get();
        return view ('students/all' , compact('all' , 'class'));
    }
    public function create()
    {
        $user =     User::get();
        $students = User::get();
        return view ('students/allstudents' , compact('user' , 'students'));
    }
    public function store(Request $request)
    {
        $students = new Students;
        $user = new  User;
        $this->validate($request,[
            'name'              => 'required|string|max:255',
            'email'             => 'required|string|email|max:255',
            'password'          => 'string|max:255',
            'birthday'          => 'required',
            'gender'            => 'required',
            'student_no'        => 'required|string|max:255',
            'address'           => 'required|string|max:255',
            'phone_no'          => 'required|string|max:255',
            'student_documents' => 'mimes:pdf',
           ],
            [
            'name.required'       => 'الأسم مطلوب',
            'birthday.required'   => 'تاريخ الميلاد مطلوب',
            'gender.required'     => 'نوع الجنس مطلوب',
            'student_no.required' => 'الحالة الطالب مطلوبة',
            'address.required'    => 'عنوان السكن مطلوب',
            'phone_no.required'   => 'رقم الهاتف مطلوب',
            'email.required'      => 'الربد الكتروني مطلوب',
            'email'               => 'رجاء اكتب البريد الكتروني الصحيح',

        ]);
      if($request->student_documents ){
        $picture = $request->student_documents;
        $student_documents_new =  time()  .  '.'  .  $request->student_documents->getClientOriginalExtension();
        $picture->move('upload/students/' , $student_documents_new);
        $picture->$picture   = $student_documents_new;

        $user->email       = $request->email;
        $user->name        = $request->name;
        $user->admin        = 3 ;
        $user->password       = bcrypt($request->input('password'));
        $user->save();

        $students->name       = $request->name;
        $students->birthday   = $request->birthday;
        $students->gender     = $request->gender;
        $students->student_no = $request->student_no;
        $students->address    = $request->address;
        $students->phone_no   = $request->phone_no;
        $students->student_documents = ('/upload/students/'. $student_documents_new);
        $students->USERS_ID     =  $user->id  ;
        $students->save();


        return redirect()->back();
    }else
    {
        $user->email       = $request->email;
        $user->name        = $request->name;
        $user->admin        = 3 ;
        $user->password       = bcrypt($request->input('password'));
        $user->save();

        $students->name = $request->name;
        $students->birthday = $request->birthday;
        $students->gender = $request->gender;
        $students->student_no = $request->student_no;
        $students->address = $request->address;
        $students->phone_no = $request->phone_no;
        $students->USERS_ID     =  $user->id  ;
        $students->save();




        return redirect()->back()->with('seuccs' ,'  ');;
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
         $user = User::find($students->USERS_ID);
        $this->validate($request,[
            'name'              => 'required|string|max:255',
            'email'             => 'required|string|email|max:255',
            'password'          => 'required|string|max:255',
            'birthday'          => 'required',
            'gender'            => 'required',
            'student_no'        => 'required|string|max:255',
            'address'           => 'required|string|max:255',
            'phone_no'          => 'required|string|max:255',
            'student_documents' => 'mimes:pdf',
           ] ,  [
            'name.required'       => 'الأسم مطلوب',
            'birthday.required'   => 'تاريخ الميلاد مطلوب',
            'gender.required'     => 'نوع الجنس مطلوب',
            'student_no.required' => 'الحالة الطالب  مطلوبة',
            'address.required'    => ' عنوان السكن  مطلوب',
            'phone_no.required'   => '  رقم الهاتف   مطلوب',
            'email.required'      => '      الربد الكتروني مطلوب',
            'password.required'   => '  رقم السري   مطلوب',
            'email'               => 'رجاء اكتب البريد الكتروني الصحيح',
        ]);
       if ($request->student_documents) {
            $picture = $request->student_documents;
            $student_documents_new = time() .  '.'  . $request->student_documents->getClientOriginalExtension();
            $picture->move('upload/students/' , $student_documents_new);
            $picture->$picture = $student_documents_new;

            $user->email       = $request->email;
            $user->name        = $request->name;
            $user->admin        = 3 ;
            $user->password       = bcrypt($request->input('password'));
           $user->save();

            $students->name = $request->name;
            $students->birthday = $request->birthday;
            $students->gender = $request->gender;
            $students->student_no = $request->student_no;
            $students->address = $request->address;
            $students->phone_no = $request->phone_no;
            $students->student_documents = ('/upload/students/'. $student_documents_new);
            $students->USERS_ID =  $user->id;

            $students->save();
            return redirect()->back()->with('seuccs' ,' ');
    }else {
            $user->email       = $request->email;
            $user->name        = $request->name;
            $user->admin        = 3 ;
            $user->password       = bcrypt($request->input('password'));
            $user->save();
            $students->save();

            $students->name = $request->name;
            $students->birthday = $request->birthday;
            $students->gender = $request->gender;
            $students->student_no = $request->student_no;
            $students->address = $request->address;
            $students->phone_no = $request->phone_no;
            $students->USERS_ID =  $user->id;

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
