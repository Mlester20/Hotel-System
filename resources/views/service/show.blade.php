@extends('layout')
@section('content')

    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Service Detail
                <a href="{{url('admin/service')}}" class="float-right btn btn-success btn-sm">View All</a>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>Title</th>
                                <td> {{$data->full_name}} </td>
                            </tr>
                            <tr>
                                <th>Profile</th>
                                <td><img style="width:100px; height: 100px;" src="{{ asset('storage/images/' . basename($data->photo)) }}"></td>
                            </tr>
                            <tr>
                                <th>Small Detail</th>
                                <td> {{$data->small_desc}} </td>
                            </tr>
                            <tr>
                                <th>Full Detail</th>
                                <td> {{$data->detail_desc}} </td>
                            </tr>
                        </table>
                </div>
            </div>
        </div>
    </div>

@endsection