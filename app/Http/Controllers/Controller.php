<?php

namespace App\Http\Controllers;

use App\CoinUser;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {

        $this->cacheControl();

        $this->middleware(function ($request, $next) {
            try {
                if (Sentinel::check()) {

                    $user = Sentinel::getUser();
                    if ($user) {
                        $total = getPrice($this->userWallet($user));

                        view()->share('user', $user);
                        view()->share('total', $total);


                    }

                }


            } catch (ThrottlingException $e) {
                $error_message = 'Aktivite Sınırlandırması :' . $e->getDelay() . ' saniye kaldı.';
                Session::put('error_message', $error_message);
                Session::put('error_delay', $e->getDelay());

            }
            return $next($request);


        });
    }

    function cacheControl()
    {


        $control = Cache::get('coins');
        if (!$control) {
            $page_url = "https://api.nomics.com/v1/currencies/ticker?key=889c9fef052d0ad55847b2eacdbcb715&ids=BTC,ETH,XRP,ADA,BNB,LTC,LINK,XLM,BCH,EOS,ATOM,IOTA,NEO&interval=1d,30d&convert=USD&per-page=100&page=1";

            $response = Http::get($page_url)->json();

            $items = collect($response);
            Cache::put('coins', $items, $seconds = 1000);

        }

    }

    function userWallet($user)
    {
        $coins = Cache::get('coins');
        $dolar = CoinUser::select('value')->where('user_id', $user->id)->where('coin_name', 'USD')->first();
        $total = $dolar->value;
        $user_coins = CoinUser::where('user_id', $user->id)->get();
        foreach ($user_coins as $coin) {
            foreach ($coins as $coin2) {
                if ($coin->coin_name == $coin2['id']) {
                    $total += $coin->value * $coin2['price'];
                }
            }
        }

        return $total;
    }
}
