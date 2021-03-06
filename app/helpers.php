<?php

use App\CoinUser;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\Cache;

function getPrice($price){
$price_convert= number_format($price, 2, ',', '.');

    return '$ '.$price_convert;

}

function getPriceNoDolar($price){
    $price_convert= number_format($price, 2, ',', '.');

    return $price_convert;

}

function getPriceMillion($price){
 $price_convert= substr($price, 0, 6);
 $price_convert= number_format($price_convert, 2, ',', '.');
 return '$ '.$price_convert.' M';

}

function getPercent($price) {
    $price_convert= number_format($price, 2, ',', '.');

    return $price_convert;
}


function dolarPrice($unit_val,$name){
    $coins=Cache::get('coins');
    $value=0;

        foreach ($coins as $coin2){
            if($name==$coin2['id']){
                $value=$coin2['price']*$unit_val;

            }
            else if ($name=='USD'){
                $value=$unit_val;
            }


    }

    return getPrice($value);
}


function getCurrentPrice($name){
    $coins=Cache::get('coins');
    $value=0;

    foreach ($coins as $coin2){
        if($name==$coin2['id']){
            $value=$coin2['price'];

        }


    }

    return getPrice($value);
}
