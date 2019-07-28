<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{   
	protected $table = 'experiences';
    public function user(){

        return $this->belongsTo('App\Models\User');
    }
}
