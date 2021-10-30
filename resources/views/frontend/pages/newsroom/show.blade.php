@extends('frontend.layouts.frontend_master')

@section('frontend_contents')

<section class="inner__header">
    <div class="inner__header--images">
        <div class="container-fluid">
            <div class="inner__header--pageName">
                <h2>Detail Page</h2>
                <p><a href="{{route('frontend.home')}}">Home</a><i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i>
                    <a href="{{route('frontend.newsroom')}}"> <span>Newsroom</span> </a><i class="fas fa-chevron-right"></i><span>{{$news->title}}</span></p>
            </div>
        </div>
    </div>
</section>


<div class="container">
    <section class="section section__Pt section__Pb  about">
        <div class="core__feature">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-contain pb-3">
                            <div class="section__title ">

                                <h2>{{$news->title}}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="about-img " alt="Razz" src="{{asset('backend/images/news/'.$news->image)}}">
                    </div>
                    <div class="col-md-6">
                        <div class="about-contain pt-5">

                            <p class="content-desc">{{$news->news}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
