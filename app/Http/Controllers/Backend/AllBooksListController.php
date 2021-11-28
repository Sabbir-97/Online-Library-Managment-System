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
        public function allBook(){

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
            'book_id'=>'required',
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
            'book_id'=>$request->input('book_id'),
            'book_title'=>$request->input('book_title'),
            'category'=>$request->input('category'),
            'available_books'=>$request->input('available_books'),
            'image_path'=> $filename,
        ]);
        return redirect('/all/book/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
