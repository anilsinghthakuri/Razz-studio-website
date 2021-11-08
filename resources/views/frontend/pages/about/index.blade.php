
@extends('frontend.layouts.frontend_master')

@section('frontend_contents')

    <section class="inner__header">
        <div class="inner__header--images">
            <div class="container-fluid">
                <div class="inner__header--pageName">
                    <h2>About</h2>
                    <p><a href="#">Home</a><i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i>
                        <span>About</span> </p>
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
                            <div class="section__title text-center">
                                <h4 class="mb-3">about us</h4>
                                <h2>A Global Enterprise</h2>
                            </div>
                        </div>

                        @foreach (fetch_about_data() as $item)
                            <div class="col-md-6">
                                <div class="about-contain p-3">
                                    <div class="section__title ">
                                        <h3>About Us</h3>
                                    </div>
                                    <p class="content-desc">{{$item->desc}}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img class="about-img " alt="Vue logo" src="{{asset('backend/images/about/'.$item->image)}}">
                            </div>
                        @endforeach

                        @foreach (fetch_mission_data() as $item)
                            <div class="col-md-6">
                                <div class="about-contain p-3">
                                    <div class="section__title ">
                                        <h4 class="mb-3">about us</h4>
                                        <h2>Our Mission and Vission</h2>
                                    </div>
                                    <p class="content-desc">{{$item->desc}}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img class="about-img " alt="Vue logo" src="{{asset('backend/images/mission/'.$item->image)}}">
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
