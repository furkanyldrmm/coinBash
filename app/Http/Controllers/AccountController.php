<?php

namespace App\Http\Controllers;

use App\CoinUser;
use App\User;
use App\ValueUser;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{
    function loginPage(){
        return view('login');
    }
    function registerPage(){

        return view('register');
    }
    function registerAction(Request $request){

        if($this->checkNickname($request->firstname)){
            Session::put('register_nick',"register_nick");
            return redirect()->back();
        }

        $credentials = [
            'email'    => $request->email,
            'password' => $request->password,
            'first_name'=>$request->firstname
        ];




        try {
            $user = Sentinel::registerAndActivate($credentials);
        }
        catch (\Exception $exception){
            Session::put('register_error',"register_error");
           return redirect()->back();
        }

        if($user){
            $valueUser=new ValueUser;
            $valueUser->user_id=$user->id;
            $valueUser->value=1000;
            $valueUser->save();

            $coinUser=new CoinUser;
            $coinUser->user_id=$user->id;
            $coinUser->coin_name='USD';
            $coinUser->value=1000;
            $coinUser->save();


            Session::put('register_success',"register_success");

            return redirect("/login");
        }
        else{
            return  redirect();
        }

    }

    function loginAction(Request $request){
        $credentials = [
            'email'    => $request->nickname,
            'password' => $request->password
        ];

        $user=    Sentinel::authenticateAndRemember($credentials);
        if($user){
            Session::put('login_success',"login_success");

            return redirect('/');
        }
        else{
            Session::put('login_error',"login_error");
            return redirect()->back();
        }
    }

    function logout(){

        $user = Sentinel::getUser();

        Sentinel::logout($user);
        return redirect('/');
    }


    function checkNickname($name){
        $user=User::where('first_name',$name)->first();

        return $user;

    }

}
