<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Community;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontCommunityController extends Controller
{

    public function index()
    {
        $community_data = $this->fetch_community_data();
        return view('frontend.pages.community.index',[
            'community_data'=>$community_data,
        ]);
    }

    public function show($id)
    {
        $community = $this->fetch_single_community_data($id);
        return view('frontend.pages.community.show',[
            'community'=>$community,
        ]);
    }

    private function fetch_single_community_data($id)
    {
        $community = DB::table('communities')->where('id',$id)->first();
        return $community;
    }


    private function fetch_community_data()
    {
        $community_data = Community::all();
        return $community_data;
    }
}
