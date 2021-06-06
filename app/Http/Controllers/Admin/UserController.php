<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Hash;
use DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$users= User::all();
    	return view('Admin.users.list',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('Admin.users.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',
            'dob' => 'required',
            'gender' => 'required',
            'country' => 'required',
            'hobbies' => 'required',
            ]);
        $user= new User;
        $user->name =$request['name'];
        $user->email =$request['email'];
        $user->password =Hash::make($request['password']);
        $user->dob =$request['dob'];
        $user->gender =$request['gender'];
        $user->country =$request['country'];
        $user->hobbies =$request['hobbies'];
        $user->save();
        toastr()->success('User Created successfully');
        return redirect()->route('admin.user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
	    $id= base64_decode($id);
        $editUser= User::select('users.*')->where('users.id',$id)->first();
        return view('Admin.user.view',compact('editUser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id= base64_decode($id);
        $editUser= User::where('id',$id)->first();
        return view('Admin.users.edit',compact('editUser'));
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
    	$id = base64_decode($id);
	    	$request->validate([
	            'name' => 'required|min:3',
	            'email' => 'required|email|unique:users,email,'.$id,
	            'dob' => 'required',
	            'gender' => 'required',
	            'country' => 'required',
	            'hobbies' => 'required',
            ]);
        	$user = User::find($id);
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->gender = $request['gender'];
            $user->dob = $request['dob'];
            $user->country = $request['country'];
            $user->hobbies = $request['hobbies'];
    		$user->save();
            toastr()->success('User Updated successfully');
            return redirect()->route('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($id!=''){
            $id=  base64_decode($id);
            $previousdata= User::select('is_delete')->where('id',$id)->get();
            if($previousdata[0]['is_delete'] == 0){
                User::where('id',$id)->update(['is_delete'=>1]);
                $msg= 'Deactivated Successfully';
                toastr()->error($msg);
            }else{
                User::where('id',$id)->update(['is_delete'=>0]);
                $msg= 'Activated Successfully';
                toastr()->success($msg);
            }
        return redirect()->route('admin.user.index');
        }else{
                toastr()->error('No Id found');
        return redirect()->route('admin.user.index');

        }
    }
}
