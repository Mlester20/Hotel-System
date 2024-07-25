@extends('layout')
@section('content')

    <div class="container-fluid">
         <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> {{$staff->full_name}} Payment
                <a href="{{ url('admin/staff/payment/'.$staff->id.'/add') }}" class="float-right btn btn-success btn-sm">Add New Payment</a>
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
                                <th>Amount</th>
                                <th>Payment Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($data)
                            @foreach($data as $datas)
                            <tr>
                                    <td>{{ $datas->id }}</td>
                                    <td>{{ $datas->amount }}</td>
                                    <td>{{ $datas->payment_date }}</td>
                                <td>
                                    <a onclick="return confirm('Are you sure you want to delete this data?')" href="{{url('admin/staff/payment/'.$datas->id.'/'.$staff_id).'/delete'}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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