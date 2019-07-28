<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
	
	protected $table = 'educations';
	public function user(){
        return $this->belongsTo('App\Models\User');
        //updated.
    }
}
