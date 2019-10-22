<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class motelrooms extends Model
{
    //
    protected $table = 'motelrooms';
    public function users(){
        return $this->belongsTo('App\users','user_id','id');
    }
    public function categories(){
        return $this->belongsTo('App\categories','category_id','id');
    }
    public function districts(){
    	return $this->belongsTo('App\districts', 'district_id','id');
    }
}
