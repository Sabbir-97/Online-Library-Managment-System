<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categorylist(){
        $cateGories=Category::all();
        return view('admin.layouts.category_list',[
        'cateGories'=>$cateGories
        ]);
    }

    public function categoryform(){
        return view('admin.layouts.category_form');
    }

    public function store(Request $request){
        $request->validate([
        'category_id'=>'required',
        'category_title'=>'required', 
        'discription'=>'required',
        'available'=>'required',

        ]);

    category::create([
        'category_id'=>$request->category_id,
        'category_title'=>$request->category_title,
        'discription'=>$request->discription,
        'available'=>$request->available,
    ]);
    return redirect('/admin/category/list');
}
}
