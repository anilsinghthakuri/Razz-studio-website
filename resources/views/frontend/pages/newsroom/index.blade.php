@extends('frontend.layouts.frontend_master')

@section('frontend_contents')
    <section class="inner__header">
        <div class="inner__header--images">
            <div class="container-fluid">
                <div class="inner__header--pageName">
                    <h2>Newsroom</h2>
                    <p><a href="#">Home</a><i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i>
                        <span>Newsroom</span> </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section news">
        <div class="core__work section__Pt section__Pb">
            <div class="container">
                <div class="section__title ">
                    <h4 class="mb-3">NEWS AND UPDATES</h4>
                    <h2>Corporate news</h2>
                </div>
                <div class="row mb-5">
                    @foreach ($news_data as $item)
                        @if ($item->news_group == 'Corporate')
                            <div class="col-md-4">
                                <div class="work-item mb-4">


                                    <img class="news-img " alt="Vue logo" src="{{asset('backend/images/news/'.$item->image)}}">
                                    <div class="work_box ">
                                        <div class=" d-flex justify-content-between align-items-center mb-3">
                                            <span><i aria-hidden="true" class="far fa-user"></i> {{$item->news_type}}</span>
                                            <span><i class="fas fa-calendar-week"></i> {{$item->created_at}}</span>
                                        </div>
                                        <h3 class="box-title mb-3">
                                            <a href="#">{{$item->title}}</a>
                                        </h3>
                                        <a class="work-readmore" href="{{route('frontend.newsroom_show',$item->id)}}"><i class="fas fa-arrow-right"></i></a>
                                    </div>



                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="section__title ">
                    <h4 class="mb-3">NEWS AND UPDATES</h4>
                    <h2>Mentions</h2>
                </div>
                <div class="row ">

                    @foreach ($news_data as $item)
                    @if ($item->news_group == 'Mentions')
                        <div class="col-md-4">
                            <div class="work-item mb-4">


                                <img class="news-img " alt="Vue logo" src="{{asset('backend/images/news/'.$item->image)}}">
                                <div class="work_box ">
                                    <div class=" d-flex justify-content-between align-items-center mb-3">
                                        <span><i aria-hidden="true" class="far fa-user"></i> {{$item->news_type}}</span>
                                        <span><i class="fas fa-calendar-week"></i> {{$item->created_at}}</span>
                                    </div>
                                    <h3 class="box-title mb-3">
                                        <a href="#">{{$item->title}}</a>
                                    </h3>
                                    <a class="work-readmore" href="{{route('frontend.newsroom_show',$item->id)}}"><i class="fas fa-arrow-right"></i></a>
                                </div>



                            </div>
                        </div>
                    @endif
                @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection

