<?php

namespace App;

use App\PokeApi\PokeApi;
use App\Presenters\PresenterUser;
use Illuminate\Database\Eloquent\Model;

class userTeam extends Model
{

    use PresenterUser;
    protected $table = 'user_team';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'slot1', 'slot2', 'slot3'];



}
