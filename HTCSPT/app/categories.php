<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $table = 'categories';
    public function motelrooms(){
        return $this->hasMany('App\motelrooms','category_id','id');
    }
}
