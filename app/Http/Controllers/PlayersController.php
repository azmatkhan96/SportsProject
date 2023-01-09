<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\players;

class PlayersController extends Controller
{
    //

    public function showPlayers()
    {
        $var=players::listOfPlayers();

        return view('auth.showPlayers')->with(compact('var'));
    }
}
