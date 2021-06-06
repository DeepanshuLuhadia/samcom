<?php

namespace App\Http\Controllers\API;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\USERResource;

class USERController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $users = User::all();
        return response([ 'users' => USERResource::collection($users), 'message' => 'Retrieved successfully'], 200);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
           'name' => 'required|max:55',
            'email' => 'email|required|unique:users',
            'password' => 'required|confirmed',
            'gender' => 'required',
            'dob' => 'required',
            'country' => 'required',
            'hobbies' => 'required',
        ]);

        if($validator->fails()){
            return response(['error' => $validator->errors(), 'Validation Error']);
        }
		$data['password'] = bcrypt($request->password);
        $user = User::create($data);

        return response([ 'user' => new USERResource($user), 'message' => 'Created successfully'], 200);
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
       return response([ 'user' => new USERResource($user), 'message' => 'Retrieved successfully'], 200);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {
        $user->update($request->all());

        return response([ 'user' => new USERResource($user), 'message' => 'Retrieved successfully'], 200);
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    { 
    	$user->delete();
        return response(['message' => 'Deleted']);
    }
}
