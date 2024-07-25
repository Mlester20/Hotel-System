@extends('layout')
@section('content')

    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Room
                <a href="{{url('admin/roomtype')}}" class="float-right btn btn-success btn-sm">View All</a>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>Title</th>
                            <td> {{$data->title}} </td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td> ₱{{$data->price}} </td>
                        </tr>
                        <tr>
                            <th>Details</th>
                            <td>{{$data->detail}}</td>
                        </tr>
                        <tr>
                            <th>Gallery</th>
                            <td>
                                <table class="table table-bordered mt-3">
                                    <tr>
                                        @foreach($data->roomtypeimgs as $img)
                                            <td class = "imgcol {{$img->id}}">
                                                <img style="width:150px; height: 150px; border-radius: 10px;" src="{{ asset('storage/images/' . basename($img->img_src)) }}">
                                                <p class="mt-2"><button type="button" onclick="return confirm('are you sure you want to delete this image?')" class="btn btn-danger btn-sm delete-image" data-image-id = "{{$img->id}}"><i class="fa fa-trash"></i></button></p>                                        
                                            </td>
                                        @endforeach
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection