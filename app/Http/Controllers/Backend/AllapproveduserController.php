<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ApproveUser;
use Illuminate\Http\Request;

class AllapproveduserController extends Controller
{
    public function allapprovedlist(){
        $approveUsers=Approveuser::all();
        return view('admin.layouts.alluser_list',[
            'approveUsers'=> $approveUsers
        ]);
    }
    public function allapprovedform(){
        return view('admin.layouts.all_user_form');
    }
    public function store(Request $request){
        
        approveuser::create([
            'user_id'=>$request->user_id,
            'fast_name'=>$request->fast_name,
            'last_name'=>$request->last_name,
            'email_adress'=>$request->email_adress,
            'password'=>$request->password,
            'gender'=>$request->gender,
            'religion'=>$request->religion,
            'image'=>$filename,
        ]);
        return redirect('/admin/alluser/list');
}
}
