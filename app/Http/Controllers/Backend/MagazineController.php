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
    magazine::create([
        'magazine_id'=>$request->magazine_id,
        'magazine_name'=>$request->magazine_name,
        'category'=>$request->category,
        'available_magazine'=>$request->available_magazine,
        
    ]);
    return redirect('/admin/magazine/list');
}
}
