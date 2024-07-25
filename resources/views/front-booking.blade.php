@extends('frontlayout')
@section('content')

<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                <div class="card-header">
        <h3 class="card-title text-center mt-4 text-dark">Room Booking</h3>       
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
                                <input type="hidden" name="customer_id" value="{{session('data')[0]->id}}">
                                <input type="hidden" name="ref" value="front">
                                <input type="submit" class="btn btn-primary" value="Submit"/>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>  
    </div>
    </div>
    </div>
    </div>
    </div>

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