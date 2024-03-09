<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;
use App\Models\packege;
use App\Models\fild;
use App\Models\project_type;
use App\Models\user_detile;
use App\Models\payment;
use App\Models\noti_send;



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

                        $user=Auth()->User()->id;
                        $user_detile=user_detile::where('user_id',$user)->first();
                        if(isset($user_detile)){
                            return view('user.cart',compact('orders'));
                        }else{
                            $user_detile=new user_detile;
                            $user_detile->user_id = $user;
                            $user_detile->save();
                            return view('user.cart',compact('orders'));
                        }


        
    }
    public function myservice(){
        $orders=order::join('projects','orders.project_id','projects.id')
                        ->join('packeges','orders.packege_id','packeges.id')
                        ->join('filds','orders.fild_id','filds.id')
                        ->join('project_types','projects.project_type_id','project_types.id')
                        ->LeftJoin('payments','payments.order_id','orders.id')
                        ->select('payments.updated_at as payment_updated_at','orders.created_at','packeges.id as packege_id','project_types.name as project_type_name','orders.admin as order_admin','payments.detile as payment_code','payments.type as peyment_type','orders.id as order_id','projects.title as project_title','packeges.name as packege_name','packeges.price as packege_price','packeges.detile as packege_detile','filds.name as fild_name','orders.name as order_name','orders.color_1 as order_color_1','orders.color_2 as order_color_2','orders.color_3 as order_color_3','orders.url as order_url','orders.admin as order_admin','orders.takephoto as order_takephoto','orders.end_time as order_end_time','orders.url')
                        ->where('orders.user_id',auth()->user()->id)
                        ->where('orders.status','1')
                        ->get();
        return view('user.myservice',compact('orders'));

    }
   
    public function userpanel(){
        $user=Auth()->User()->id;
        $user_detile=user_detile::where('user_id',$user)->first();
        if(isset($user_detile)){
            return view('user.userpanel');
        }else{
            $user_detile=new user_detile;
            $user_detile->user_id = $user;
            $user_detile->save();
            return view('user.userpanel');
        }
    }

    public function adminpeyment_index(){
        $orders=order::join('projects','orders.project_id','projects.id')
                        ->join('packeges','orders.packege_id','packeges.id')
                        ->join('filds','orders.fild_id','filds.id')
                        ->join('project_types','projects.project_type_id','project_types.id')
                        ->LeftJoin('payments','payments.order_id','orders.id')
                        ->select('orders.packege_id','project_types.name as project_type','projects.title as project_title','packeges.name as packege_name','packeges.detile as packege_detile','packeges.price as packege_price','orders.admin as order_admin','payments.type as payment_type','payments.detile as payment_detile','orders.id as id')
                        ->where('orders.End_time','+1')
                        ->get();

        $orders_accept=order::join('projects','orders.project_id','projects.id')
                        ->join('packeges','orders.packege_id','packeges.id')
                        ->join('filds','orders.fild_id','filds.id')
                        ->join('project_types','projects.project_type_id','project_types.id')
                        ->LeftJoin('payments','payments.order_id','orders.id')
                        ->select('orders.packege_id','project_types.name as project_type','projects.title as project_title','packeges.name as packege_name','packeges.detile as packege_detile','packeges.price as packege_price','orders.admin as order_admin','payments.type as payment_type','payments.detile as payment_detile','orders.name as order_name','orders.End_time as order_End_time','orders.created_at as order_create','orders.id as id')
                        ->where('orders.status','1')->orderBy('orders.id','desc')
                        ->get();

       $count_web=payment::where('status','<>','no')->get()->count();
       $count_price=payment::where('status','<>','no')->select('payments.status as price')->get();
       $count = 0;
       foreach($count_price as $count_prices){
        $prices=$count_prices->price ;
        $count += (int)$prices;
       
       }
       

        return view('admin.peyment',compact('orders','orders_accept','count','count_web'));
    }
    public function websetting_index($id){
        $order=order::join('projects','orders.project_id','projects.id')
        ->join('packeges','orders.packege_id','packeges.id')
        ->join('filds','orders.fild_id','filds.id')
        ->join('project_types','projects.project_type_id','project_types.id')
        ->LeftJoin('payments','payments.order_id','orders.id')
        ->select('project_types.name as project_type','projects.title as project_title','orders.admin','orders.name as order_name','packeges.price','packeges.id as packege_type','packeges.name as packege_name','orders.url','orders.color_1','orders.color_2','orders.color_3','orders.id as order_id','payments.updated_at as payment_updated','orders.End_time','orders.created_at')
        ->where('orders.id',$id)
        ->first();

        return view('admin.websetting',compact('order'));
    }
    public function websetting_update(Request $request){
        $order=order::find($request->order_id);
        if(isset($request->url)){
        $order->url = $request->url;
        $order->save();
        }
        $payment=payment::where('order_id',$request->order_id)->first();
        if(isset($request->time_finish)){
        $payment->updated_at = $request->time_finish;
        $payment->save();
        }

        $noti_send=new noti_send;
        $noti_send->noti_type_id = 1;
        $noti_send->order_id = $order->id;
        $noti_send->user_id = $order->user_id;
        $noti_send->seen = 0;
        $noti_send->save();
        
        return redirect('webadmin')->with('success','chenge data succes');

    }
    public function webadmin(){

        $orders=order::join('projects','orders.project_id','projects.id')
        ->join('packeges','orders.packege_id','packeges.id')
        ->join('filds','orders.fild_id','filds.id')
        ->join('project_types','projects.project_type_id','project_types.id')
        ->LeftJoin('payments','payments.order_id','orders.id')
        ->select('payments.updated_at as payment_updated_at','orders.created_at','packeges.id as packege_id','project_types.name as project_type_name','orders.admin as order_admin','payments.detile as payment_code','payments.type as peyment_type','orders.id as order_id','projects.title as project_title','packeges.name as packege_name','packeges.price as packege_price','packeges.detile as packege_detile','filds.name as fild_name','orders.name as order_name','orders.color_1 as order_color_1','orders.color_2 as order_color_2','orders.color_3 as order_color_3','orders.url as order_url','orders.admin as order_admin','orders.takephoto as order_takephoto','orders.end_time as order_end_time','orders.id as order_id','orders.url')
        ->where('orders.status','1')->orderBy('orders.id','desc')
        ->get();
        return view('admin.webadmin',compact('orders'));
    }
    public function allusers(){
        $user_detiles=user_detile::with('users')->get();
        return view('admin.allusers',compact('user_detiles'));
    }
    public function accept_peyment(Request $request){
        $order=order::find($request->order_id);
        $end_time = Carbon::now('Asia/Tehran') ;
       
        $packege = $order->packege_id;
        if($packege==1)
        $end_time->addMonth(3);
        if($packege==2)
        $end_time->addMonth(6);
        if($packege==3)
        $end_time->addMonth(12);
       

        if($request->status==1){
            $order->status = 1;
            $order->End_time = $end_time;

           


        }
        if($request->status==0){
            $payment=payment::where('order_id',$request->order_id);
            $payment->delete();
            $order->End_time = null;
            $order->status = 'در انتظار پرداخت';

            $noti_send=new noti_send;
            $noti_send->noti_type_id = 2;
            $noti_send->order_id = $order->id;
            $noti_send->user_id = $order->user_id;
            $noti_send->seen = 0;
            $noti_send->save();



        }
        $order->save();
        return redirect('adminpeyment')->with('success','chenge data succes');
    }
}
