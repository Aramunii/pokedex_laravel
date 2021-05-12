<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bag extends Model
{

    protected $table   = 'bag';
    protected $fillable = [
        'user_id', 'poke_id',
    ];
}
