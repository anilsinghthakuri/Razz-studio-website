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

                        <form action="{{route('team.update',$team)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <img src="{{asset('backend/images/team/'.$team->image)}}" id="profile-img-tag" width="200px" />
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" name="images" id="profile-img"
                                    placeholder="Select image" aria-describedby="fileHelpId" value="{{$team->image}}">
                            </div>
                            <div class="form-group">
                                <label for="title">Name</label>
                                <input type="text" class="form-control" name="name" id="title"
                                    aria-describedby="helpId" placeholder="Enter Name" value="{{$team->name}}" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Designation</label>
                                <input type="text" class="form-control" name="designation" id="title"
                                    aria-describedby="helpId" placeholder="Enter Designation" value="{{$team->designation}}" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Facebook</label>
                                <input type="text" class="form-control" name="facebook" id="title"
                                    aria-describedby="helpId" placeholder="Enter Facebook link"  value="{{$team->facebook}}">
                            </div>
                            <div class="form-group">
                                <label for="title">Twitter</label>
                                <input type="text" class="form-control" name="twitter" id="title"
                                    aria-describedby="helpId" placeholder="Enter Twitter Link" value="{{$team->twitter}}" >
                            </div>
                            <div class="form-group">
                                <label for="title">Instagram</label>
                                <input type="text" class="form-control" name="instagram" id="title"
                                    aria-describedby="helpId" placeholder="Enter Instagram link" value="{{$team->instagram}}" >
                            </div>
                            <div class="form-group">
                                <label for="desc">Description</label>
                                <textarea class="form-control" name="desc" id="desc" rows="4" required>{{$team->desc}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{route('team.index')}}"><button type="button" class="btn btn-danger">Cancel</button></a>
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
