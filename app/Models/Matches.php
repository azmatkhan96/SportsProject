<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Matches extends Model
{
    use HasFactory;

    protected $fillable = [
        'MatchName',
        'location',
        'date',
        'time',
    ];
    protected $table = 'matches';

    public static function addMatches($data)
    {
        $addMatches=Matches::insert([
            'MatchName'=> $data['newMatchName'],
            'location'=>$data['place'],
            'date'=> $data['date'],
            'time'=> $data['time']
        ]);
        return $addMatches;
    }
}
