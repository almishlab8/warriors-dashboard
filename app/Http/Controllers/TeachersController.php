<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teachers;
use Illuminate\Support\Facades\Storage;
use App\User;
use Illuminate\Support\Facades\Hash;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teachers::paginate(5);
        return view('teachers.index' , compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create');
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
            'name'                  => 'required|string',
            'gender'                => 'required|string',
            'qualifications'        => 'required|string',
            'address'               => 'required|string',
            'phone_no'              => 'required|numeric',
            'birthday'              => 'required|date',
            'teacher_documents'     => 'required|mimes:pdf',
            'teacher_certificate'   => 'required|mimes:pdf',
            'email'                 => 'required|string',
            'password'              => 'required',
        ], [] , [
            'name'                  => 'اسم الاستاذ',
            'gender'                => 'الجنس',
            'qualifications'        => 'المؤهلات',
            'address'               => 'عنوان السكن',
            'phone_no'              => 'رقم الهاتف',
            'birthday'              => 'تاريخ الميلاد',
            'teacher_documents'     => 'وثائق الاستاذ',
            'teacher_certificate'   => 'شهادات الاستاذ',
            'email'                 => 'ايميل الاستاذ',
            'password'              => 'باسورد الاستاذ'
        ]);

        //upload teacher documents
        if($request->hasFile('teacher_documents')) {
            $fileNameWithExtension = $request->file('teacher_documents')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExtension , PATHINFO_FILENAME);
            $extension = $request->file('teacher_documents')->getClientOriginalExtension();
            $fileNameDoc = $fileName . '_' . time() . '.' .$extension;
            $path = $request->file('teacher_documents')->move('upload/documents',$fileNameDoc );

            $data['teacher_documents'] = $fileNameDoc;
        }


        //upload teacher certificate
        if($request->hasFile('teacher_certificate')) {
            $fileNameWithExtension = $request->file('teacher_certificate')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExtension , PATHINFO_FILENAME);
            $extension = $request->file('teacher_certificate')->getClientOriginalExtension();
            $fileNameCer = $fileName . '_' . time() . '.' .$extension;
            $path = $request->file('teacher_certificate')->move('upload/graduationـcertificate/',$fileNameCer);
            $data['teacher_certificate'] = $fileNameCer;
        }

        $user = new User();
        $user->name = $data['name'];
        if($request->has('password')) {
            $user->password = Hash::make($data['password']);
        }
        $user->email = $data['email'];
        $user->admin = 2;
        $user->save();


        $data['USER_ID'] = $user->id;
        //dd($data);

        Teachers::create($data);

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
        $teacher = Teachers::findOrfail($id);
        return view('teachers.edit' , compact('teacher'));
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
        $teacher = Teachers::findOrfail($id);
        $data = $this->validate($request , [
            'name'                  => 'required|string',
            'gender'                => 'required|string',
            'qualifications'        => 'required|string',
            'address'               => 'required|string',
            'phone_no'              => 'required|numeric',
            'birthday'              => 'required|date',
            'teacher_documents'     => 'sometimes|mimes:pdf',
            'teacher_certificate'   => 'sometimes|mimes:pdf',
            'email'                 => 'required|string',
            'password'              => 'sometimes',
        ], [] , [
            'name'                  => 'اسم الاستاذ',
            'gender'                => 'الجنس',
            'qualifications'        => 'المؤهلات',
            'address'               => 'عنوان السكن',
            'phone_no'              => 'رقم الهاتف',
            'birthday'              => 'تاريخ الميلاد',
            'teacher_documents'     => 'وثائق الاستاذ',
            'teacher_certificate'   => 'شهادات الاستاذ',
            'email'                 => 'ايميل الاستاذ',
            'password'              => 'باسورد الاستاذ'
        ]);






        //upload teacher documents
        if(!empty($request->teacher_documents)) {
            if($teacher->teacher_documents)
            {
                unlink('upload/documents/'.$teacher->teacher_documents);
            }
            if($request->hasFile('teacher_documents')) {
                $fileNameWithExtension = $request->file('teacher_documents')->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExtension , PATHINFO_FILENAME);
                $extension = $request->file('teacher_documents')->getClientOriginalExtension();
                $fileNameDoc = $fileName . '_' . time() . '.' .$extension;
                $path = $request->file('teacher_documents')->move('upload/documents' , $fileNameDoc );

                $data['teacher_documents'] = $fileNameDoc;
            }
        } else {
            $data['teacher_documents'] = $teacher->teacher_documents;
        }



        //upload teacher certificate
        if(!empty($request->teacher_certificate)) {

            if($teacher->teacher_certificate)
            {
                unlink('upload/graduationـcertificate/'.$teacher->teacher_certificate);
            }
            if($request->hasFile('teacher_certificate')) {
                $fileNameWithExtension = $request->file('teacher_certificate')->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExtension , PATHINFO_FILENAME);
                $extension = $request->file('teacher_certificate')->getClientOriginalExtension();
                $fileNameCer = $fileName . '_' . time() . '.' .$extension;
                $path = $request->file('teacher_certificate')->move('upload/graduationـcertificate',$fileNameCer);

                $data['teacher_certificate'] = $fileNameCer;
            }
        } else {
            $data['teacher_certificate'] = $teacher->teacher_certificate;
        }

/*
        if(isset($data['password']) && $data['password'] != '') {
            $data['password'] = bcrypt(request()->get('password'));
        } else {
            dd($request->password = $data['password']);
        }
*/

        $user = User::find($teacher->USER_ID);

        if(isset($request->password) && $request->password != '') {
            $data['password'] = bcrypt(request()->get('password'));
        } else {
            $data['password'] = $user->password;
        }
        $user->update([
            'name'      => $data['name'],
            'email'     => $data['email'],
            'password'  => $data['password'],
            'admin'     => 2,
        ]);

        $data['USER_ID'] = $user->id;

        //dd($data);


        $teacher->update($data);

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
        $teacher = Teachers::findOrfail($id);
        if($teacher->teacher_documents)
        {
            unlink('upload/documents/'.$teacher->teacher_documents);
        }

        if($teacher->teacher_certificate)
        {
            unlink('upload/graduationـcertificate/'.$teacher->teacher_certificate);
        }
        $user = User::find($teacher->USER_ID);
        $user->delete();
        $teacher->delete();
        session()->flash('success' , 'تم الحذف بنجاح');
        return redirect()->route('teachers.index');
    }
}
