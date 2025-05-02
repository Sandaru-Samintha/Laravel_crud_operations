<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Userdata;
use Illuminate\Http\Request;

class studentAuthentication extends Controller
{
    protected $user;

    public function __construct(){
        $this->user = new Userdata;
    }
    public function signin(){

        return view('components.signin');
    }
    public function usercreate(){
        return view ('components.usercreate');
    }

    public function userstore(Request $request){
        $this->user->create($request->all());
        return redirect()->route('signin');
    }

    public function userfind(Request $request)
    {
        $username = $request->username; //in the request get all the input so we ned to separate one by one using this we can get user name bellow one can get password
        $password = $request->password;

        // Find the user by username (NOT using find(), use where())
        $user = $this->user->where('username', $username)->first();

        if ($user) {
            // If user found, now check the password
            if ($password == $user->password) {
                return redirect()->route('index')->with('message', 'Successfully logged in');
            } else {
                return redirect()->back()->with('error', 'Wrong password');
            }
        } else {
            return redirect()->back()->with('error', 'Username not found');
        }
    }
}
