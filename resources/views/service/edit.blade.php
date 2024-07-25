@extends('layout')
@section('content')

    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Update Service
                <a href="{{url('admin/service')}}" class="float-right btn btn-success btn-sm">View All</a>
                </h6>
            </div>
            <div class="card-body">
                @if(Session::has('success'))
                    <p class="text-success"> {{session('success')}} </p>
                @endif
                <div class="table-responsive">
                    <form method="post" enctype="multipart/form-data" action="{{url('admin/service/'.$data->id)}}">
                        @csrf
                        @method('put')
                        <table class="table table-bordered">
                            <tr>
                                <th>Title <span class="text-danger">*</span></th>
                                <td><input value="{{$data->title}}" name="title" type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Small Description <span class="text-danger">*</span></th>
                                <td><input value="{{$data->small_desc}}" name="small_desc" type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Detail Description<span class="text-danger">*</span></th>
                                <td><input value="{{$data->detail_desc}}"  name="detail_desc" type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Photo</th>
                                <td>
                                    <input name="photo" type="file">
                                    <input type="hidden" name="prev_photo" value="{{$data->photo}}">
                                    <img src="{{asset('storage/app/images'.$data->photo)}}" alt="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" class="btn btn-primary" value="Edit"/>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection