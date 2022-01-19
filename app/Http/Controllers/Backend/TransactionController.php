<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function transaction_list(Request $request){
        $search = $request->query('search');
        if($search){
            $transaction = User::where('id','Like', '%'.$search.'%')
                ->orWhere('user_name','like','%'.$search.'%')
                ->orWhere('email_address','like','%'.$search.'%')
                ->orWhere('transaction_id','like','%'.$search.'%')->get();
            return view('admin.layouts.transaction_list',compact('transaction'));
        }

        $transaction=User::all();
        return view('admin.layouts.transaction_list',[
        'transaction'=> $transaction
    ]);
}
}