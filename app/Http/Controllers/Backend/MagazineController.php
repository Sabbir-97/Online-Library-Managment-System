<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Magazine;
use Illuminate\Http\Request;

class MagazineController extends Controller
{
    public function magazinelist(Request $request){


        $search = $request->query('search');
        if($search){
            $magazines = Magazine::where('id','Like', '%'.$search.'%')
                ->orWhere('magazine_name','like','%'.$search.'%')
                ->orWhere('category','like','%'.$search.'%')->get();
            return view('admin.layouts.magazine_list',compact('magazines'));
        }

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

public function magazine_details($id){
    $magazine=Magazine::find($id);
    return view('admin.layouts.magazine_details',compact('magazine'));
}

public function magazine_delete($id){
    Magazine::find($id)->delete();
    return redirect()->back()->with('success','Magazine Deleted.');
    
}
public function edit($id){
    $magazine=Magazine::find($id);
    return view('admin.layouts.magazine_edit',compact('magazine'));
}
public function magazineUpdate(Request $request,$id)
{
    if($request->hasfile('img')){
        $magazine = $request->file('img');
        $magazines=date('Ymdhms').'.'. $magazine->getClientOriginalExtension();
        $magazine->storeAs('/uploads/magazines',$magazines);
        
    }

    Magazine::find($id)->update([
        'magazine_name'=>$request->magazine_name,
        'category'=>$request->category,
        'available_magazine'=>$request->available_magazine,
        'img'=> $magazines,

    ]);


    return redirect()->route('admin.magazine')->with('Success','Magazine Updated Successfully.');


}
}
