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
                $data =  PokeApi::getPokeInfo($poke->poke_id);
                $pokemon[] = [
                    'name' => $poke->name,
                    'id' => $poke->poke_id,
                    'img'=> $data->sprites->front_default
                ] ;

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

    public  function showPoke($id)
    {

        $userPoke = userPoke::where('user_id',auth()->user()->id)->where('poke_id',$id)->first();

        $data = PokeApi::getPokeInfo($userPoke->poke_id);

        $userPoke['img'] = $data->sprites->front_default;


        return view('bag.poke' , ['pokemon' => $userPoke ]) ;
    }


}
