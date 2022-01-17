<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\models\ListOfBook;
use App\models\Magazine;

class ShowBookController extends Controller
{
    public function index(){
        $allBooks=ListOfBook::all();
        return view('user.partials.nav',compact('allBooks'));
    }


    public function showBook(){

        $allBooks=ListOfBook::all();
                // dd($allBooks);
        return view('user.pages.show_book',compact('allBooks'));
    }

    public function user_book_details($id){
        $allBook=ListOfBook::find($id);
        return view('user.pages.user_book_details',compact('allBook'));
    }



    public function showMagazine(){

        $magazines=Magazine::all();
        return view('user.pages.show_magazine',compact('magazines'));
    }
    public function user_magazine_details($id){
        $magazine=Magazine::find($id);
        return view('user.pages.magazine_details',compact('magazine'));
    }






    public function showCategory(){

        $categories=Category::all();
        return view('user.pages.show_category',compact('categories'));
    }

    public function user_category_details($id){
        $category=Category::find($id);
        return view('user.pages.category_details',compact('category'));
    }

    
}
