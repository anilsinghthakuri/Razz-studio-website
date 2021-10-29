@extends('backend.layouts.backend_master')

@section('title','Contact Message')


@section('contents')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title"> Subject-{{$contact->subject}}</h5>

                            <p class="card-text">
                               {{$contact->message}}
                            </p>
                            <h6>Name:- {{$contact->name}}</h6>
                            <h6>Email:- {{$contact->email}}</h6>
                            <h6>Phone:- {{$contact->phone}}</h6>
                        </div>
                    </div><!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

