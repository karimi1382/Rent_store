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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/template' ,function(){
    return view('Template');
})->name('template');

Route::get('/userpanel' ,function(){
    return view('user.userpanel');
})->name('userpanel');

Route::get('/insertdata' ,function(){
    return view('user.insertdata');
})->name('insertdata')->middleware('auth');



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
