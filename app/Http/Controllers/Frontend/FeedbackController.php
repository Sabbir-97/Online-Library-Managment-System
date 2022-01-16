<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Feedback;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function feedback(){
        $feedback=Feedback::all();
        return view('user.pages.user_feedback',compact('feedback'));
    }

    public function douserfeedback(Request $request){
        Feedback::create([
            'user_name'=>$request->user_name,
            'user_email'=>$request->user_email,
            'user_phone_no'=>$request->user_phone_no,
            'user_feedback'=>$request->user_feedback,
        ]);

        return redirect()->back()->with('Message','Thank you for your feedback');

    }


    

    

    
}
