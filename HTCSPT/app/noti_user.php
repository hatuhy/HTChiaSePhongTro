<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noti_user extends Model
{
    //
    protected $table = 'noti_user';
    public function user(){
        return $this->belongsTo('App\users','id_user','id');
    }
    public function notification(){
        return $this->belongsTo('App\notification','id_notification','id');
    }
    public function report(){
        return $this->belongsTo('App\reports','id_report','id');
    }   
}
