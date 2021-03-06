<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoinUser extends Model
{
    use HasFactory;

    protected $table='coin_user';


    function getCoin(){

        return $this->hasOne('App\CoinIcon','coin_name','coin_name');
    }
}
