<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mapController extends Controller
{
    public function showMap(){

        return view("map.index");
    }
}
