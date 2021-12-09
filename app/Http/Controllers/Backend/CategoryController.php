<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categorylist(){
        return view('admin.layouts.category_list');
    }

    public function categoryform(){
        return view('admin.layouts.category_form');
    }
}
