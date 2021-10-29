<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontTeamController extends Controller
{

    public function index()
    {
        $team_data = $this->fetch_team_data();
        // dd($team_data);
        return view('frontend.pages.team.index',[
            'team_data'=>$team_data,
        ]);
    }

    public function show($id)
    {
        // dd($id);

        $team  = $this->fetch_team_single_data($id);
        return view('frontend.pages.team.show',[
            'team'=>$team,
        ]);
    }

    public function fetch_team_single_data($id)
    {
        $team = DB::table('teams')->where('id',$id)->first();
        return $team;
    }

    private function fetch_team_data()
    {
        $team_data = DB::table('teams')->get();
        return $team_data;
    }
}
