<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\User;
use App\userProfile;
use Auth;
use Validator;
class UsersController extends Controller
{


    public function __construct()
    {
        $this->middleware('can:isSuperAdmin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (\Gate::allows('isSuperAdmin')) {
        return view('manager.index')->with('users',User::all())->with('userProfile',userProfile::all()) ;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manager.create')   ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users',
            'password' => 'required|string|min:6'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $profile = userProfile::create([
            'user_id' => $user->id,
        ]);

        return redirect('users')->with('success', 'Done successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= User::findOrFail($id);
        return view('manager.edit')->with('user',$user);
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
       $user =   User::find($id);
     

        $this->validate($request,[
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users,email,'.$user->id,
            'password' => 'sometimes|string|min:6',
        ]);
        
        
        $user->name   = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();
    
         return redirect('users')->with('success', 'Done successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (\Gate::allows('isSuperAdmin')) {
        $user = User::find($id);
        $user->profile->delete($id);
        $user->delete();
        return redirect('users');
        }
    }




    public function admin($id)
    {
        $user = User::find($id);
        $user->admin = 1;
        $user->save();
        return redirect()->back();
    }
    public function teacher($id)
    {
        $user = User::find($id);
        $user->admin = 2;
        $user->save();
        return redirect()->back();
    }

    public function notAdmin($id)
    {
        $user = User::find($id);
        $user->admin = 0;
        $user->save();
        return redirect()->back();
    }




}
