<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class waitinguserController extends Controller
{
    public function waitinguser()
    {
        return view('admin.layouts.waitinguser');
    }
}
