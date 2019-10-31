<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
    //
    protected $table = 'notification';
    public function noti_user(){
        return $this->hasMany('App\noti_user','id_notification','id');
    }
}
