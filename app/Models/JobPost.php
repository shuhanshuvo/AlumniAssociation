<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    protected $fillable = [
        'job_title', 'company', 'job_description','user_id',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
        //updated.
    } 

     public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
}
