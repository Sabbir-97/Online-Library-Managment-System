<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\ListOfBook;

class ShowBookController extends Controller
{
    public function index(){
        $allBooks=ListOfBook::all();
        return view('user.partials.nav',compact('allBooks'));
    }
}
