<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function clientComment(){
        return $this->hasMany(ClientComment::class);
    }

    public function projectComment(){
        return $this->hasMany(ProjectComment::class);
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function isAdmin(){
        if ($this->role->name == 'Admin'){
            return true;
        }
        return false;
    }
}
