<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Alluser;
use Illuminate\Http\Request;

class AllUserController extends Controller
{
    public function userlist(){
        return view('admin.layouts.all_user_list');

    }

    public function userform(){
        return view('admin.layouts.all_user_form');
    }

    public function store(Request $request){
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

        
    ]);
    return redirect('/admin/all/user/list');
}
}
