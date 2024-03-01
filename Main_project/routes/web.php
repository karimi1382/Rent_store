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



Route::get('/template/{id}', [App\Http\Controllers\ProjectController::class, 'index'])->name('template');
Route::get('/insertdata/{id}', [App\Http\Controllers\HomeController::class, 'check_data'])->name('insertdata')->middleware('auth');;
Route::get('/cartshow', [App\Http\Controllers\HomeController::class, 'cart_show'])->name('cartshow')->middleware('auth');;


// Route::get('/template/{{$id}}' ,function(){
//     dd(1);
//     return view('Template');
// })->name('template');

Route::get('/userpanel' ,function(){
    return view('user.userpanel');
})->name('userpanel');

// Route::get('/insertdata' ,function(){
//     return view('user.insertdata');
// })->name('insertdata')->middleware('auth');

Route::get('/sample',function(){
    $books=App\Models\project_type::with('projects')->get();
    foreach($books as $book){
       
        foreach( $book->projects as $project){
            echo $book->name.' '.$project->title .'</br>';
        }
    
        
    }
});



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
