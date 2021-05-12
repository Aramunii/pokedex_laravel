<?php

namespace App\Http\Controllers;

use App\bag;
use Illuminate\Http\Request;

class bagController extends Controller
{
    public function showBag(){

        return view("bag.index");
    }


    public function catchPoke($id)
    {

        bag::create([
            'user_id' => auth()->user()->id,
            'poke_id' => $id
        ]);

        return response('asdasdasd',200);
    }
}
