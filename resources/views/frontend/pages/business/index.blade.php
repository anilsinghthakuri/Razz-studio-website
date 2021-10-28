
@extends('frontend.layouts.frontend_master')

@section('frontend_contents')

    <section class="inner__header">
        <div class="inner__header--images">
            <div class="container-fluid">
                <div class="inner__header--pageName">
                    <h2>Business</h2>
                    <p><a href="{{route('frontend.home')}}">Home</a><i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i>
                        <span>Business</span> </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section team ">
        <div class="core__team section__Pt section__Pb">
            <div class="container">
                <!-- <div class="section__title text-center">
                    <h4 class="mb-3">Team Member</h4>
                    <h2>Executive Team</h2>
                </div> -->
                <div class="row">
                    @foreach (fetch_business_data() as $item)
                        <div class="col-md-6">
                            <div class="team-item mb-4">
                                <img class="business-img " alt="Vue logo" src="{{asset('backend/images/business/'.$item->image)}}">
                                <div class="team_box team_box--inner team_box--business ">
                                    <div>
                                        <h3 class="box-title">
                                            <a href="#">{{$item->title}}</a>
                                        </h3>
                                        <p>{{Str::limit($item->desc,50, '...')}}</p>
                                    </div>
                                    <a class="work-readmore" href="{{route('frontend.business_show',$item->id)}}"><i class="fas fa-arrow-right"> </i> Read More </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection



