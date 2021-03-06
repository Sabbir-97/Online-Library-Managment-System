<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Newspaper;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return view('user.pages.about');
    }

    public function showNewspaper(Request $request){

        $search = $request->query('search');
        if($search){
            $newspapers = Newspaper::where('id','Like', '%'.$search.'%')
                ->orWhere('newspaper_name','like','%'.$search.'%')
                ->orWhere('category','like','%'.$search.'%')->get();
            return view('user.pages.show_newspaper',compact('newspapers'));
        }

        $newspapers=Newspaper::all();
                // dd($allBooks);
        return view('user.pages.show_newspaper',compact('newspapers'));
    }

    public function user_newspaper_details($id){
        $newspaper=Newspaper::find($id);
        return view('user.pages.newspaper_details',compact('newspaper'));
    }

    
}
