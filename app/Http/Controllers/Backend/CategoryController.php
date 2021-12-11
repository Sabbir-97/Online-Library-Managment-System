<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categorylist(){
        $categories=Category::all();
        return view('admin.layouts.category_list',[
        'categories'=>$categories
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
        'image'=>'required'

        ]);

            $categories='';
            // dd($categories);
            if($request->hasfile('image')){
                $category = $request->file('image');
                $categories=date('Ymdhms').'.'. $category->getClientOriginalExtension();
                $category->storeAs('/uploads/categories',$categories);
                
            }


        // if ($request->hasfile('image')){
        //     $category = $request->file('image');
        //     $categories = uniqid('photo_',true) . '.' .$category->getClientOriginalName();
        //     $category->move(public_path('images/category'), $categories);
        // }

    category::create([
        'category_id'=>$request->category_id,
        'category_title'=>$request->category_title,
        'discription'=>$request->discription,
        'available'=>$request->available,
        'image'=> $categories,
    ]);
    return redirect('/admin/category/list');
}
}
