<?php

namespace App\Http\Controllers;

use App\CoinUser;
use App\Operation;
use App\ValueUser;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class WalletController extends Controller
{
    function index()
    {

        $user = Sentinel::getUser();
        $user_coins = CoinUser::where('user_id', $user->id)->get();
        $operations = $this->lastOperation($user);

        return view('wallet')->with('user_coins', $user_coins)->with('operations', $operations);
    }


    function lastOperation($user)
    {
        $operations = Operation::where('user_id', $user->id)->get()->sortByDesc('created_at');

        return $operations;

    }
}
