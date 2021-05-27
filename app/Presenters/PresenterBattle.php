<?php

namespace App\Presenters;


use App\PokeApi\PokeApi;
use App\User;
use App\userPoke;

trait PresenterBattle
{


    public function getUserPokeAttribute()
    {
            $html = '';

            $pokemon = $this->User->Team->slot1 ? PokeApi::getPokeInfo($this->User->Team->slot1) : null;
            $image = $pokemon->sprites->front_default;

            $slot1 = userPoke::where('poke_id',$this->User->Team->slot1)->where('user_id',auth()->user()->id)->first();

            if($pokemon)
            {
                $html .= " <div class='row'>
                   <div class='col-md-12 text-center'><h4 id='poke_name' class='text-uppercase'>$slot1->name</h4></div>
                   <div class='col-md-12 text-center'><span class='text-bold'> Level: </span><span id='poke_level'>$slot1->level</span></div>
               </div>
                <div class='row'>
                    <div class='col-md-12 text-center'><img src='$image' id='poke_img'></div>
                </div>
                <div class='row'>
                    <div class='col-md-12 text-center'><span class='text-bold'>Vida: </span> <span id='poke_life'>$slot1->hp</span></div>
                </div>
                <div class='row'>
                    <div class='col-md-12 text-center'><span class='text-bold'>Ataque: </span> <span id='poke_atk'>$slot1->atk</span></div>
                </div>
                <div class='row'>
                    <div class='col-md-12 text-center'><span class='text-bold'>Defesa: </span> <span id='poke_def'>$slot1->def</span></div>
                </div>";


            }



        return $html;
    }

    public function getEnemyPokeAttribute()
    {
        $html = '';
        $pokemon = $this->poke_id ? PokeApi::getPokeInfo($this->poke_id) : null;
        $image = $pokemon->sprites->front_default;
        if($pokemon)
        {
            $html .= " <div class='row'>
                   <div class='col-md-12 text-center'><h4 id='poke_name' class='text-uppercase'>$pokemon->name</h4></div>
                   <div class='col-md-12 text-center'><span class='text-bold'> Level: </span><span id='poke_level'>$this->level</span></div>
               </div>
                <div class='row'>
                    <div class='col-md-12 text-center'><img src='$image' id='poke_img'></div>
                </div>
                <div class='row'>
                    <div class='col-md-12 text-center'><span class='text-bold'>Vida: </span> <span id='poke_life'>$this->hp</span></div>
                </div>
                <div class='row'>
                    <div class='col-md-12 text-center'><span class='text-bold'>Ataque: </span> <span id='poke_atk'>$this->atk</span></div>
                </div>
                <div class='row'>
                    <div class='col-md-12 text-center'><span class='text-bold'>Defesa: </span> <span id='poke_def'>$this->def</span></div>
                </div>";
        }

        return $html;
    }
}
