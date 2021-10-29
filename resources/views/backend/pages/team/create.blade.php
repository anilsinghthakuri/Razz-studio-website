@extends('backend.layouts.backend_master')

@section('title','Team Create')


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

                        <form action="{{route('team.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <img src="" id="profile-img-tag" width="200px" />
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" name="images" id="profile-img"
                                    placeholder="Select image" aria-describedby="fileHelpId" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Name</label>
                                <input type="text" class="form-control" name="name" id="title"
                                    aria-describedby="helpId" placeholder="Enter Name" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Designation</label>
                                <input type="text" class="form-control" name="designation" id="title"
                                    aria-describedby="helpId" placeholder="Enter Designation" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Facebook</label>
                                <input type="text" class="form-control" name="facebook" id="title"
                                    aria-describedby="helpId" placeholder="Enter Facebook link" >
                            </div>
                            <div class="form-group">
                                <label for="title">Twitter</label>
                                <input type="text" class="form-control" name="twitter" id="title"
                                    aria-describedby="helpId" placeholder="Enter Twitter Link" >
                            </div>
                            <div class="form-group">
                                <label for="title">Instagram</label>
                                <input type="text" class="form-control" name="instagram" id="title"
                                    aria-describedby="helpId" placeholder="Enter Instagram link" >
                            </div>
                            <div class="form-group">
                                <label for="desc">Description</label>
                                <textarea class="form-control" name="desc" id="desc" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">Team List</h5>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($team_data as $item)
                                    <tr>
                                        <td scope="row">{{$item->name}}</td>
                                        <td scope="row">{{$item->designation}}</td>
                                        <td>
                                            <form action="{{route('team.destroy',$item->id)}}" method="post" id="form1">
                                                @csrf
                                            <a href="{{route('team.edit',$item->id)}}" class="text-primary"><i class="fas fa-edit"
                                                    aria-hidden="true"></i></a>
                                                @method('DELETE')
                                            <button type="submit" class="btn-danger" ><i class="fas fa-trash" aria-hidden="true"></i></button>
                                            </form>
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
