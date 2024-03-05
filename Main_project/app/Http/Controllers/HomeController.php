<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;
use App\Models\packege;
use App\Models\fild;
use App\Models\project_type;
use Carbon\Carbon;        

use App\Models\order;



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
        // $projects=project::with('orders')->get();
        // foreach($projects as $project){
        //     foreach($project->orders as $order){
        //         echo $order->name;
        //     }
        // }
        $orders=order::join('projects','orders.project_id','projects.id')
                        ->join('packeges','orders.packege_id','packeges.id')
                        ->join('filds','orders.fild_id','filds.id')
                        ->join('project_types','projects.project_type_id','project_types.id')
                        ->LeftJoin('payments','payments.order_id','orders.id')
                        ->select('orders.status','packeges.id as packege_id','project_types.name as project_type_name','orders.admin as order_admin','payments.detile as payment_code','payments.type as peyment_type','orders.id as order_id','projects.title as project_title','packeges.name as packege_name','packeges.price as packege_price','packeges.detile as packege_detile','filds.name as fild_name','orders.name as order_name','orders.color_1 as order_color_1','orders.color_2 as order_color_2','orders.color_3 as order_color_3','orders.url as order_url','orders.admin as order_admin','orders.takephoto as order_takephoto','orders.end_time as order_end_time')
                        ->where('orders.user_id',auth()->user()->id)
                        ->get();
        return view('user.cart',compact('orders'));
    }
    public function myservice(){
        $orders=order::join('projects','orders.project_id','projects.id')
                        ->join('packeges','orders.packege_id','packeges.id')
                        ->join('filds','orders.fild_id','filds.id')
                        ->join('project_types','projects.project_type_id','project_types.id')
                        ->LeftJoin('payments','payments.order_id','orders.id')
                        ->select('payments.updated_at as payment_updated_at','orders.created_at','packeges.id as packege_id','project_types.name as project_type_name','orders.admin as order_admin','payments.detile as payment_code','payments.type as peyment_type','orders.id as order_id','projects.title as project_title','packeges.name as packege_name','packeges.price as packege_price','packeges.detile as packege_detile','filds.name as fild_name','orders.name as order_name','orders.color_1 as order_color_1','orders.color_2 as order_color_2','orders.color_3 as order_color_3','orders.url as order_url','orders.admin as order_admin','orders.takephoto as order_takephoto','orders.end_time as order_end_time')
                        ->where('orders.user_id',auth()->user()->id)
                        ->where('orders.status','1')
                        ->get();
        return view('user.myservice',compact('orders'));

    }
    public function userprofile(){
        return view('user.userprofile');
    }
}
