

@extends('frontend.layouts.frontend_master')


@section('frontend_contents')

    <section class="inner__header">
        <div class="inner__header--images">
            <div class="container-fluid">
                <div class="inner__header--pageName">
                    <h2>Community</h2>
                    <p><a href="#">Home</a><i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i>
                        <span>community</span> </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section news">
        <div class="core__work section__Pt section__Pb">
            <div class="container">

                <div class="row mb-5">
                    @foreach ($community_data as $item)
                        <div class="col-md-12">
                            <div class="work-item d-flex mb-5">


                                <img class="community-img " alt="Vue logo" src="{{asset('backend/images/community/'.$item->image)}}">
                                <div class="work_box ">
                                    <div class=" d-flex justify-content-between align-items-center mb-3">
                                        <span><i aria-hidden="true" class="far fa-user"></i> {{$item->community_name}}</span>
                                        <span><i class="fas fa-calendar-week"></i> {{$item->created_at}}</span>
                                    </div>
                                    <h3 class="box-title box-title__community mb-3">
                                        <a href="{{route('frontend.community_show',$item->id)}}"> {{Str::limit($item->title,30, '...')}}</a>
                                    </h3>
                                    <p>
                                        {{Str::limit($item->desc,75, '...')}}
                                    </p>
                                    <a class="work-readmore" href="{{route('frontend.community_show',$item->id)}}"><i class="fas fa-arrow-right"></i> Read More</a>
                                </div>



                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>

@endsection


