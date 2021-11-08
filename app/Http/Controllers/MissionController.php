<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mission_data = $this->fetch_mission_data();
        return view('backend.pages.mission.index',[
            'mission_data'=>$mission_data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function show(Mission $mission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function edit(Mission $mission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mission $mission)
    {
        if ($request->hasAny('images')) {
            // dd('has image');
            $destinationPath_for_mission = 'backend/images/mission/';
            //background
            $mission_image_file = $request->file('images');
            $mission_image = image_upload($mission_image_file, $destinationPath_for_mission);
            $request->request->add(['image'=>$mission_image]);

        }

        // dd($request->all());
        $mission->update($request->except('_token'));
        return redirect()->route('mission.index')->with('info','Mission Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mission $mission)
    {
        //
    }

    private function fetch_mission_data()
    {
        $mission_data = DB::table('missions')->where('id',1)->first();
        return $mission_data;
    }
}
