<?php

namespace App\Http\Controllers;

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

        $userTeam =  userTeam::create(['user_id'=>$user->id,'slot1'=>$request['poke_id']]);

        if($userTeam){
            return response('success',200);
        }

        return response('error',400);
    }
}
