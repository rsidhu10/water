<?php

namespace App;

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
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'first_name',
        'middle_name',
        'last_name',
        'city',
        'role_id',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

   
    public function comments(){
        return $this->hasmany('App\Comment');
    }
    public function role(){
        return $this->belongsTo('App\Role');
    }
    public function companies(){
        return $this->hasmany('App\Company');
    }

    public function tasks(){
        return $this->belongsToMany('App\Task');
    }

    public function project(){
        return $this->belongsToMany('App\Project');
    }
}
