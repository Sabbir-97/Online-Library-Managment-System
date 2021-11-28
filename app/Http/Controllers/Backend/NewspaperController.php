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
        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = (date('Ymdhms')). '.' .$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }
        newspaper::create([
            'newspaper_code'=>$request->newspaper_code,
            'newspaper_name'=>$request->newspaper_name,
            'category'=>$request->category,
            'available_newspaper'=>$request->available_newspaper,
            'image'=>$filename,
        ]);
        return redirect('/admin/newspaper/list');
    }
        
    
}
