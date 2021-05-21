<?php

namespace App\Http\Controllers;

use App\PokeApi\PokeApi;
use App\userPoke;
use App\userTeam;
use Illuminate\Http\Request;

class startController extends Controller
{
    //

    public function showIndex()
    {
        return view('start.index');
    }

    public function choosePoke(Request $request)
    {
        $request = $request->all();
        $user = auth()->user();

        $pokemon = PokeApi::getPokeInfo($request['poke_id']);

        $poke_data = [
            'user_id' => $user->id,
            'name' => $request['name'],
            'poke_id' => $pokemon->id,
            'level' => 1,
            'hp' => $pokemon->stats[0]->base_stat,
            'atk' => $pokemon->stats[1]->base_stat,
            'def' => $pokemon->stats[2]->base_stat,
        ];

        $bag = userPoke::create($poke_data);

        if ($bag) {

            $userTeam = userTeam::create(['user_id' => $user->id, 'slot1' => $pokemon->id]);

            if ($userTeam) {
                return response('success', 200);
            }

        }


        return response('error', 400);
    }
}
