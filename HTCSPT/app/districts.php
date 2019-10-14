<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class districts extends Model
{
    //
    protected $table = 'districts';
    public function motelrooms(){
    	return $this->hasMany('App\motelrooms', 'district_id','id');
    }
}
