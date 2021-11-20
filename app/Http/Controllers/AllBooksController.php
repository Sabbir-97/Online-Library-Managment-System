<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllBooksController extends Controller
{
    public function allbooks(){
        return view(admin.layouts.allbooks);
    }
}
