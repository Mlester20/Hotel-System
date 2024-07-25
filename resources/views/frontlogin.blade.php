@extends('frontlayout')
@section('content')

<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                <div class="card-header">
                    <h3 class="text-center" style="color: #164863;">Login</h3>
                </div>
                <div class="card-body">
                    @if(Session::has('error'))
                        <p class="text-danger">{{session('error')}}</p>
                    @endif
                    <form method="post" action="{{url('customer/login')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Log In</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <small>Don't have an account? <a href="{{url('register')}}">Sign Up</a></small>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
