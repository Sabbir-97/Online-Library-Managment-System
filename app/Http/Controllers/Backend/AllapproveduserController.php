<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllapproveduserController extends Controller
{
    public function allapprovedlist(){
        return view('admin.layouts.alluser_list');
    }
    public function allapprovedform(){
        return view('admin.layouts.all_user_form');
    }
}
