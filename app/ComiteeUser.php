<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComiteeUser extends Model
{
     public function user(){
        return $this->belongsTo('App\Models\User');
    }
     public function comitee(){
        return $this->belongsTo('App\Comitee');
    }
}
