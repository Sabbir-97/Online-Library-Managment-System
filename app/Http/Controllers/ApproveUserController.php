<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApproveUserController extends Controller
{
    public function approveuser(){
        return view ('admin.layout.approveuser');
    }
}
