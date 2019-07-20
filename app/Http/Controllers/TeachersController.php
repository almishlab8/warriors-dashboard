<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teachers;
use Illuminate\Support\Facades\Storage;

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
            'gender'                => 'required|string',
            'qualifications'        => 'required|string',
            'address'               => 'required|string',
            'phone_no'              => 'required|numeric',
            'birthday'              => 'required|date',
            'teacher_documents'     => 'required|mimes:pdf',
            'teacher_certificate'   => 'required|mimes:pdf'
        ]);

        $data['USER_ID'] = auth()->user()->id;

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


        //dd($data);

        Teachers::create($data);

        session()->flash('success');
        return redirect('teachers');
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
            'gender'                => 'required|string',
            'qualifications'        => 'required|string',
            'address'               => 'required|string',
            'phone_no'              => 'required|numeric',
            'birthday'              => 'required|date',
            'teacher_documents'     => 'sometimes|mimes:pdf',
            'teacher_certificate'   => 'sometimes|mimes:pdf'
        ]);
        $data['USER_ID'] = auth()->user()->id;



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

        //dd($data);


        $teacher->update($data);


        session()->flash('success');
        return redirect('teachers');
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
        $teacher->delete();
        session()->flash('success');
        return redirect('teachers');
    }
}
