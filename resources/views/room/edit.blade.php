@extends('layout')
@section('content')

    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Room
                <a href="{{url('admin/rooms')}}" class="float-right btn btn-success btn-sm">View All</a>
                </h6>
            </div>
            <div class="card-body">
                @if(Session::has('success'))
                    <p class="text-success"> {{session('success')}} </p>
                @endif
                <div class="table-responsive">
                    <form method="post" action="{{url('admin/rooms/'.$data->id)}}">
                        @csrf
                        @method('put')
                        <table class="table table-bordered">
                            <tr>
                                <th>Select Room Type</th>
                                <td>
                                    <select name="rt_id" class="form-control">
                                        <option value="0">--- Select ---</option>
                                        @foreach($roomtypes as $roomtype)
                                        <option @if($data->room_type_id == $roomtype->id) selected @endif value="{{$roomtype->id}} "> {{$roomtype->title}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td><input value="{{$data->title}}" name="title" type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" class="btn btn-primary" value="update"/>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection