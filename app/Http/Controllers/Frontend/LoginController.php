<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
   
        public function registration(){
            $users=User::all();
            return view('user.partials.registration',[
                'users'=>$users
            ]);
        }
    
        public function doRegistration(Request $request){
            
            $users='';
            if($request->hasfile('user_image')){
                $user = $request->file('user_image');
                $users=date('Ymdhms').'.'. $user->getClientOriginalExtension();
                $user->storeAs('/uploads/users',$users);
                
            }




            User::create([
                'user_name'=>$request->user_name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'password'=>bcrypt( $request->password),
                'contact_no'=>$request->contact_no,
                'email_address'=>$request->email_address,
                'dob'=>$request->dob,
                'user_image'=> $users,
                'gender'=>$request->gender,
                'religion'=>$request->religion,
                'payment_method'=>$request->payment_method,
                'transaction_id'=>$request->transaction_id,
                
            ]);
            return redirect()->route('user.login');
            
        }
    
        public function login(){
            return view('user.partials.login');
        }
    
        public function doLogin(Request $request){
            
            $userpost=$request->except('_token');
                
            
          
            return redirect()->route('user.login');
        }
    
        
    }