<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserprofileController extends Controller
{
    public function userprofile(){
        // dd(auth()->user());
        return view('user.pages.user_profile');

    }

    public function profileupdate(Request $request,$id)
    {
        $user=User::find($id);
        $user->update([
            'user_name'=>$request->user_name,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'contact_no'=>$request->contact_no,
            'email_address'=>$request->email_address

        ]);
        return redirect()->route('user.profile')->with('success', 'Profile Updated Successfully');
    }
}
