<?php

namespace App\Http\Controllers\Backend;
use App\Models\WaitingUsers;
use App\Models\User;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;

// use App\Models\WaitingUser;

class AllWaitingUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allWaitingUser()
    {
        $list=WaitingUsers::all();
        return view('admin.layouts.all_waiting_user',compact('list'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.layouts.waiting_user_form');
        
    }

    

    
    

}
