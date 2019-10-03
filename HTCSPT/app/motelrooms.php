<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class motelrooms extends Model
{
    //
    protected $table = 'motelrooms';
    public function users(){
        return $this->hasOne('App\users');
    }
    public function categories(){
        return $this->hasOne('App\categories');
    }
}
