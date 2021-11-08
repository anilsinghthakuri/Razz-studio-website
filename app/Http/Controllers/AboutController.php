<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about_data = $this->fetch_about_data();
        return view('backend.pages.about.index',[
            'about_data'=>$about_data,
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
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {


        if ($request->hasAny('images')) {
            // dd('has image');
            $destinationPath_for_about = 'backend/images/about/';
            //background
            $about_image_file = $request->file('images');
            $about_image = image_upload($about_image_file, $destinationPath_for_about);
            $request->request->add(['image'=>$about_image]);

        }

        // dd($request->all());
        $about->update($request->except('_token'));
        return redirect()->route('about.index')->with('info','About Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }

    private function fetch_about_data()
    {
        $about_data = DB::table('abouts')->where('id',1)->first();
        return $about_data;
    }
}
