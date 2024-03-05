<?php

namespace App\Http\Controllers;

use App\Models\payment;
use App\Models\order;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders=order::join('projects','orders.project_id','projects.id')
                        ->join('packeges','orders.packege_id','packeges.id')
                        ->join('filds','orders.fild_id','filds.id')
                        ->join('project_types','projects.project_type_id','project_types.id')
                        ->LeftJoin('payments','payments.order_id','orders.id')
                        ->select('payments.updated_at as payment_updated_at','orders.created_at','orders.status','packeges.id as packege_id','project_types.name as project_type_name','orders.admin as order_admin','payments.detile as payment_code','payments.type as peyment_type','orders.id as order_id','projects.title as project_title','packeges.name as packege_name','packeges.price as packege_price','packeges.detile as packege_detile','filds.name as fild_name','orders.name as order_name','orders.color_1 as order_color_1','orders.color_2 as order_color_2','orders.color_3 as order_color_3','orders.url as order_url','orders.admin as order_admin','orders.takephoto as order_takephoto','orders.end_time as order_end_time')
                        ->where('orders.user_id',auth()->user()->id)
                        ->get();
        return view('user.peyment',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(payment $payment)
    {
        //
    }
}
