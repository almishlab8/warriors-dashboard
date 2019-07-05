<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\userProfile;
class ProfilesController extends Controller
{

    public function __construct()
    {
       if ( $this->middleware('AdminAndTeacher') || $this->middleware('Admin')) {
           return true;
       }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $user = Auth::user();
        $id = Auth::id();
          if ($user->profile == null) {
             $profile =  userProfile::create([
            'user_id' => $id,
             ]);
        return view('users.profile')->with('user',Auth::user());
             }else{
                return view('users.profile')->with('user',Auth::user());
             }
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request )
    {
        
        $user = Auth::user();
        $this->validate($request,[
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users,email,'.$user->id,
            'password' => 'sometimes|min:6'
        ]);
       
        if ( $request->hasFile('documents')  ) {
            $filenameWithExtention = $request->file('documents')->getClientOriginalName();
            $fileName = pathinfo($filenameWithExtention,PATHINFO_FILENAME);
            $extension = $request->file('documents')->getClientOriginalExtension();
            $fileNameStore = $fileName .'_'.time().'.'.$extension;
            $path = $request->file('documents')->move(base_path() . '/public/upload/documents/', $fileNameStore);
            $user->profile->documents = $fileNameStore;
            $user->profile->save();
        }


        if ( $request->hasFile('cv')  ) {
            $filenameWithExtention = $request->file('cv')->getClientOriginalName();
            $fileName = pathinfo($filenameWithExtention,PATHINFO_FILENAME);
            $extension = $request->file('cv')->getClientOriginalExtension();
            $fileNameStore = $fileName .'_'.time().'.'.$extension;
            $path = $request->file('cv')->move(base_path() . '/public/upload/cv/', $fileNameStore);
            $user->profile->cv = $fileNameStore;
            $user->profile->save();
        }
        if ( $request->hasFile('graduationـcertificate')  ) {
            $filenameWithExtention = $request->file('graduationـcertificate')->getClientOriginalName();
            $fileName = pathinfo($filenameWithExtention,PATHINFO_FILENAME);
            $extension = $request->file('graduationـcertificate')->getClientOriginalExtension();
            $fileNameStore = $fileName .'_'.time().'.'.$extension;
            $path = $request->file('graduationـcertificate')->move(base_path() . '/public/upload/graduationـcertificate/', $fileNameStore);
            $user->profile->graduationـcertificate = $fileNameStore;
            $user->profile->save();
        }
       
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->input('password'));
        $user->profile->brithday = $request->brithday;
        $user->profile->gender = $request->gender;
        $user->profile->status_number = $request->status_number;
        $user->profile->phone = $request->phone;
        $user->profile->address = $request->address;
        $user->profile->Academic_achievement = $request->Academic_achievement;
        $user->save();
        $user->profile->save();
        return redirect()->back();
    }

    


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
