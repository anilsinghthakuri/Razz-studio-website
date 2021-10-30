<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontNewsController extends Controller
{
    public function index()
    {
        $news_data = $this->fetch_news_data();
        return view('frontend.pages.newsroom.index',[
            'news_data'=>$news_data,
        ]);
    }

    public function show($id)
    {
        // dd($id);
        $news = $this->fetch_single_news_data($id);
        return view('frontend.pages.newsroom.show',[
            'news'=>$news,
        ]);
    }

    private function fetch_single_news_data($id)
    {
        $news = DB::table('news')->where('id',$id)->first();
        return $news;
    }


    private function fetch_news_data()
    {
        $news_data = News::all();
        return $news_data;
    }
}
