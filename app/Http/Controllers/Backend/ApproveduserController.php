<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ApprovedUser;
use Illuminate\Http\Request;
class ApproveduserController extends Controller
{
    public function approveduserlist(){
        return view('admin.layouts.approveduser_list');
    }
    public function approvedform(){
        return view('admin.layouts.approveduser_form');
    }
     
    
    public function store(Request $request){

dd($request->all());

    ApprovedUser::create([
        'user_id'=>$request->user_id,
        'first_name'=>$request->first_name,
        'last_name'=>$request->last_name,
        'email_address'=>$request->email_address,
        'password'=>$request->password,
        'dob'=>$request->dob,
        'gender'=>$request->gender,
        'religion'=>$request->religion,
        'payment_method'=>$request->payment_method,
        'transaction_id'=>$request->transaction_id,

     ]);
  
}
}
