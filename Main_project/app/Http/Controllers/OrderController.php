<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;
use App\Models\payment;
use App\Models\noti_send;


use App\Http\Requests\taskrequest;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        order::create($request->all());
        return redirect()->route('cartshow')->with('success','order create successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order)
    {
        //
        $order=order::findOrFail($request->order_id);
        $order->status = 'در حال بررسی';
        $order->End_time = '+1';
        $order->save();
      
        $peyment= new payment;
        $peyment->type = $request->peyment_method;
        $peyment->detile = $request->peyment_detile;
        $peyment->status = $request->price;
        $peyment->user_id = $request->user_id;
        $peyment->order_id = $request->order_id;
        $peyment->save();

        $noti_send=new noti_send;
        $noti_send->noti_type_id = 3;
        $noti_send->order_id = $request->order_id;
        $noti_send->user_id = $request->user_id;
        $noti_send->seen = 0;

        $noti_send->save();

        return redirect()->route('cartshow')->with('peyment','peyment successfully');


        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
    
        //
        $order=order::findOrFail($request->id);
        $order->End_time = '-1';
        $order->save();

        $noti_send=new noti_send;
        $noti_send->noti_type_id = 4;
        $noti_send->order_id = $order->id;
        $noti_send->user_id = $request->auth()->user()->id;
        $noti_send->seen = 0;
        $noti_send->save();



        return redirect()->route('cartshow')->with('alarm','delete successfully');

    }
}
