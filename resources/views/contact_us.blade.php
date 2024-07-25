@extends('frontlayout')
@section('content')

<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                <div class="card-header">
                    <h3 class="card-title  text-center mt-4" style="color: #164863;">Contact Us</h3>
                    <form method="post" action="{{url('customer/save_contact_us')}}" enctype="multipart/form-data">
                    @csrf
                        <table class="table table-bordered">
                            <tr>
                                <th>Full Name</th>
                                <td><input type="text" name="full_name" class="form-control" required></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><input type="email" name="email" class="form-control" required></td>
                            </tr>
                            <tr>
                                <th>Subject</th>
                                <td><input type="text" name="subject" class="form-control" required></td>
                            </tr>
                            <th>Message</th>
                            <td> <textarea name="message" rows="8" class="form-control"></textarea></td>
                            <tr>
                                <td colspan="2"><input type="submit" class="btn btn-primary"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection