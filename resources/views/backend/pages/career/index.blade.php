@extends('backend.layouts.backend_master')

@section('title','Contact')



@push('style')

@include('backend.layouts.partials.__backend_datatable_style')

@endpush

@section('contents')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <table class="table table-striped" id="datatable">
                    <thead >
                        <tr>
                            <th>S.N</th>
                            <th>Email</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($career_data as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->created_at}}</td>
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

@push('script')
    @include('backend.layouts.partials.__backend_datatable_script')
@endpush
