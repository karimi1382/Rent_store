<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;
use App\Models\payment;
use App\Models\noti_send;
use Auth;


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
           //
           $order_id=order::orderby('id','DESC')->first();
           $id=$order_id->id;
           $id++;
           $request->validate([
            'File' => 'sometimes|file|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);
        
        if(isset($request->File)){
        $file_size=($request->File)->getSize();
        if($file_size > 5000000){
            return redirect()->route('adminticketdetail',$request->project_id)->with('error_file','edit seccess');
        }
    }
        $order=new order;
        $order->user_id     =       $request->user_id;
        $order->project_id  =       $request->project_id;
        $order->packege_id  =       $request->packege_id;
        $order->fild_id     =       $request->fild_id;
        $order->name        =       $request->name;
        $order->color_1     =       $request->color_1;
        $order->color_2     =       $request->color_2;
        $order->color_3     =       $request->color_3;
        $order->url         =       $request->url;
        $order->admin       =       $request->admin;
        $order->takephoto   =       $request->takephoto;

    if($request->File()) {
     
        $fileName = time().'_'.$request->File->getClientOriginalName();
        $filePath = $request->File->storeAs('user/'.auth::user()->id.'/order/'.$id.'/', $fileName, 'public');
        $order->logo = $fileName;
    } 


        $order->save();
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
