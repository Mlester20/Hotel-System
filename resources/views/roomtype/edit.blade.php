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
                @if(Session::has('success'))
                    <p class="text-success"> {{session('success')}} </p>
                @endif
                <div class="table-responsive">
                    <form method="post" action="{{url('admin/roomtype/'.$data->id)}}">
                        @csrf
                        @method('put')
                        <table class="table table-bordered">
                            <tr>
                                <th>Title</th>
                                <td><input value="{{$data->title}}" name="title" type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td><input value="{{$data->price}}" name="price" type="number" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Details</th>
                                <td><textarea name="details" class="form-control">{{$data->detail}}</textarea></td>
                            </tr>
                            <tr>
                                <th>Gallery Image</th>
                                <td>
                                    <table class="table tabled-bordered">
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

@section('scripts')

    <script type="text/javascript">
        $(document).ready(function(){
            $(".delete-image").on('click', function(){
                var _img_id = $(this).attr('data-image-id');
                var _vm = $(this);
                $.ajax({
                    url:"{{url('admin/roomtypeimage/delete')}}/" + _img_id,
                    dataType:'json',
                    beforeSend:function(){
                        _vm.addClass('disabled');
                    },
                    success:function(res){
                        if(res === true){
                            $(".imgcol" + _img_id).remove();
                        }
                        vm.removeClass('disabled');
                    }
                });
            });
        })
    </script>

@endsection

@endsection