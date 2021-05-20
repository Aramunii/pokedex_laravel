<?php

namespace App\Http\Controllers;

use App\PokeApi\PokeApi;
use App\userPoke;
use Illuminate\Http\Request;

class bagController extends Controller
{
    public function showBag()
    {


        $userPoke = userPoke::where('user_id', auth()->user()->id)->orderBy('poke_id', 'asc')->get();

        $pokemon = array();

        if ($userPoke->isNotEmpty()) {
            foreach ($userPoke as $poke) {
                $pokemon[] = PokeApi::getPokeInfo($poke->poke_id);
            }
        }

        return view("bag.index", ['pokemon' => $pokemon]);
    }


    public function catchPoke(Request $request)
    {
        $request = $request->all();


        $bag = userPoke::create([
            'user_id' => auth()->user()->id,
            'poke_id' => $request['id']
        ]);

        if ($bag) {
            return response('success', 200);
        }

        return response('error', 400);
    }

    public function removePoke(Request $request)
    {
        $poke = userPoke::where('user_id', auth()->user()->id)->where('poke_id', $request['poke_id'])->first();

        $poke->delete();


        /*
         * Criar Botão para cada pokemon, colocando o Id dele dentro, para ser enviado para rota
         * criar a rota que chame esta função
         * e retornar que foi bem sucedido.
         *
         *
         *
         *
         */
    }


}
