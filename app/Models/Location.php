<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{   
	protected $table = 'locations';
    public function user(){
    	
    	return $this->belongsTo('App\Models\User');
    	//updated Department Model.
    }
}
