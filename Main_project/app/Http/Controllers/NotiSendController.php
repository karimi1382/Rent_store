<?php

namespace App\Http\Controllers;

use App\Models\noti_send;
use App\Models\noti_type;

use Illuminate\Http\Request;

class NotiSendController extends Controller
{
    //
    public function index(){
        $user_id = auth()->user()->id;
        $notis=noti_send::with('noti_types')->where('noti_sends.user_id',$user_id)->orderBy('noti_sends.id','desc')->get();
        // dd($notis);
        return view('user.notification',compact('notis'));
    }
    public function update($id){
        $noti=noti_send::find($id);
        $noti->seen = 1;
        $noti->save();
        return redirect('notification')->with('success','edit seccess');
    }
}
