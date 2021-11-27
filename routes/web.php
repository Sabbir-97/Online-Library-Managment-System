<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AllBooksListController;
use App\Http\Controllers\Backend\AllWaitingUserController;
use App\Http\Controllers\Backend\AllapproveduserController;
use App\Http\Controllers\Backend\DashboardController;



Route::get('/admin',[AdminController::class,'test']);



//route for All book list

Route::get('/all/book/list',[AllBooksListController::class,'allBook'])->name('allBook');
Route::get('/add/new/books',[AllBooksListController::class,'addAllBook'])->name('addAllBook');
Route::post('/book/form', [AllBooksListController::class,'bookForm'])->name('bookForm');


//all waiting user

Route::get('/all/waiting/user',[AllWaitingUserController::class,'allWaitingUser'])->name('waitingUsers');
Route::get('/waiting/user/form',[AllWaitingUserController::class,'create'])->name('waiting.form');

//table+button

//button

//post the form

// all approved user
Route::get('/admin/alluser',[AllapproveduserController::class,'allapprovedlist'])->name('admin.alluser');
Route::get('/admin/alluser/form',[AllapproveduserController::class,'allapprovedform'])->name('alluserapproved.form');






// route for dashboard

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard.index');