<?php

namespace App\Presenters;


use App\PokeApi\PokeApi;

trait PresenterUser
{


    public function getTeamInfoAttribute()
    {

        $team = $this->Team;

        $pokemon =  [ $team->slot1,$team->slot2,$team->slot3 ];

        $html = '';

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

        return $html;

    }

}
