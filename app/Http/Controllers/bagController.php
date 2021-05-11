<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bagController extends Controller
{
    public function showBag(){

        return view("bag.index");
    }
}
