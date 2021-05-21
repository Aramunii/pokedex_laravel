<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userPoke extends Model
{

    protected $table   = 'user_poke';
    protected $fillable = [
        'user_id','poke_id','name','level','atk','def','hp','xp','xp_max'
    ];
}
