@extends('backend.layouts.backend_master')

@section('title','Dashboard')


@section('contents')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-success">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <div class="card mb-2 bg-gradient-dark">
                                    <img class="card-img-top" src="{{asset('backend/dist/img/photo1.png')}}"
                                        alt="Dist Photo 1">
                                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                                        <h5 class="card-title text-primary text-white">Card Title</h5>
                                        <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet,
                                            consectetur adipisicing elit sed do eiusmod tempor.</p>
                                        <span><a href="#" class="text-white"><i class="fas fa-trash"
                                                    aria-hidden="true"></i></a></span>
                                        <span><a href="#" class="text-white"><i class="fas fa-edit"
                                                    aria-hidden="true"></i></a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <div class="card mb-2 bg-gradient-dark">
                                    <img class="card-img-top" src="{{asset('backend/dist/img/photo1.png')}}"
                                        alt="Dist Photo 1">
                                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                                        <h5 class="card-title text-primary text-white">Card Title</h5>
                                        <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet,
                                            consectetur adipisicing elit sed do eiusmod tempor.</p>
                                        <span><a href="#" class="text-white"><i class="fas fa-trash"
                                                    aria-hidden="true"></i></a></span>
                                        <span><a href="#" class="text-white"><i class="fas fa-edit"
                                                    aria-hidden="true"></i></a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <div class="card mb-2 bg-gradient-dark">
                                    <img class="card-img-top" src="{{asset('backend/dist/img/photo1.png')}}"
                                        alt="Dist Photo 1">
                                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                                        <h5 class="card-title text-primary text-white">Card Title</h5>
                                        <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet,
                                            consectetur adipisicing elit sed do eiusmod tempor.</p>
                                        <span><a href="#" class="text-white"><i class="fas fa-trash"
                                                    aria-hidden="true"></i></a></span>
                                        <span><a href="#" class="text-white"><i class="fas fa-edit"
                                                    aria-hidden="true"></i></a></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
