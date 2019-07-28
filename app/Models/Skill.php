<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
	protected $table = 'skills';
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
