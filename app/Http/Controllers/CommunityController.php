<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $community_data = $this->fetch_community_data();
        return view('backend.pages.community.index',[
            'community_data'=>$community_data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.community.create');
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
        $destinationPath_for_community = 'backend/images/community/';
        //background
        $community_image_file = $request->file('images');
        $community_image = image_upload($community_image_file, $destinationPath_for_community);
        $request->request->add(['image'=>$community_image]);

        // dd($request->all());
        Community::create($request->except('_token'));
        return redirect()->back()->with('message','Community Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Community  $community
     * @return \Illuminate\Http\Response
     */
    public function show(Community $community)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Community  $community
     * @return \Illuminate\Http\Response
     */
    public function edit(Community $community)
    {
        $community_data = $this->fetch_community_data();
        return view('backend.pages.community.edit',[
            'community_data'=>$community_data,
            'community'=>$community,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Community  $community
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Community $community)
    {
        if ($request->hasAny('images')) {
            // dd('has image');
            $destinationPath_for_community = 'backend/images/community/';
            //background
            $community_image_file = $request->file('images');
            $community_image = image_upload($community_image_file, $destinationPath_for_community);
            $request->request->add(['image'=>$community_image]);


        }

        // dd($request->all());
        $community->update($request->except('_token'));
        return redirect()->route('community.index')->with('info','community Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Community  $community
     * @return \Illuminate\Http\Response
     */
    public function destroy(Community $community)
    {
        $community->delete();
        return redirect(route('community.index'))->with('error','Community deleted successfully');
    }

    private function fetch_community_data()
    {
        $community_data = Community::all();
        return $community_data;
    }
}
