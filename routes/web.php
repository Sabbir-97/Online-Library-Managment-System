<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AllbooksController;
use App\Http\Controllers\Backend\WaitinguserController;
use App\Http\Controllers\Backend\ApproveUserController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/admin',[AdminController::class,'test']);
Route::get('/admin/allbooks',[AllbooksController::class,'Allbooks'])->name('admin.booklist');
Route::get('/waitinguser',[WaitinguserController::class,'waitinguser'])->name('waitinguser');
Route::get('/approveuser',[ApproveUserController::class,'approveuser'])->name('approveuser');
