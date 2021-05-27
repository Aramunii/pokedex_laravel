<?php


namespace App\Http\Controllers;


use App\PokeApi\PokeApi;
use App\UserBattle;
use Illuminate\Http\Request;

class battleController extends Controller
{

    public function showIndex()
    {

        $user = Auth()->user();
        $battleData = UserBattle::where('user_id', auth()->user()->id)->where('finished', 0)->first();
        $pokemon = PokeApi::getPokeInfo($battleData->poke_id);
        $poke_team = $user->Team->PokeTeam;
        return view('battle.index', ['pokemon' => $pokemon , 'battleData' => $battleData,'user'=> $user,'poke_team'=>$poke_team]);
    }

    public function startBattle(Request $request)
    {
        $battleData = UserBattle::where('user_id', auth()->user()->id)->where('finished', 0)->first();


        if (!$battleData) {


            $request = $request->all();

            $level = $request['poke_level'];

            $pokemon = PokeApi::getPokeInfo($request['poke_id']);

            $multiplayer = $level > 5 ? 5.6 : 1;


            $battleData = [
                'user_id' => auth()->user()->id,
                'poke_id' => $pokemon->id,
                'level' => $level,
                'hp' => $pokemon->stats[0]->base_stat * $level / $multiplayer,
                'hp_max' => $pokemon->stats[0]->base_stat * $level / $multiplayer,
                'atk' => $pokemon->stats[1]->base_stat * $level / $multiplayer,
                'def' => $pokemon->stats[2]->base_stat * $level / $multiplayer,
                'finished' => 0
            ];

            $battle = UserBattle::create($battleData);

            return response('success', 200);
        }

        return response('error', 400);

    }

}
