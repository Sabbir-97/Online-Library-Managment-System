<?php

namespace App\Http\Controllers\Backend;
use App\Models\Feedback;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserfeedbackController extends Controller
{
    public function userfeedback(){
        $feedback=Feedback::all();
        return view('admin.layouts.feedback_list',compact('feedback'));
    }
}
