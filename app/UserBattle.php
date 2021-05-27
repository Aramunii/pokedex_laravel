<?php

namespace App;

use App\Presenters\PresenterBattle;
use Illuminate\Database\Eloquent\Model;

class UserBattle extends Model
{

    use PresenterBattle;

    protected $table   = 'user_battle';
    protected $fillable = [
        'user_id','poke_id','level','atk','def','hp','hp_max','finished'
    ];

    public function User()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

}
