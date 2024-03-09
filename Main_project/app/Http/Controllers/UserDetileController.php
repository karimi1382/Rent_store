<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\User;
use App\Models\user_detile;
use Illuminate\Support\Facades\Hash;
use Auth;
use File;



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
        $request->validate([
            'File' => 'sometimes|file|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);
        
        if(isset($request->File)){
        $file_size=($request->File)->getSize();
        // dd($file_size);


        // $image_info = getimagesize($request->File);
        // $image_width = $image_info[0];
        // $image_height = $image_info[1];
        if($file_size > 5000000){
            return redirect('user_detile')->with('error_file','edit seccess');

        }
    }
        $id=auth()->User()->id;

        $user_detile=user_detile::find($id);
        $user_detile->city           =       $request->city;
        $user_detile->country        =       $request->country;
        $user_detile->address        =       $request->address;
        $user_detile->mobile         =       $request->mobile;
        $user_detile->instagram      =       $request->instagram;
        $user_detile->linkedin       =       $request->linkedin;
        if($request->File()) {
            if(isset($user_detile->photo_address)){
                File::delete(storage_path('app/public/user').'/'.auth::user()->id.'/'.$user_detile->photo_address);
            }
            $fileName = time().'_'.$request->File->getClientOriginalName();
            $filePath = $request->File->storeAs('user/'.auth::user()->id, $fileName, 'public');
            $user_detile->photo_address = $fileName;
        } 

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
