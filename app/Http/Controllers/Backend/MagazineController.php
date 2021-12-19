<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Magazine;
use Illuminate\Http\Request;

class MagazineController extends Controller
{
    public function magazinelist(){
        $magazines=Magazine::all();
        return view('admin.layouts.magazine_list',[
            'magazines'=> $magazines
        ]);
    }
    public function magazineform(){
        return view('admin.layouts.magazine_form');
    }
    public function store(Request $request){
   
        $request->validate([
            
            'magazine_name'=>'required',
            'category'=>'required', 
            'available_magazine'=>'required',
            'img'=>'required',


        ]);

        $magazines='';
        if($request->hasfile('img')){
            $magazine = $request->file('img');
            $magazines=date('Ymdhms').'.'. $magazine->getClientOriginalExtension();
            $magazine->storeAs('/uploads/magazines',$magazines);
            
        }





    magazine::create([
        
        'magazine_name'=>$request->magazine_name,
        'category'=>$request->category,
        'available_magazine'=>$request->available_magazine,
        'img'=> $magazines,
        
    ]);
    // return redirect('/admin/magazine/list');
    return redirect()->route('admin.magazine');
    
}
}
