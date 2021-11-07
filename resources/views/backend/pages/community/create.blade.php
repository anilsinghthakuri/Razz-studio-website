@extends('backend.layouts.backend_master')

@section('title','Community Create')


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

                        <form action="{{route('community.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <img src="" id="profile-img-tag" width="200px" />
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" name="images" id="profile-img"
                                    placeholder="Select image" aria-describedby="fileHelpId" required>
                            </div>
                            <div class="form-group">
                                <label for="title"> Title</label>
                                <input type="text" class="form-control" name="title" id="title"
                                    aria-describedby="helpId" placeholder="Enter community title" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Community</label>
                                <input type="text" class="form-control" name="community_name" id="title"
                                    aria-describedby="helpId" placeholder="Enter Community Name " required>
                            </div>
                            <div class="form-group">
                                <label for="desc">Details</label>
                                <textarea class="form-control" name="desc" id="desc" rows="8" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>

            </div>
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
