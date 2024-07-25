@extends('frontlayout')
@section('content')

    <div class="container w-50 my-4">
        <h3 class="card-title text-center" style="color: aqua;">Add Testimonial</h3>
        <div class="card border-0 mt-4 shadow">
            <div class="card-body">
                <h3 class="card-title text-center" style="color: #164863;">Add Testimonial</h3>
                @if(Session::has('success'))
                <p class="text-success">{{session('success')}}</p>
            @endif
            <table class="table table-bordered">
                <form method="post" action="{{url('customer/save_testimonial')}}" enctype="multipart/form-data">
                    @csrf
                    <table class="table table-bordered">
                        <tr>
                            <th>Testimonial</th>
                            <td><input type="text" name="testi_cont" class="form-control" required></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" class="btn btn-primary"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

@endsection
