<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Newspaper;
use Illuminate\Http\Request;

class NewspaperController extends Controller
{
    public function newspaperlist(){
        $newsPapers=Newspaper::all();
        return view('admin.layouts.newspaper_list',[
            'newsPapers'=> $newsPapers
        ]);
    }

    public function newspaperform(){
        return view('admin.layouts.newspaper_form');
    }

    public function store(Request $request){
        $request->validate([
            'newspaper_id'=>'required',
            'newspaper_name'=>'required',
            'category'=>'required', 
            'available_newspaper'=>'required',
            'image_path'=>'required',


        ]);


        if($request->hasfile('image_path')){
            $file = $request->file('image_path');
            $filename = uniqid('photo_',true) . '.' .$file->getClientOriginalName();
            $file->move(public_path('images/newspaper'), $filename);
           
           
        }
        newspaper::create([
            'newspaper_id'=>$request->newspaper_id,
            'newspaper_name'=>$request->newspaper_name,
            'category'=>$request->category,
            'available_newspaper'=>$request->available_newspaper,
            'image_path'=>$filename,
        ]);
        return redirect('/admin/newspaper/list');
    }
        
    
}
