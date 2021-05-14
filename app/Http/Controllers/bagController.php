<?php

namespace App\Http\Controllers;

use App\bag;
use Illuminate\Http\Request;

class bagController extends Controller
{
    public function showBag(){


        $bag = bag::where('user_id',auth()->user()->id)->orderBy('poke_id','asc')->pluck('poke_id')->toArray();



        return view("bag.index",['bag' => json_encode($bag)]);
    }


    public function catchPoke(Request $request)
    {
        $request = $request->all();


        $bag =    bag::create([
            'user_id' => auth()->user()->id,
            'poke_id' => $request['id']
        ]);

        if($bag){
            return response('success',200);
        }

        return response('error',400);
    }

    public function removePoke(Request  $request)
    {
        $poke    = bag::where('user_id',auth()->user()->id)->where('poke_id',$request['poke_id'])->first();

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
