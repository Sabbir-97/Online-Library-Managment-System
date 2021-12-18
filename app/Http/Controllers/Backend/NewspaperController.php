<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Newspaper;
use Illuminate\Http\Request;

class NewspaperController extends Controller
{
    public function newspaperlist(){
        $newspapers=Newspaper::all();
        return view('admin.layouts.newspaper_list',[
            'newspapers'=> $newspapers
        ]);
    }

    public function newspaperform(){
        return view('admin.layouts.newspaper_form');
    }

    public function store(Request $request){
        $request->validate([
            
            'newspaper_name'=>'required',
            'category'=>'required', 
            'available_newspaper'=>'required',
            'img_news'=>'required',


        ]);


        $newspapers='';
        if($request->hasfile('img_news')){
            $newspaper = $request->file('img_news');
            $newspapers=date('Ymdhms').'.'. $newspaper->getClientOriginalExtension();
            $newspaper->storeAs('/uploads/newspapers',$newspapers);
            
        }
        newspaper::create([
            
            'newspaper_name'=>$request->newspaper_name,
            'category'=>$request->category,
            'available_newspaper'=>$request->available_newspaper,
            'img_news'=>$newspapers,
        ]);
        return redirect('/admin/newspaper/list');
    }


    public function newspaper_details($id){
        $newspapers=Newspaper::find($id);
        return view('admin.layouts.newspaper_details',compact('newspapers'));
    }

    public function newspaper_delete($id){
        Newspaper::find($id)->delete();
        return redirect()->back()->with('success','Newspaper Deleted.');
    }

    public function edit($id){
        // dd('$id');
        $newspaper=Newspaper::find($id);
        return view('admin.layouts.newspaper_edit',compact('newspaper'));
    }
        
    
}
