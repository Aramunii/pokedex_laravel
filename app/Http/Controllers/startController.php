<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class startController extends Controller
{
    //

    public function showIndex()
    {
        return view('start.index');
    }
}
