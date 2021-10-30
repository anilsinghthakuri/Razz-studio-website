@extends('backend.layouts.backend_master')

@section('title','News Edit')


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

                        <form action="{{route('news.update',$news)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <img src="{{asset('backend/images/news/'.$news->image)}}" id="profile-img-tag" width="200px" />
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" name="images" id="profile-img"
                                    placeholder="Select image" aria-describedby="fileHelpId"  >
                            </div>
                            <div class="form-group">
                                <label for="title"> News Title</label>
                                <input type="text" class="form-control" name="title" id="title"
                                    aria-describedby="helpId" placeholder="Enter News title" required value="{{$news->title}}">
                            </div>
                            <div class="form-group">
                              <label for="news_group">News group</label>
                              <select class="form-control" name="news_group" id="news_group" required>
                                  <option  disabled value="">Choose group</option>
                                  @foreach (news_group() as $item)
                                    <option @if ($news->news_group == $item)
                                        selected
                                    @endif>{{$item}}</option>
                                  @endforeach

                              </select>
                            </div>
                            <div class="form-group">
                                <label for="title">News Type</label>
                                <input type="text" class="form-control" name="news_type" id="title"
                                    aria-describedby="helpId" placeholder="Enter Type " value="{{$news->news_type}}" required>
                            </div>
                            <div class="form-group">
                                <label for="desc">News</label>
                                <textarea class="form-control" name="news" id="desc" rows="8" required>{{$news->news}}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{route('news.index')}}" class="btn btn-danger">Cancel</a>
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
                                @foreach ($news_data as $item)
                                    <tr>
                                        <td scope="row">{{$item->title}}</td>
                                        <td>
                                            <form action="{{route('news.destroy',$item->id)}}" method="post" id="form1">
                                                @csrf
                                            <a href="{{route('news.edit',$item->id)}}" class="text-primary"><i class="fas fa-edit"
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
