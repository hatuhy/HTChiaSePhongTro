<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    //
    protected $table = 'users';
    public function motelrooms(){
        return $this->hasMany('App\motelrooms','user_id','id');
    }
}   
