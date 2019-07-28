<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    public function users(){
    	
    	return $this->hasMany('App\Models\User');
    	//updated Batch Model.
    }
}
