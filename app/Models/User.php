<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    //Table Name
    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'password', 'avatar', 'is_activated',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function batch(){
        return $this->belongsTo('App\Batch');
    }

    public function session(){
        return $this->belongsTo('App\Session');
    }

    public function role_type(){
        return $this->belongsTo('App\Models\RoleType');
    }

    public function educations(){
        return $this->hasMany('App\Models\Education');
    }

    public function education_types(){

        return $this->hasMany('App\Models\EducationType');
    }

    public function skills(){
        return $this->hasMany('App\Models\Skill');
    }

    public function experiences(){
        return $this->hasMany('App\Models\Experience');
    }

    public function locations(){
        return $this->hasMany('App\Models\Location');
    }
    public function verifyUser(){
        return $this->hasOne('App\Models\VerifyUser');
    }
}
