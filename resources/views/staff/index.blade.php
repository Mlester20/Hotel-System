@extends('layout')
@section('content')

    <div class="container-fluid">
         <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Staffs
                    <a href="{{url('admin/staff/create')}}" class="float-right btn btn-success btn-sm">Add new</a>
                </h6>
            </div>
            <div class="card-body">
                @if(Session::has('success'))
                    <p class="text-success"> {{session('success')}} </p>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Photo</th>
                                <th>Department</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($data)
                            @foreach($data as $datas)
                            <tr>
                                    <td>{{ optional($datas)->id }}</td>
                                    <td>{{ optional($datas)->full_name }}</td>
                                    <td><img style="width:100px; height: 100px;" src="{{ asset('storage/images/' . basename($datas->photo)) }}"></td>
                                    <td>{{ optional ($datas)->department->title }}</td>
                                <td>
                                    <a href="{{url('admin/staff/'.$datas->id)}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="{{url('admin/staff/'.$datas->id).'/edit'}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="{{ url('admin/staff/payments/'.$datas->id) }}" class="btn btn-dark btn-sm"><i class="fa fa-credit-card"></i></a>
                                    <a onclick="return confirm('Are you sure you want to delete this data?')" href="{{url('admin/staff/'.$datas->id).'/delete'}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @section('scripts')
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/datatables-demo.js')}}"></script>

@endsection
@endsection