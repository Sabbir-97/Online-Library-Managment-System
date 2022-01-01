<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ListOfBook;

class AllBooksListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function allBook(Request $request){


            $search = $request->query('search');
            if($search){
                $allBooks = ListOfBook::where('id','Like', '%'.$search.'%')
                    ->orWhere('book_title','like','%'.$search.'%')
                    ->orWhere('category','like','%'.$search.'%')->get();
                return view('admin.layouts.all_books_list',compact('allBooks'));
            }


            // object variable
            $allBooks=ListOfBook::all();
        return view ('admin.layouts.all_books_list',[

            // we will sent data into blade file
        'allBooks'=> $allBooks            
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addAllBook()
    {
        return view('admin.button.add_new_books');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function bookForm(Request $request)
    {

        $request->validate([
            
            'book_title'=>'required',
            'category'=>'required',
            'available_books'=>'required',
            'image_path'=>'required' 
        ]);
        //we concatenate(.) uniqid with the file name
        if ($request->hasfile('image_path')){
            $file = $request->file('image_path');
            $filename = uniqid('photo_',true) . '.' .$file->getClientOriginalName();
            $file->move(public_path('images/book'), $filename);
        }
        // dd($request->all());
        ListOfBook::create([
            
            'book_title'=>$request->input('book_title'),
            'category'=>$request->input('category'),
            'available_books'=>$request->input('available_books'),
            'image_path'=> $filename,
        ]);
        // return redirect('/all/book/list');
        return redirect()->route('allBook');
    }

    public function book_details($id){
        $allBook=ListOfBook::find($id);
        return view('admin.layouts.book_details',compact('allBook'));
    }

    public function book_delete($id){
        ListOfBook::find($id)->delete();
        return redirect()->back()->with('success','Book Deleted.');
        
    }

    public function edit($id){
        $allBook=ListOfBook::find($id);
        return view('admin.layouts.book_edit',compact('allBook'));
    }

    public function bookUpdate(Request $request,$id)
    {

    if ($request->hasfile('image_path')){
        $file = $request->file('image_path');
        $filename = uniqid('photo_',true) . '.' .$file->getClientOriginalName();
        $file->move(public_path('images/book'), $filename);
    }

    ListOfBook::find($id)->update([
        'book_title'=>$request->book_title,
        'category'=>$request->category,
        'available_books'=>$request->available_books,
        'image_path'=> $filename,

    ]);


    return redirect()->route('allBook')->with('Success','Book Updated Successfully.');
}

    
    
   
    

}
