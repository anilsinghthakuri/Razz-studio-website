@extends('backend.layouts.backend_master')

@section('title','Contact')


@section('contents')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <table class="table table-striped">
                    <thead >
                        <tr>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($contact_data as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->subject}}</td>
                                <td>{{$item->email}}</td>
                                <td>
                                        <a href="{{route('contact.show',$item->id)}}"><i class="fas fa-eye" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

