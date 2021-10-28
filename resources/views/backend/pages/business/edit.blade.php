@extends('backend.layouts.backend_master')

@section('title','Business Edit')


@section('contents')

<div class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">Create</h5>
                    </div>
                    <div class="card-body">

                        <form action="{{route('business.update',$business)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <img src="{{asset('backend/images/business/'.$business->image)}}" id="profile-img-tag" width="200px" />
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" name="images" id="profile-img"
                                    placeholder="Select image" aria-describedby="fileHelpId" value="{{$business->image}}">
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title"
                                    aria-describedby="helpId" placeholder="Enter Business title" value="{{$business->title}}" required>
                            </div>
                            <div class="form-group">
                                <label for="desc">Description</label>
                                <textarea class="form-control" name="desc" id="desc" rows="8" required>{{$business->desc}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{route('business.index')}}"><button type="button" class="btn btn-danger">Cancel</button></a>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">Business List</h5>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($business_data as $item)
                                    <tr>
                                        <td scope="row">{{$item->title}}</td>
                                        <td>
                                            <a href="#"> <i class="fas fa-edit"></i></a>
                                            <a href="#"> <i class="fas fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@push('script')

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function () {
        readURL(this);
    });

</script>

@endpush
