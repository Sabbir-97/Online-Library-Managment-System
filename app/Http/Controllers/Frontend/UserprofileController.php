<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserprofileController extends Controller
{
    public function userprofile(){
        return view('user.pages.user_profile');
    }
}
