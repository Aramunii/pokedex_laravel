<?php

namespace App;

use App\Presenters\PresenterUser;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use PresenterUser;


    protected $fillable = ['user', 'email', 'password',];
    protected $hidden = ['password', 'remember_token',];
    protected $casts = ['email_verified_at' => 'datetime',];

    public function Team (){
        return $this->hasOne(userTeam::class,'user_id','id');
    }


    public function Bag (){
        return $this->hasMany(userTeam::class,'user_id','id');
    }




}
