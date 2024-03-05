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
Route::get('/insertdata/{id}', [App\Http\Controllers\HomeController::class, 'check_data'])->name('insertdata')->middleware('auth');;
Route::get('/cartshow', [App\Http\Controllers\HomeController::class, 'cart_show'])->name('cartshow')->middleware('auth');
Route::get('/myservice', [App\Http\Controllers\HomeController::class, 'myservice'])->name('myservice')->middleware('auth');
Route::resource('/peyment', App\Http\Controllers\PaymentController::class)->middleware('auth');
Route::get('/userprofile', [App\Http\Controllers\HomeController::class, 'userprofile'])->name('userprofile')->middleware('auth');


Route::resource('/order', App\Http\Controllers\OrderController::class)->middleware('auth');



Route::get('/userpanel' ,function(){ return view('user.userpanel'); })->name('userpanel');





