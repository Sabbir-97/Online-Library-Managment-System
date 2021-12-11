<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Magazine;
use Illuminate\Http\Request;

class MagazineController extends Controller
{
    public function magazinelist(){
        $magaZines=Magazine::all();
        return view('admin.layouts.magazine_list',[
            'magaZines'=> $magaZines
        ]);
    }
    public function magazineform(){
        return view('admin.layouts.magazine_form');
    }
    public function store(Request $request){
   
        $request->validate([
            'magazine_id'=>'required',
            'magazine_name'=>'required',
            'category'=>'required', 
            'available_magazine'=>'required',


        ]);


        if ($request->hasfile('image_path')){
            $file = $request->file('image_path');
            $filename = uniqid('photo_',true) . '.' .$file->getClientOriginalName();
            $file->move(public_path('images/magazine'), $filename);
        }





    magazine::create([
        'magazine_id'=>$request->magazine_id,
        'magazine_name'=>$request->magazine_name,
        'category'=>$request->category,
        'available_magazine'=>$request->available_magazine,
        'image_path'=> $filename,
        
    ]);
    return redirect('/admin/magazine/list');
}
}
