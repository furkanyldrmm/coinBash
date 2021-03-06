<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    protected $table="last_operation";
    function getCoin(){

        return $this->hasOne('App\CoinIcon','coin_name','coin_name');
    }
}
