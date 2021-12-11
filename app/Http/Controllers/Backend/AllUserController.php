<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Alluser;
use Illuminate\Http\Request;

class AllUserController extends Controller
{
    public function userlist(){
        $allUsers=Alluser::all();
        return view('admin.layouts.all_user_list',[
        'allUsers'=>$allUsers
        ]);

    }

    public function userform(){
        return view('admin.layouts.all_user_form');
    }

    public function store(Request $request){
        $request->validate([
            'user_name'=>'required',
            'first_name'=>'required',
            'last_name'=>'required', 
            'password'=>'required',
            'contact_no'=>'required',
            'email_address'=>'required',
            'date_of_birth'=>'required',
            'gender'=>'required',
            'religion'=>'required',
            'payment_method'=>'required',
            'transaction_id'=>'required',
            'image_path'=>'required'


        ]);

        if ($request->hasfile('image_path')){
            $file = $request->file('image_path');
            $filename = uniqid('photo_',true) . '.' .$file->getClientOriginalName();
            $file->move(public_path('images/alluser'), $filename);
        }


    alluser::create([
        'user_name'=>$request->user_name,
        'first_name'=>$request->first_name,
        'last_name'=>$request->last_name,
        'password'=>$request->password,
        'contact_no'=>$request->contact_no,
        'email_address'=>$request->email_address,
        'date_of_birth'=>$request->date_of_birth,
        'gender'=>$request->gender,
        'religion'=>$request->religion,
        'payment_method'=>$request->payment_method,
        'transaction_id'=>$request->transaction_id,
        'image_path'=> $filename,

        
    ]);
    return redirect('/admin/all/user/list');
}
}
