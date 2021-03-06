<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValueUser extends Model
{
    use HasFactory;

    protected $table='value_user';
    function getUser(){

        return $this->hasOne('App\User','id','user_id');
    }
    function getImage(){

        return $this->hasOne('App\UserImage','user_id','user_id');
    }
}
