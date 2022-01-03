<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ListOfBook;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function feedback(){
        return view('user.pages.user_feedback');
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
}
