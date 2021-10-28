<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about_us = $this->fetch_about_data();
        return view('backend.pages.about_us.index',[
            'about_us'=>$about_us,
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
     * @param  \App\Models\Aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function show(Aboutus $aboutus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function edit(Aboutus $aboutus)
    {
        dd($aboutus);
        $about_us = $this->fetch_about_data();
        return view('backend.pages.about_us.index',[
            'about_us'=>$about_us,
            'aboutus'=>$aboutus,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aboutus $aboutus)
    {
        // dd($request->all());
        dd($aboutus);

        if ($request->hasAny('images')) {
            // dd('has image');
            $destinationPath_for_about = 'backend/images/about_us/';
            //background
            $about_image_file = $request->file('images');
            $about_image = image_upload($about_image_file, $destinationPath_for_about);
            $request->request->add(['image'=>$about_image]);
        }


        // dd($request->all());
        $aboutus->update($request->except('_token'));
        return redirect(route('aboutus.index'))->with('info','About Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aboutus $aboutus)
    {
        //
    }

    private function fetch_about_data()
    {
        $about_us = DB::table('aboutuses')->where('id',1)->first();
        return $about_us;
    }
}
