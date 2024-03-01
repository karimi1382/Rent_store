<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;
use App\Models\packege;
use App\Models\fild;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function check_data($id)
    {
        $template=project::where('id',$id)->first();
        $packeges=packege::all();
        $filds=fild::all();
        return view('user.insertdata',compact('template','packeges','filds'));
    }
    public function cart_show(){
        return view('user.cart');
    }
}
