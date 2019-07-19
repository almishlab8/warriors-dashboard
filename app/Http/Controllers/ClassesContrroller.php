<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;
class ClassesContrroller extends Controller
{

    public function index()
    {
        $classes = Classes::get();
       return  view('classes.showclasses' , compact('classes'));
    }

    public function create()
    {
        return view('classes.addclass');
    }

    public function store(Request $request)
    {
        $classes = new Classes;
        $this->validate( $request,[
        'class_name' => 'required|string|max:255',
        ],
        [
            'class_name.required' => 'رجاء ملاء هذا الحقل مطلوب'
        ]
    );
        $classes->class_name = $request->class_name;
        $classes->save();
        return redirect()->back()->with('class' , ' ');
    }
    public function destroy($id)
    {
        $classes = Classes::find($id);
        $classes->delete();
        return redirect()->back()->with('delete' , ' ');
    }
}
