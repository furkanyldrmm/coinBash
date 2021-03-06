<?php

namespace App;

use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends EloquentUser
{
    use HasFactory;
protected $table="users";
    function getImage(){

        return $this->hasOne('App\UserImage','user_id','id');
    }
}
