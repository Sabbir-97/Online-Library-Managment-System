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
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\TransactionController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Backend\UserController as AdminUserController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\FeedbackController;
use App\Http\Controllers\Backend\UserfeedbackController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\UserprofileController;
use App\Http\Controllers\Frontend\ShowBookController;















//route for admin login

// Route::group(['prefix'=>'admin'],function (){

    Route::get('/login',[AdminUserController::class,'login'])->name('admin.login');
    Route::post('/login',[AdminUserController::class,'doLogin'])->name('admin.doLogin');

    Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function (){
        
            Route::get('/', function () {
                return view('admin.layouts.dashboard');
        })->name('dashboard.index');

    Route::get('/logout',[AdminUserController::class,'logout'])->name('admin.logout');










Route::get('/admin',[AdminController::class,'test'])->name('test');







//route for All book list

Route::get('/all/book/list',[AllBooksListController::class,'allBook'])->name('allBook');
Route::get('/add/new/books',[AllBooksListController::class,'addAllBook'])->name('addAllBook');
Route::post('/book/form', [AllBooksListController::class,'bookForm'])->name('bookForm');
Route::get('admin/book/list/details/{id}',[AllBooksListController::class,'book_details'])->name('admin.book.details');
Route::get('admin/book/list/delete/{id}',[AllBooksListController::class,'book_delete'])->name('admin.book.delete');
Route::get('admin/book/list/edit/{id}',[AllBooksListController::class,'edit'])->name('admin.book.edit');
Route::put('admin/book/update/{id}',[AllBooksListController::class,'bookUpdate'])->name('admin.book.update');
Route::get('/admin/viewbook/{id}',[AllBooksListController::class,'viewBook'])->name('viewbook');





//all waiting user

Route::get('/all/waiting/user',[AllWaitingUserController::class,'allWaitingUser'])->name('waitingUsers');
Route::get('/waiting/user/form',[AllWaitingUserController::class,'create'])->name('waiting.form');

Route::get('/user/approval/{id}',[UserController::class,'approve'])->name('user.approve');
Route::get('/user/delete/{id}',[UserController::class,'userdelete'])->name('user.delete');


//table+button

//button

//post the form






// route for dashboard

Route::get('/',[DashboardController::class,'index'])->name('dashboard.index');

// route for newspaper

Route::get('/admin/newspaper/list',[NewspaperController::class,'newspaperlist'])->name('admin.newspaper');
Route::get('/admin/newspaper/form',[NewspaperController::class,'newspaperform'])->name('newspaper.form');
Route::post('/newspaper/store',[NewspaperController::class,'store'])->name('newspaper.store');
Route::get('admin/newspaper/list/details/{id}',[NewspaperController::class,'newspaper_details'])->name('admin.newspaper.details');
Route::get('admin/newspaper/list/delete/{id}',[NewspaperController::class,'newspaper_delete'])->name('admin.newspaper.delete');
Route::get('admin/newspaper/edit/{id}',[NewspaperController::class,'edit'])->name('admin.newspaper.edit');
Route::put('admin/newspaper/update/{id}',[NewspaperController::class,'newspaperUpdate'])->name('admin.newspaper.update');
Route::get('/admin/viewnewspaper/{id}',[NewspaperController::class,'viewNewspaper'])->name('viewnewspaper');


//route for magazine
Route::get('/admin/magazine/list',[MagazineController::class,'magazinelist'])->name('admin.magazine');
Route::get('/admin/magazine/form',[MagazineController::class,'magazineform'])->name('magazine.form');
Route::post('/magazine/store',[MagazineController::class,'store'])->name('magazine.store');
Route::get('admin/magazine/list/details/{id}',[MagazineController::class,'magazine_details'])->name('admin.magazine.details');
Route::get('admin/magazine/list/delete/{id}',[MagazineController::class,'magazine_delete'])->name('admin.magazine.delete');
Route::get('admin/magazine/edit/{id}',[MagazineController::class,'edit'])->name('admin.magazine.edit');
Route::put('admin/magazine/update/{id}',[MagazineController::class,'magazineUpdate'])->name('admin.magazine.update');
Route::get('/admin/viewmagazine/{id}',[MagazineController::class,'viewMagazine'])->name('viewmagazine');



    // });
});



//Website

Route::get('/',[ShowBookController::class,'index'])->name('frontend.user');


//route for user show book
Route::get('/user/show/book',[ShowBookController::class,'showBook'])->name('user.show.book');
Route::get('user/book/list/details/{id}',[ShowBookController::class,'user_book_details'])->name('user.book.details');


//route for show user magazine
Route::get('/user/show/magazine',[ShowBookController::class,'showMagazine'])->name('user.show.magazine');
Route::get('user/magazine/list/details/{id}',[ShowBookController::class,'user_magazine_details'])->name('user.magazine.details');


//route for show user category
Route::get('/user/show/category',[ShowBookController::class,'showCategory'])->name('user.show.category');
Route::get('user/category/list/details/{id}',[ShowBookController::class,'user_category_details'])->name('user.category.details');



//route for About 
Route::get('/about_us',[AboutController::class,'about'])->name('about_us');



//route for show user newspaper
Route::get('/user/show/newspaper',[AboutController::class,'showNewspaper'])->name('user.show.newspaper');
Route::get('user/newspaper/list/details/{id}',[AboutController::class,'user_newspaper_details'])->name('user.newspaper.details');


//route for Service 
Route::get('/service',[ServiceController::class,'service'])->name('user.service');

//route for Feedback
Route::get('/user/show/feedback',[FeedbackController::class,'feedback'])->name('user.feedback');
Route::post('/user/website/feedback',[FeedbackController::class,'douserfeedback'])->name('website.user.feedback');

//route for admin feedback
Route::get('/admin/show/feedback',[UserfeedbackController::class,'userfeedback'])->name('admin.feedback');











//route for profile
Route::get('/profile details',[ProfileController::class,'profile'])->name('profile');



// Route for all_user

Route::get('/admin/all/user/list',[AllUserController::class,'userlist'])->name('admin.alluser');
Route::get('/admin/all/user/form',[AllUserController::class,'userform'])->name('all.user.form');
Route::post('/alluser/store',[AllUserController::class,'store'])->name('all.user.store');
Route::get('alluser//list/details/{id}',[AllUserController::class,'alluser_details'])->name('admin.alluser.details');
Route::get('alluser//list/delete/{id}',[AllUserController::class,'alluser_delete'])->name('admin.alluser.delete');

//route for transaction
Route::get('/admin/transaction/list',[TransactionController::class,'transaction_list'])->name('user.transaction');


//Route for manage category

Route::get('/admin/category/list',[CategoryController::class,'categorylist'])->name('admin.category');
Route::get('/admin/category/form',[CategoryController::class,'categoryform'])->name('category.form');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('admin/category/list/details/{id}',[CategoryController::class,'category_details'])->name('admin.category.details');
Route::get('admin/category/list/delete/{id}',[CategoryController::class,'category_delete'])->name('admin.category.delete');
Route::get('admin/category/edit/{id}',[CategoryController::class,'edit'])->name('admin.category.edit');
Route::put('admin/category/update/{id}',[CategoryController::class,'categoryUpdate'])->name('admin.category.update');



//route for registration/login
Route::get('/user/registration',[LoginController::class,'registration'])->name('user.registration');
Route::post('/user/do/registration',[LoginController::class,'doRegistration'])->name('user.do.registration');
Route::get('/user/login',[LoginController::class,'login'])->name('user.login');
Route::post('/user/do/login',[LoginController::class,'doLogin'])->name('user.do.login');
Route::get('/user/logout',[LoginController::class,'logout'])->name('user.logout');


//route for userprofile

Route::get('user/profile',[UserprofileController::class,'userprofile'])->name('user.profile');
Route::put('/profile/update/{id}',[UserprofileController::class,'profileupdate'])->name('profile.update');


