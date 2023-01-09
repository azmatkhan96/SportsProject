<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teamnames;
use App\Models\Score;
use DB;

class ScoreController extends Controller
{
    //
    public function create()
    {
        $sc=Teamnames::all();
        // echo"<pre>";print_r($sc);exit;
        return view('auth.MatchScore',compact('sc'));
    }

    public function store(Request $req)
    {
        $data=new Score;

        $data->team_ID=$req->teamName;
        $data->Score=$req->score;

        $res=$data->save();

        if($res)
        {
            return redirect('/home')->with('success',' Team Score successfully.');
        }
    }


    public function showScore()
    {
            $val=DB::table('scores')
                ->join('teamnames','scores.team_ID','=','teamnames.id')
                ->select('teamnames.TeamName','scores.Score')
                ->get();

                return view('auth.ShowScore')->with(compact('val'));
    }
}

