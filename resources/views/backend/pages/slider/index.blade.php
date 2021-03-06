@extends('backend.layouts.backend_master')

@section('title','Slider View')


@section('contents')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-success">
                    <div class="card-body">
                        <div class="row">
                            @foreach ($slider_data as $item)
                                <div class="col-md-12 col-lg-6 col-xl-4">
                                    <div class="card mb-2 bg-gradient-dark">
                                        <img class="card-img-top" src="{{asset('backend/images/slider/'.$item->image)}}"
                                            alt="Dist Photo 1">
                                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                                            <h1 class=" text-danger bg-white ">{{Str::limit($item->heading,15, '...')}}</h1>
                                            <p class="card-text text-white pb-2 pt-1">{{Str::limit($item->desc,8, '...')}}</p>
                                            <form action="{{route('slider.destroy',$item->id)}}" method="post" id="form1">
                                                @csrf
                                            <a href="{{route('slider.edit',$item->id)}}" class="text-white"><i class="fas fa-edit"
                                                    aria-hidden="true"></i></a>
                                                @method('DELETE')
                                            <button type="submit" class="btn-danger" ><i class="fas fa-trash" aria-hidden="true"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection



