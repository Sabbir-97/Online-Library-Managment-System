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
        
        'category_title'=>'required', 
        'discription'=>'required',
        'available'=>'required',
        'image'=>'required'

        ]);

            $categories='';
            if($request->hasfile('image')){
                $category = $request->file('image');
                $categories=date('Ymdhms').'.'. $category->getClientOriginalExtension();
                $category->storeAs('/uploads/categories',$categories);
                
            }

    category::create([
        
        'category_title'=>$request->category_title,
        'discription'=>$request->discription,
        'available'=>$request->available,
        'image'=> $categories,
    ]);
    return redirect('/admin/category/list');
}
public function category_details($category_id){
    $categories=Category::find($category_id);
    return view('admin.layouts.category_details',compact('categories'));
}

public function category_delete($id){
    Category::find($id)->delete();
    return redirect()->back()->with('success','Category Deleted.');
}


}
