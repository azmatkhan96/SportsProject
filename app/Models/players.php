<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class players extends Model
{
    use HasFactory;

    protected $table = 'players';

    public static function addPlayers($data)
    {
        $getLastTeamNameId = DB::table('teamnames')->latest('id')->first();
        $input=$data['playerName'];
        $matchid=$data['matchID'];
        foreach($input as $i)
        {
            $value=new players;
            $value->match_ID=$matchid;
            $value->team_ID=$getLastTeamNameId->id;
            $value->players_ID =$i;
            $value->save();

        }
    }

    public static function listOfPlayers()
    {
        $list = DB::table('players')
                ->join('matches','players.match_ID','=','matches.id')
                ->join('users','players.players_ID','=','users.id')
                ->join('teamnames','players.team_ID','=','teamnames.id')
                ->select('matches.MatchName','teamnames.TeamName','users.name')
                ->get()->toArray();

        return $list;
    }
}
