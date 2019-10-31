<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reports extends Model
{
    //
    protected $table = 'reports';
    public function motelrooms(){
        return $this->belongsTo('App\motelrooms','id_motelroom','id');
    }
    
    
}
