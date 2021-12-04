<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApproveduserController extends Controller
{
    public function approveduserlist(){
        return view('admin.layouts.approveduser_list');
    }
    public function approvedform(){
        return view('admin.layouts.approveduser_form');
    }
}
