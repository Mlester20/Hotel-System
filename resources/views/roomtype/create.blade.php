@extends('layout')
@section('title', 'Add New')
@section('content')

    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add RoomType
                <a href="{{url('admin/roomtype')}}" class="float-right btn btn-success btn-sm">View All</a>
                </h6>
            </div>
            <div class="card-body">

                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <p class="text-danger">{{$error}}</p>
                    @endforeach
                @endif

                @if(Session::has('success'))
                    <p class="text-success"> {{session('success')}} </p>
                @endif
                <div class="table-responsive">
                    <form method="post" enctype="multipart/form-data" action="{{url('admin/roomtype')}}">
                        @csrf
                        <table class="table table-bordered">
                            <tr>
                                <th>Title</th>
                                <td><input name="title" type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td><input name="price" type="number" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Details</th>
                                <td><textarea name="details" class="form-control"></textarea></td>
                            </tr>
                            <tr>
                                <th>Gallery</th>
                                <td><input type="file" multiple name="imgs[]"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" class="btn btn-primary"/>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection