<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function job_post(){
        return $this->belongsTo('App\Models\JobPost');
        //updated.
    } 
}
