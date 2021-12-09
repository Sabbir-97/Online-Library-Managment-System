<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AllBooksListController;
use App\Http\Controllers\Backend\AllWaitingUserController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\NewspaperController;
use App\Http\Controllers\Backend\MagazineController;
use App\Http\Controllers\Backend\AllUserController;
use App\Http\Controllers\Backend\CategoryController;




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






// route for dashboard

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard.index');

// route for newspaper

Route::get('/admin/newspaper/list',[NewspaperController::class,'newspaperlist'])->name('admin.newspaper');
Route::get('/admin/newspaper/form',[NewspaperController::class,'newspaperform'])->name('newspaper.form');
Route::post('/newspaper/store',[NewspaperController::class,'store'])->name('newspaper.store');

//route for magazine
Route::get('/admin/magazine/list',[MagazineController::class,'magazinelist'])->name('admin.magazine');
Route::get('/admin/magazine/form',[MagazineController::class,'magazineform'])->name('magazine.form');
Route::post('/magazine/store',[MagazineController::class,'store'])->name('magazine.store');








//Website

Route::get('/user', function(){
    return view('user.index');
});



// Route for all_user

Route::get('/admin/all/user/list',[AllUserController::class,'userlist'])->name('admin.alluser');
Route::get('/admin/all/user/form',[AllUserController::class,'userform'])->name('all.user.form');
Route::post('/alluser/store',[AllUserController::class,'store'])->name('all.user.store');


//Route for manage category

Route::get('/admin/category/list',[CategoryController::class,'categorylist'])->name('admin.category');
Route::get('/admin/category/form',[CategoryController::class,'categoryform'])->name('category.form');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');

