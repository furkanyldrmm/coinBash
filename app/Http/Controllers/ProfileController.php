<?php

namespace App\Http\Controllers;

use App\UserImage;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    function index(){


        return view('profile');
    }

    function updateProfile(Request $request){
        $user=Sentinel::getUser();



     if($request->nickname){
         $user->first_name=$request->nickname;
         $user->save();

     }
     if($request->hasFile('image')){



         $userImage=UserImage::where('user_id',$user->id)->first();

         if($userImage){

             $imagename = Str::slug($request->image) . '.' . $request->image->getClientOriginalExtension();
             $request->image->move(public_path('uploads'), $imagename);
             $userImage->image_src = 'uploads/' . $imagename;
             $userImage->user_id=$user->id;
             $userImage->save();
         }
         else{
             $newUserImage=new UserImage;
             $imagename = Str::slug($request->image) . '.' . $request->image->getClientOriginalExtension();
             $request->image->move(public_path('uploads'), $imagename);
             $newUserImage->image_src = 'uploads/' . $imagename;
             $newUserImage->user_id=$user->id;
             $newUserImage->save();



         }

     }
Session::put("success_update","success_update");
     return redirect()->back();
    }
}
