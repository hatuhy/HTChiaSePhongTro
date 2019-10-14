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
        return $this->belongsTo('App\categories','category_id','id');
    }
    public function districts(){
    	return $this->belongsTo('App\districts', 'district_id','id');
    }
}
