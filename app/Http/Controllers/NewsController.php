<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news_data = $this->fetch_news_data();
        return view('backend.pages.news.index',[
            'news_data'=>$news_data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news_data = $this->fetch_news_data();
        return view('backend.pages.news.create',[
            'news_data'=>$news_data,
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


        $destinationPath_for_news = 'backend/images/news/';
        //background
        $news_image_file = $request->file('images');
        $news_image = image_upload($news_image_file, $destinationPath_for_news);
        $request->request->add(['image'=>$news_image]);

        // dd($request->all());
        News::create($request->except('_token'));
        return redirect()->back()->with('message','News Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $news_data = $this->fetch_news_data();
        return view('backend.pages.news.edit',[
            'news_data'=>$news_data,
            'news'=>$news,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {

        // dd($request->all());
        if ($request->hasAny('images')) {
            // dd('has image');
            $destinationPath_for_news = 'backend/images/news/';
            //background
            $news_image_file = $request->file('images');
            $news_image = image_upload($news_image_file, $destinationPath_for_news);
            $request->request->add(['image'=>$news_image]);


        }

        // dd($request->all());
        $news->update($request->except('_token'));
        return redirect()->route('news.index')->with('info','News Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();
        return redirect(route('news.index'))->with('error','news deleted successfully');
    }

    private function fetch_news_data()
    {
        $news_data = News::all();
        return $news_data;
    }
}
