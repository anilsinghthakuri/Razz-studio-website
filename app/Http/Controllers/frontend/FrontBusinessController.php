<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontBusinessController extends Controller
{
    public function index()
    {
        return view('frontend.pages.business.index');
    }

    public function show($id)
    {
        // dd($id);
        $business = $this->fetch_business_single_data($id);
        // dd($business);
        return view('frontend.pages.business.show',[
            'business'=>$business,
        ]);
    }

    private function fetch_business_single_data($id)
    {
        $business = DB::table('businesses')->where('id',$id)->first();
        return $business;
    }
}
