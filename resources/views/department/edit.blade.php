@extends('layout')
@section('content')

    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Update Department
                <a href="{{url('admin/department')}}" class="float-right btn btn-success btn-sm">View All</a>
                </h6>
            </div>
            <div class="card-body">
                @if(Session::has('success'))
                    <p class="text-success"> {{session('success')}} </p>
                @endif
                <div class="table-responsive">
                    <form method="post" action="{{url('admin/department/'.$data->id)}}">
                        @csrf
                        @method('put')
                        <table class="table table-bordered">
                            <tr>
                                <th>Title</th>
                                <td><input value="{{$data->title}}" name="title" type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Details</th>
                                <td><textarea value="{{$data->detail}}"  name="detail" class="form-control"></textarea><td>
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