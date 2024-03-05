<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\User;
use App\Models\user_detile;
use Illuminate\Support\Facades\Hash;


class UserDetileController extends Controller
{
    //
    public function index(){
        $id=Auth()->User()->id;
        $user_detile=user_detile::with('users')->find($id);
        return view('user.userprofile',compact('user_detile'));
    }

    public function update(Request $request)
    {
        //
   
        $id=auth()->User()->id;

        $user_detile=user_detile::find($id);
        $user_detile->city           =       $request->city;
        $user_detile->country        =       $request->country;
        $user_detile->address        =       $request->address;
        $user_detile->mobile         =       $request->mobile;
        $user_detile->instagram      =       $request->instagram;
        $user_detile->linkedin       =       $request->linkedin;
        $user_detile->photo_address   =       $request->photo_address;
        $user_detile->save();

        if(isset($request->name)){
            $user=user::find($id);
            $user->name     =       $request->name;
            $user->save();
        }
        return redirect('user_detile')->with('success','edit seccess');

    }
    public function user_newpass(Request $request){
        $id=auth()->User()->id;
            if(isset($request->newpassword)){
                if($request->newpassword == $request->renewpassword)
                {
                     $user=user::find($id);
                     $user->password     =       Hash::make($request->newpassword);
                     $user->save();
                }else{
                return redirect('user_detile')->with('error','edit not seccess');
                }
            }
            return redirect('user_detile')->with('newpass','edit not seccess');    
    }
  
}
