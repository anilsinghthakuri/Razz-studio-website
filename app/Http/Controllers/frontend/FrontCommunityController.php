<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Community;
use Illuminate\Http\Request;

class FrontCommunityController extends Controller
{

    public function index()
    {
        $community_data = $this->fetch_community_data();
        return view('frontend.pages.community.index',[
            'community_data'=>$community_data,
        ]);
    }


    private function fetch_community_data()
    {
        $community_data = Community::all();
        return $community_data;
    }
}
