@extends('layout')
@section('title', 'Add New')
@section('content')
<body style="color: #164863;">
    

    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Bookings
                <a href="{{url('admin/booking')}}" class="float-right btn btn-success btn-sm">View All</a>
                </h6>
            </div>
            <div class="card-body">

                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <p class="text-danger"> {{ $error }} </p>
                    @endforeach
                @endif

                @if(Session::has('success'))
                    <p class="text-success"> {{session('success')}} </p>
                @endif
                <div class="table-responsive">
                    <form method="post" enctype="multipart/form-data" action="{{url('admin/booking')}}">
                        @csrf
                        <table class="table table-bordered">
                            <tr>
                                <th>Select Customers<span class="text-danger">*</span></th>
                                <td>
                                    <select name="customer_id" class="form-control">
                                        <option value="">--- Select Customer ---</option>
                                        @foreach($data as $customer)
                                            <option value="{{$customer->id}}"> {{ $customer->full_name }} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Checkin Date<span class="text-danger">*</span></th>
                                <td><input name="checkin_date" type="date" class="form-control checkin_date"></td>
                            </tr>
                            <tr>
                                <th>Checkout Date<span class="text-danger">*</span></th>
                                <td><input name="checkout_date" type="date" class="form-control checkout_date"></td>
                            </tr>
                            <tr>
                                <th>Available Rooms<span class="text-danger">*</span></th>
                                <td>
                                    <select class="form-control room-list" name="room_id">
                                        
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Total Adults  <span class="text-danger">*</span></th>
                                <td><input name="total_adults" type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Total Children</th>
                                <td><input name="total_children" type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" class="btn btn-primary" value="Submit"/>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
@section('scripts')

    <!-- <script>
        $(document).ready(function(){
            $(".checkin_date").on('blur', function(){
                var _checkindate = $(this).val();
                //ajax
                $.ajax({
                    url:"{{url('admin/booking')}}/available-rooms/"+ _checkindate,
                    dataType: 'json',
                    beforeSend:function(){
                        $(".room-list").html('<option>--- Loading ---</option>');
                    },
                    success:function(res){
                        var _html = '';
                        $.each(res.data,function(index,row){
                            _html+='<option value="'+row.id+'">'+row.title+'</option>'
                        });
                        $(".room-list").html(_html);
                    }
                });
            });
        });
    </script> -->

    <script type="text/javascript">
    $(document).ready(function(){
        $(".checkin_date").on('blur', function(){
            var _checkindate = $(this).val();
            //ajax
            $.ajax({
                url:"{{url('admin/booking')}}/available-rooms/"+ _checkindate,
                dataType: 'json',
                beforeSend:function(){
                    $(".room-list").html('<option>--- Loading ---</option>');
                },
                success:function(res){
                    var _html = '';
                    $.each(res.data,function(index,row){
                        _html+='<option value="'+row.room.id+'">'+row.room.title+'-'+row.roomtype.title+'</option>';
                    });
                    $(".room-list").html(_html);
                }
            });
        });
    });
</script>

@endsection

@endsection