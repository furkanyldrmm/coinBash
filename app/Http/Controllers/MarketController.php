<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class MarketController extends Controller
{
    function index(){

        $items=Cache::get('coins');

return view('market')->with('items',$items);

    }

}
