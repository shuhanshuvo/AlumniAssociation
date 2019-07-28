<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    public function users(){
    	
    	return $this->hasOne('App\Models\User');
    	//updated Batch Model.
    }

}
