@extends('layout')
@section('content')

    <div class="container-fluid">
         <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Bookings
                    <a href="{{url('admin/booking/create')}}" class="float-right btn btn-success btn-sm">Add new</a>
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
                                <th>Customer</th>
                                <th>Room No.</th>
                                <th>Room Type</th>
                                <th>CheckIn Date</th>
                                <th>CheckOut Date</th>
                                <th>Total Children</th>
                                <th>Total Adult</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $booking)
                                <tr>
                                    <td> {{$booking->id}} </td>
                                    <td> {{$booking->customer->full_name}}  </td>
                                    <td> {{$booking->room->title}}  </td>
                                    <td> {{$booking->room->RoomType->title}} </td>
                                    <td> {{$booking->checkin_date}}  </td>
                                    <td> {{$booking->checkout_date}}  </td>
                                    <td> {{$booking->total_adults}}  </td>
                                    <td> {{$booking->total_children}}  </td>
                                    <td><a href="{{url('admin/booking/'.$booking->id.'/delete')}}" class="btn btn-danger" onclick="return confirm('are you sure you want to delete this booking?')"><i class="fas fa-trash"></i></a></td>
                                </tr>
                            @endforeach
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