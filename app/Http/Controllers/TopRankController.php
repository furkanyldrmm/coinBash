<?php

namespace App\Http\Controllers;

use App\ValueUser;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class TopRankController extends Controller
{
    function index()
    {
        if (Sentinel::check()) {

            $this->updateUserValue();

        }

        $allUser = ValueUser::all()->sortByDesc('value');

        return view('topRank')->with('all_user', $allUser);


    }

    function updateUserValue()
    {
        $user = Sentinel::getUser();

        $user_amount = ValueUser::where('user_id', $user->id)->first();
        $user_amount2 = $this->userWallet($user);
        $user_amount->value = $user_amount2;
        $user_amount->save();


    }
}
