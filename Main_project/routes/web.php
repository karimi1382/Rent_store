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
Route::get('/notification' , [App\Http\Controllers\NotiSendController::class,'index'])->name('notifications')->middleware('auth');;
Route::get('/notification/{id}', [App\Http\Controllers\NotiSendController::class, 'update'])->name('insertdata_update')->middleware('auth');
Route::get('/newticket' , [App\Http\Controllers\MainTicketController::class,'index'])->name('newticket')->middleware('auth');;
Route::post('/addticket', [App\Http\Controllers\MainTicketController::class, 'insert'])->name('addticket_insert')->middleware('auth');
Route::get('/allticket', [App\Http\Controllers\MainTicketController::class, 'allticket'])->name('allticket')->middleware('auth');
Route::get('/ticketdetail/{id}', [App\Http\Controllers\MainTicketController::class, 'ticketdetail'])->name('ticketdetail')->middleware('auth');
Route::post('/addanswerticket', [App\Http\Controllers\MainTicketController::class, 'addanswerticket'])->name('addanswerticket')->middleware('auth');
Route::post('/close_ticket', [App\Http\Controllers\MainTicketController::class, 'close_ticket'])->name('close_ticket')->middleware('auth');









Route::get('/adminpeyment' , [App\Http\Controllers\HomeController::class,'adminpeyment_index'])->name('adminpeyment')->middleware('auth');;
Route::get('/websetting/{id}' , [App\Http\Controllers\HomeController::class,'websetting_index'])->name('websetting')->middleware('auth');
Route::post('/websetting_update' , [App\Http\Controllers\HomeController::class,'websetting_update'])->name('websetting_update')->middleware('auth');;

Route::get('/webadmin' , [App\Http\Controllers\HomeController::class,'webadmin'])->name('webadmin')->middleware('auth');;
Route::get('/allusers' , [App\Http\Controllers\HomeController::class,'allusers'])->name('allusers')->middleware('auth');;
Route::post('/accept_peyment' , [App\Http\Controllers\HomeController::class,'accept_peyment'])->name('accept_peyment')->middleware('auth');;
Route::get('/adminallticket', [App\Http\Controllers\MainTicketController::class, 'adminallticket'])->name('adminallticket')->middleware('auth');
Route::get('/adminticketdetail/{id}', [App\Http\Controllers\MainTicketController::class, 'adminticketdetail'])->name('adminticketdetail')->middleware('auth');






Route::resource('/order', App\Http\Controllers\OrderController::class)->middleware('auth');








