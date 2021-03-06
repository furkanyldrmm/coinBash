<?php

namespace App\Http\Controllers;

use App\CoinUser;
use App\Operation;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class TransactionController extends Controller
{
    function buyCoin(Request $request)
    {

        if ($this->checkUser()) {
        } else {
            return "user_error";


        }

        $user = Sentinel::getUser();

        $usdAmount = CoinUser::where('user_id', $user->id)->where('coin_name', 'USD')->first();

        if (($usdAmount->value - $request->usd_value) >= 0) {
            $usdAmount->value = ($usdAmount->value) - ($request->usd_value);
            $usdAmount->save();
        } else {

            return "value_error";
        }


        $existCoinUser = CoinUser::where('user_id', $user->id)->where('coin_name', $request->coin_name)->first();


        if ($existCoinUser) {
            $existCoinUser->value += $request->coin_value;
            $existCoinUser->save();
        } else {
            $newCoin = new CoinUser;
            $newCoin->user_id = $user->id;
            $newCoin->coin_name = $request->coin_name;
            $newCoin->value = $request->coin_value;
            $newCoin->save();


        }


        $this->addLastOp($user, $request->coin_value, $request->coin_name, "buy");
        return "success_transaction";
    }





    function sellCoin(Request $request)
    {
        if ($this->checkUser()) {
        } else {
            return "user_error";


        }

        $user = Sentinel::getUser();


        $coinRow = CoinUser::where('user_id', $user->id)->where('coin_name', $request->coin_name)->first();
        if ($request->coin_value <= $coinRow->value) {
            $usdAmount = CoinUser::where('user_id', $user->id)->where('coin_name', 'USD')->first();
            $usdAmount->value = ($usdAmount->value) + ($request->usd_value);
            $usdAmount->save();


            $coinRow->value = $coinRow->value - $request->coin_value;
            $coinRow->save();

        } else {

            return "value_error";
        }


        $this->addLastOp($user, $request->coin_value, $request->coin_name, "sell");


        return "success_transaction";


    }


    function addLastOp($user, $coin_value, $coin_name, $type = "buy")
    {
        $newOp = new Operation;
        $newOp->coin_name = $coin_name;
        $newOp->unit_value = $coin_value;
        $newOp->user_id = $user->id;
        $newOp->value = getCurrentPrice($coin_name);
        $newOp->type = $type;
        $newOp->save();

    }

    function checkUser()
    {
        $user = Sentinel::getUser();

        return $user;
    }


}
