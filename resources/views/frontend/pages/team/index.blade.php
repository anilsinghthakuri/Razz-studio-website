@extends('frontend.layouts.frontend_master')

@section('frontend_contents')

    <section class="inner__header">
        <div class="inner__header--images">
            <div class="container-fluid">
                <div class="inner__header--pageName">
                    <h2>Teams</h2>
                    <p><a href="{{route('frontend.home')}}">Home</a><i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i>
                        <span>Teams</span> </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section team ">
        <div class="core__team section__Pt section__Pb">
            <div class="container">
                <div class="section__title text-center">
                    <h4 class="mb-3">Team Member</h4>
                    <h2>Executive Team</h2>
                </div>
                <div class="row">
                    @foreach ($team_data as $item)
                        <div class="col-md-4">
                            <div class="team-item mb-4">


                                <img class="team-img " alt="Vue logo" src="{{asset('backend/images/team/'.$item->image)}}">
                                <div class="team_box d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="box-title">
                                            <a href="#">{{$item->name}}</a>
                                        </h3>
                                        <h4 class="team_position">{{$item->designation}}</h4>

                                    </div>

                                    <a class="team-readmore" href="{{route('frontend.team_show',$item->id)}}"><i class="fas fa-share-alt"></i></a>
                                </div>
                                <div class="member__detail">
                                    <ul>
                                        <li>
                                            <a href="{{$item->facebook}}"><i class="fab fa-facebook-f"></i></a>

                                        </li>
                                        <li>

                                            <a href="{{$item->twitter}}"><i class="fab fa-twitter"></i></a>

                                        </li>
                                        <li>

                                            <a href="{{$item->instagram}}"> <i class="fab fa-instagram"></i></a>

                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
