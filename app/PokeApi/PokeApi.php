<?php


namespace App\PokeApi;


class PokeApi
{


    public static function getPokeInfo($id)
    {


        $url = "https://pokeapi.co/api/v2/pokemon/" . $id;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $pokemon = json_decode(curl_exec($ch));


        return $pokemon;
    }

}
