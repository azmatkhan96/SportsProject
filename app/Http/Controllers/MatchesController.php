<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Matches;
use Session;

class MatchesController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('auth.matchform');
    }

    public function matchStore(Request $request)
    {
        $request->validate([
            'matchName'=>'required|unique:matches,MatchName',
            'match_date'=>'required',
            'match_time'=>'required',
        ]);

        $value = Matches::addMatches([
            'newMatchName'=> $request->matchName,
            'place'=>$request->location,
            'date'=> $request->match_date,
            'time'=> $request->match_time
        ]);
       
        if($value ==1 )
        {
            return redirect('/home')->with('success','Match Created successfully.');
        }
       

    }


    public function showMatch()
    {
        $data=Matches::all();

        return view('auth.showMatches')->with(compact('data'));
    }
}
