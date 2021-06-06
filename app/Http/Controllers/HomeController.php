<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function UpdateProfile(Request $request)
    {
        $Data = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'hobbies' => 'required',
            'country' => 'required',
        ]);
        $user= Auth::user();
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->dob = $request->dob;
        $user->hobbies = $request->hobbies;
        $user->country = $request->country;
        $user->save();
        toastr()->success('profile update successfully');
        return redirect()->route('home');

    }

}
