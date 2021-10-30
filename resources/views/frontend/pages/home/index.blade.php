
@extends('frontend.layouts.frontend_master')


@section('frontend_contents')

    <header class="hero-text">
        <div class="hero" data-arrows="true" data-autoplay="true">
            <!--.hero-slide-->
            @foreach (fetch_sliderdata() as $item)
                <div class="hero-slide">
                    <img alt="Mars Image" class="img-responsive cover" src="{{asset('backend/images/slider/'.$item->image)}}">
                    <div class="header-content text-white position-absolute slide-content col-lg-4">
                        <h2 class="mb-4">{{$item->heading}}</h2>
                        <p>{{$item->desc}} </p>
                        <a class="btn btn-primary btn-lg w-max mt-2" href="#" tabindex="0">Read More</a>
                    </div>
                </div>
            @endforeach


        </div>
        <!--.hero-->
    </header>

    <div class="container">
        <section class="section section__Pt section__Pb  about">
            <div class="core__feature">
                <div class="container">

                    <div class="row">
                        <div class="col-md-12 col-lg-6 ">

                            <img class="about-img " alt="Vue logo" src="{{asset('frontend/images/01.jpg')}}">

                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="about-contain p-3">

                                <div class="section__title ">
                                    <h4 class="mb-3">about us</h4>
                                    <h2>Our Mission and Vission</h2>
                                </div>
                                <p class="content-desc">Libero aliquam eiget rhoncus elit quis mattis tos neque ullco
                                    qua
                                    praesent interdum orc torristique aenean at dictumst velit fames molestie tristique
                                    magna sociosqu ine rhoncuis in cubilia magno senectus sociis tortor enim.</p>
                                <p class="content-desc">Libero aliquam eiget rhoncus elit quis mattis tos neque ullco
                                    qua
                                    praesent interdum orc torristique aenean at dictumst velit</p>
                                <div class="icon-box-btn">
                                    <a class="inline-btn" href="detail.php"><i class="fas fa-arrow-right"></i><span> Read
                                            More</span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>

    <section class="section work">
        <div class="core__work section__Pt section__Pb">
            <div class="container">
                <div class="section__title text-center">
                    <h4 class="mb-3">Work showcase</h4>
                    <h2>Our Portfolio</h2>
                </div>
                <div class="row">
                    @foreach (fetch_business_data_front() as $item)

                    <div class="col-md-12 col-lg-4">
                        <div class="work-item mb-4">

                            <img class="work-img " alt="Vue logo" src="{{asset('backend/images/business/'.$item->image)}}">
                            <div class="work_box d-flex justify-content-between align-items-center">
                                <h3 class="box-title">
                                    <a href="#">{{$item->title}}</a>
                                </h3>
                                <a class="work-readmore" href="{{route('frontend.business_show',$item->id)}}"><i class="fas fa-arrow-right"></i></a>
                            </div>

                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <section class="section news">
        <div class="core__work section__Pt section__Pb">
            <div class="container">
                <div class="section__title ">
                    <h4 class="mb-3">Latest News</h4>
                    <h2>Recent News</h2>
                </div>
                <div class="row">
                    @foreach (fetch_news_data_front() as $item)
                        <div class="col-md-12 col-lg-4">
                            <div class="work-item mb-4">

                                <img class="news-img " alt="Vue logo" src="{{asset('backend/images/news/'.$item->image)}}">
                                <div class="work_box ">
                                    <div class=" d-flex justify-content-between align-items-center mb-3">
                                        <span><i aria-hidden="true" class="far fa-user"></i> {{$item->news_type}}</span>
                                        <span><i class="fas fa-calendar-week"></i> {{$item->created_at}}</span>
                                    </div>
                                    <h3 class="box-title mb-3">
                                        <a href="{{route('frontend.newsroom_show',$item->id)}}">{{$item->title}}</a>
                                    </h3>
                                    <a class="work-readmore" href="{{route('frontend.newsroom_show',$item->id)}}"><i class="fas fa-arrow-right"></i></a>
                                </div>

                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>

@endsection
