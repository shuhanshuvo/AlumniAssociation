<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EducationType extends Model
{
    public function educations(){
    	
        return $this->belongsTo('App\Models\User');
        //updated
    }
}
