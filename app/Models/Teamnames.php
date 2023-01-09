<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\players;
use DB;

class Teamnames extends Model
{
    use HasFactory;

    protected $fillable = [
       ' TeamName',
    ];

    protected $table = 'teamnames';

    public static function teamNameAndPlayers($data)
    {
            $team= Teamnames::insert([
                    'match_ID' => $data['matchID'],
                    'TeamName' => $data['team_name']
            ]); 
           return $team; 
    }
    
}
