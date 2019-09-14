<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use App\Classes;
use DB;
use App\User;
use App\Rating;
use Illuminate\Support\Facades\Storage;

class StudentsContrroller extends Controller
{

    public function index()
    {
        $students = DB::table('students')->orderBy('updated_at', 'desc')->get();
        $class = Classes::get();
        return view ('students/index' , compact('students' , 'class'));
    }
    public function create()
    {
        $user =     User::get();
        $students = User::get();
        return view ('students/create' , compact('user' , 'students'));
    }
    public function store(Request $request)
    {
        $students = new Students;
        $user = new  User;
        $this->validate($request,[
            'name'              => 'required|string|max:255',
            'email'             => 'required|string|email|max:255|unique:users',
            'password'          => 'required|string|max:255',
            'birthday'          => 'required',
            'gender'            => 'required',
            'student_no'        => 'required|string|max:255',
            'address'           => 'required|string|max:255',
            'phone_no'          => 'required',
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
            'unique'               => 'البريد الكتروني مستخدم',
            'numeric'               => 'المطلوب رقم',
            'password.required'   => '  رقم السري   مطلوب',

        ]);


        $user->email       = $request->email;
        $user->name        = $request->name;
        $user->admin        = 3 ;
        $user->password       = bcrypt($request->input('password'));
        $user->save();


        if($request->hasFile('student_documents')) {
            $fileNameWithExtension = $request->file('student_documents')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExtension , PATHINFO_FILENAME);
            $extension = $request->file('student_documents')->getClientOriginalExtension();
            $fileNameCer = $fileName . '_' . time() . '.' .$extension;
            $path = $request->file('student_documents')->move('upload/student_documents/',$fileNameCer);
            $students->student_documents = $fileNameCer;

        }

        $students->name       = $request->name;
        $students->birthday   = $request->birthday;
        $students->gender     = $request->gender;
        $students->student_no = $request->student_no;
        $students->address    = $request->address;
        $students->phone_no   = $request->phone_no;
        $students->USERS_ID     =  $user->id  ;
        $students->save();

        return redirect()->back()->with('seuccs' ,' ');

    }
    public function edit($id)
    {
        $edit = Students::find($id);

        return view('students.edit' , compact('edit'));
    }

    public function update(Request $request, $id)
    {
        //update  Students
         $students = Students::find($id);
         $user = User::find($students->USERS_ID);
        $this->validate($request,[
            'name'              => 'required|string|max:255',
            'email'             => 'required|string|email|max:255',

            'birthday'          => 'required',
            'gender'            => 'required',
            'student_no'        => 'required|string|max:255',
            'address'           => 'required|string|max:255',
            'phone_no'          => 'required',
            'student_documents' => 'mimes:pdf',
           ] ,  [
            'name.required'       => 'الأسم مطلوب',
            'birthday.required'   => 'تاريخ الميلاد مطلوب',
            'gender.required'     => 'نوع الجنس مطلوب',
            'student_no.required' => 'الحالة الطالب  مطلوبة',
            'address.required'    => ' عنوان السكن  مطلوب',
            'phone_no.required'   => '  رقم الهاتف   مطلوب',
            'email.required'      => '      الربد الكتروني مطلوب',
            'email'               => 'رجاء اكتب البريد الكتروني الصحيح',
            'numeric'               => 'المطلوب رقم',

        ]);


        if(!empty($request->student_documents)) {
            if($students->student_documents)
            {
                unlink('upload/student_documents/'.$students->student_documents);
            }
            if($request->hasFile('student_documents')) {
                $fileNameWithExtension = $request->file('student_documents')->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExtension , PATHINFO_FILENAME);
                $extension = $request->file('student_documents')->getClientOriginalExtension();
                $fileNameDoc = $fileName . '_' . time() . '.' .$extension;
                $path = $request->file('student_documents')->move('upload/student_documents' , $fileNameDoc );

                $students->student_documents = $fileNameDoc;
            }
        } else {
            $students->student_documents = $students->student_documents;

        }

        if (request()->has('password') && request()->get('password') != '') {
            $user = $user + ['password' => Hash::make($request->password)];
        }else {

            unset($user['password']);
        }
            $user->email       = $request->email;
            $user->name        = $request->name;
            $user->admin        = 3 ;
            $user->save();

            $students->name = $request->name;
            $students->birthday = $request->birthday;
            $students->gender = $request->gender;
            $students->student_no = $request->student_no;
            $students->address = $request->address;
            $students->phone_no = $request->phone_no;
            $students->USERS_ID =  $user->id;

            $students->save();
            return redirect()->back()->with('seuccs' ,' ');

    }
    public function destroy($id)
    {
        $students = Students::findOrFail($id);
        $user = User::findOrFail($students->USERS_ID);

        $rating  = Rating::get();
        //Delete Uers
        $user->delete();
        $students->delete();

       //Delete Users & Rating
        foreach($rating as $ratin){
        if ($ratin->students_id == $students->USERS_ID) {
            $ratin->delete();
        }
    }
        return redirect()->back()->with('delete' ,'  ');
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
