<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserBattle extends Model
{


    protected $table   = 'user_poke';
    protected $fillable = [
        'user_id','poke_id','level','atk','def','hp','hp_max','finished'
    ];

}
