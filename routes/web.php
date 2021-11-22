<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AllBooksListController;
use App\Http\Controllers\Backend\AllWaitingUserController;



Route::get('/admin',[AdminController::class,'test']);



//route for All book list

Route::get('/all/book/list',[AllBooksListController::class,'allBook'])->name('allBook');
Route::get('/add/new/books',[AllBooksListController::class,'addAllBook'])->name('addAllBook');
Route::post('/book/form', [AllBooksListController::class,'bookForm'])->name('bookForm');


//new route
Route::get('/all/waiting/user',[AllWaitingUserController::class,'allWaitingUser'])->name('waitingUsers');

//table+button

//button

//post the form







//new