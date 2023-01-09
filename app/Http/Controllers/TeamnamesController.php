<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teamnames;
use App\Models\Matches;
use App\Models\User;
use App\Models\players;
use DB;

class TeamnamesController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create()
    {
        $ply=Matches::all();
        $var=players::all()->pluck('players_ID')->toArray();
        $pro=User::whereNotIn('id', $var)->get();

        return view('auth.teamname')->with(compact('ply', 'pro'));
    }

    public function teamStore(Request $req)
    {


        $teamData=Teamnames::teamNameAndPlayers([
            'matchID'=> $req->match,
            'team_name'=>$req->teamname,
        ]);

       $input=$req->playersname;
       $matchid=$req->match;

        $val=players::addPlayers([
            'matchID'=> $matchid,
            'playerName'=>$input,
        ]);
         
        return redirect('/home')->with('success',' Team Register successfully.');
    }


}
