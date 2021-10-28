<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $business_data = $this->fetch_business_data();
        return view('backend.pages.business.index',[
            'business_data'=>$business_data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $business_data = $this->fetch_business_data();
        return view('backend.pages.business.create',[
            'business_data'=>$business_data,
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

        $destinationPath_for_business = 'backend/images/business/';
        //background
        $gallery_image_file = $request->file('images');
        $gallery_image = image_upload($gallery_image_file, $destinationPath_for_business);
        $request->request->add(['image'=>$gallery_image]);

        // dd($request->all());
        Business::create($request->except('_token'));
        return redirect()->back()->with('message','Business Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function show(Business $business)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function edit(Business $business)
    {
        $business_data = $this->fetch_business_data();
        return view('backend.pages.business.edit',[
            'business'=>$business,
            'business_data'=>$business_data,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Business $business)
    {

        // dd($request->all());

        if ($request->hasAny('images')) {
            // dd('has image');
            $destinationPath_for_business = 'backend/images/business/';
            //background
            $gallery_image_file = $request->file('images');
            $gallery_image = image_upload($gallery_image_file, $destinationPath_for_business);
            $request->request->add(['image'=>$gallery_image]);
        }


        // dd($request->all());
        $business->update($request->except('_token'));
        return redirect(route('business.index'))->with('info','Business Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function destroy(Business $business)
    {
        $business->delete();
        return redirect(route('business.index'))->with('warning','Business Deleted seccessfully');
    }

    //for to fetch all business table data
    private function fetch_business_data()
    {
        $business_data = Business::all();
        return $business_data;
    }
}
