<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userTeam extends Model
{

    protected $table = 'user_team';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'slot1', 'slot2', 'slot3'];


}
