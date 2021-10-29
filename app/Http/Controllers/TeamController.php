<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team_data = $this->fetch_team_data();
        return view('backend.pages.team.index',[
            'team_data'=>$team_data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $team_data = $this->fetch_team_data();
        return view('backend.pages.team.create',[
            'team_data'=>$team_data,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        // dd($request->all());

        $destinationPath_for_team = 'backend/images/team/';
        //background
        $team_image_file = $request->file('images');
        $team_image = image_upload($team_image_file, $destinationPath_for_team);
        $request->request->add(['image'=>$team_image]);

        // dd($request->all());
        Team::create($request->except('_token'));
        return redirect()->back()->with('message','Team Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        $team_data = $this->fetch_team_data();
        return view('backend.pages.team.edit',[
            'team'=>$team,
            'team_data'=>$team_data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        if ($request->hasAny('images')) {
            // dd('has image');
            $destinationPath_for_team = 'backend/images/team/';
            //background
            $team_image_file = $request->file('images');
            $team_image = image_upload($team_image_file, $destinationPath_for_team);
            $request->request->add(['image'=>$team_image]);

        }


        // dd($request->all());
        $team->update($request->except('_token'));
        return redirect(route('team.index'))->with('info','Team Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect(route('team.index'))->with('warning','Team Deleted seccessfully');
    }

    //for to fetch all business table data
    private function fetch_team_data()
    {
        $team_data = Team::all();
        return $team_data;
    }
}
