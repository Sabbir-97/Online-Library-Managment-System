<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    public function login()
    {

       return view('admin.layouts.login');

    }

    public function doLogin(Request $request)
    {
      // dd($request->all());

        $userInfo=$request->except('_token');
//        $credentials['email']=$request->user_email;
//        $credentials['password']=$request->user_password;
//        dd($credentials);
//        $credentials=$request->only('user_email','user_password');


        if(Auth::attempt($userInfo)){
            return redirect()->route('test')->with('message','Login successful.');
        }
        return redirect()->back()->withErrors('Invalid user/wrong password');

    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('message','Logging out.');
    }

    public function userdelete($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('success','user Removed');

    }
    public function approve($id)
    {
        $data=User::find($id);
        $data->active='1';
        $data->save();
        return redirect()->back()->with('success','User Removed');
    }
}