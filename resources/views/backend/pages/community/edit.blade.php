@extends('backend.layouts.backend_master')

@section('title','Community Edit')


@section('contents')

<div class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">Edit</h5>
                    </div>
                    <div class="card-body">

                        <form action="{{route('community.update',$community)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <img src="{{asset('backend/images/community/'.$community->image)}}" id="profile-img-tag" width="200px" />
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" name="images" id="profile-img"
                                    placeholder="Select image" aria-describedby="fileHelpId"  >
                            </div>
                            <div class="form-group">
                                <label for="title"> Title</label>
                                <input type="text" class="form-control" name="title" id="title"
                                    aria-describedby="helpId" placeholder="Enter community title" required value="{{$community->title}}">
                            </div>
                            <div class="form-group">
                                <label for="title">Community Name</label>
                                <input type="text" class="form-control" name="community_name" id="title"
                                    aria-describedby="helpId" placeholder="Enter Type " value="{{$community->community_name}}" required>
                            </div>
                            <div class="form-group">
                                <label for="desc">Details</label>
                                <textarea class="form-control" name="community" id="desc" rows="8" required>{{$community->desc}}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{route('community.index')}}" class="btn btn-danger">Cancel</a>
                        </form>
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
