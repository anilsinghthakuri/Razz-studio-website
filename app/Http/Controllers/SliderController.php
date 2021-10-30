<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $slider_data = $this->fetch_slider_data();
        return view('backend.pages.slider.index',[
            'slider_data'=>$slider_data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $slider_data = $this->fetch_slider_data();
        return view('backend.pages.slider.create',[
            'slider_data'=>$slider_data,
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

        $destinationPath_for_slider = 'backend/images/slider/';
        //background
        $slider_image_file = $request->file('images');
        $slider_image = image_upload($slider_image_file, $destinationPath_for_slider);
        $request->request->add(['image'=>$slider_image]);

        // dd($request->all());
        Slider::create($request->except('_token'));
        return redirect()->back()->with('message','slider Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        $slider_data = $this->fetch_slider_data();
        return view('backend.pages.slider.edit',[
            'slider'=>$slider,
            'slider_data'=>$slider_data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        if ($request->hasAny('images')) {
            // dd('has image');
            $destinationPath_for_slider = 'backend/images/slider/';
            //background
            $slider_image_file = $request->file('images');
            $slider_image = image_upload($slider_image_file, $destinationPath_for_slider);
            $request->request->add(['image'=>$slider_image]);
        }


        // dd($request->all());
        $slider->update($request->except('_token'));
        return redirect(route('slider.index'))->with('info','slider Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect(route('slider.index'))->with('warning','slider Deleted seccessfully');
    }

    private function fetch_slider_data()
    {
        $slider_data = Slider::all();
        return $slider_data;
    }
}
