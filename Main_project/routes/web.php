<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('index'); });

Auth::routes();

Route::get('/template/{id}', [App\Http\Controllers\ProjectController::class, 'index'])->name('template');
Route::get('/insertdata/{id}', [App\Http\Controllers\HomeController::class, 'check_data'])->name('insertdata')->middleware('auth');
Route::get('/cartshow', [App\Http\Controllers\HomeController::class, 'cart_show'])->name('cartshow')->middleware('auth');
Route::get('/myservice', [App\Http\Controllers\HomeController::class, 'myservice'])->name('myservice')->middleware('auth');
Route::resource('/peyment', App\Http\Controllers\PaymentController::class)->middleware('auth');
Route::get('/userpanel' , [App\Http\Controllers\HomeController::class, 'userpanel'])->name('userpanel')->middleware('auth');
Route::get('/user_detile' , [App\Http\Controllers\UserDetileController::class,'index'])->name('user_detile')->middleware('auth');
Route::post('/user_update' , [App\Http\Controllers\UserDetileController::class,'update'])->middleware('auth');
Route::post('/user_newpass' , [App\Http\Controllers\UserDetileController::class,'user_newpass'])->middleware('auth');;

Route::get('/adminpeyment' , [App\Http\Controllers\HomeController::class,'adminpeyment_index'])->name('adminpeyment')->middleware('auth');;
Route::get('/websetting' , [App\Http\Controllers\HomeController::class,'websetting_index'])->name('websetting')->middleware('auth');;
Route::get('/webadmin' , [App\Http\Controllers\HomeController::class,'webadmin'])->name('webadmin')->middleware('auth');;
Route::get('/allusers' , [App\Http\Controllers\HomeController::class,'allusers'])->name('allusers')->middleware('auth');;


Route::resource('/order', App\Http\Controllers\OrderController::class)->middleware('auth');








