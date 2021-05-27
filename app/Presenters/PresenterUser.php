<?php

namespace App\Presenters;


use App\PokeApi\PokeApi;
use App\userPoke;

trait PresenterUser
{


    public function getTeamInfoAttribute()
    {

        $team = $this->Team;
        $html = '';

        if($team)
        {
            $pokemon =  [ $team->slot1,$team->slot2,$team->slot3 ];


            foreach ($pokemon as $poke)
            {
                if($poke)
                {
                    $data = PokeApi::getPokeInfo($poke);

                    $img = $data->sprites->front_default;
                    $name =  strtoupper($data->name);

                    $html .= "  <div  class='col-md-4'>
                                <img width='70' src='$img' data-popup='tooltip' data-title='$name'>
                            </div>";

                }
            }


        }

        return $html;

    }


    public function getPokeTeamAttribute()
    {
        $pokeTeam = [
            'slot1' => $this->slot1 ? PokeApi::getPokeInfo($this->slot1) : null,
            'slot2' => $this->slot2 ? PokeApi::getPokeInfo($this->slot2) : null,
            'slot3' => $this->slot3 ?  PokeApi::getPokeInfo($this->slot3) : null
        ];

        return $pokeTeam;
    }

    public function getUserPokeAttribute()
    {
            $html = '';

            $pokemon = $this->slot1 ? PokeApi::getPokeInfo($this->slot1) : null;
            $image = $pokemon->sprites->front_default;

            $slot1 = userPoke::where('poke_id',$this->slot1)->where('user_id',auth()->user()->id)->first();

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

        $pokemon = $this->slot1 ? PokeApi::getPokeInfo($this->slot1) : null;
        $image = $pokemon->sprites->front_default;

        $slot1 = userPoke::where('poke_id',$this->slot1)->where('user_id',auth()->user()->id)->first();

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
}
