<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   
        public function registration(){
            $users=User::all();
            return view('user.partials.registration',[
                'users'=>$users
            ]);
        }
    
        public function doRegistration(Request $request){
            // dd($request->all());
            $filename='';
            if($request->hasfile('image')){
                $file = $request->file('image');
                // dd($user);
                $filename=date('Ymdhms').'.'. $file->getClientOriginalExtension();
                // dd($filename);
                $file->storeAs('/uploads/users',$filename);
                
            }


            // dd($request->all());

            User::create([
                'user_name'=>$request->name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'password'=>bcrypt( $request->password),
                'contact_no'=>$request->contact,
                'email_address'=>$request->email_address,
                'date_of_birth'=>$request->date_of_birth,
                'image'=>$filename,
                'gender'=>$request->gender,
                'religion'=>$request->religion,
                'payment_method'=>$request->Payment_Method,
                'transaction_id'=>$request->transaction,
                
            ]);
            return redirect()->route('user.login');
            
        }
    
        public function login(){
            return view('user.partials.login');
        }
    
        public function doLogin(Request $request){
          
            $userpost=$request->except('_token');
           // dd($userpost);
            //dd(auth::attempt($userpost));
            if (auth::attempt($userpost)) {
                return redirect()->route('frontend.user');
            }
            else
            return redirect()->route('user.login');
        }

        public function logout(){
            Auth::logout();
            return redirect()->route('frontend.user');
        }
    
        
    }