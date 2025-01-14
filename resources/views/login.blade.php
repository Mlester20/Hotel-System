<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Login</title>
    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <style>
        .card {
            margin-top: 100px; /* Adjust the top margin as needed */
            background-color: rgba(255, 255, 255, 0.7); /* Adjust the alpha value for transparency */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); /* Adjust shadow properties as needed */
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.9); /* Adjust the alpha value for transparency */
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>

<body style="background-image: url('{{ asset('images/download.jpg') }}'); background-size: cover; background-position: center;">

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5 form-container">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back Admin!</h1>
                                        <hr>
                                        <p>Sign in to start your session</p>
                                    </div>
                                    <form class="user" method="post" action="{{ url('admin/login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input name="username" type="text"
                                                class="form-control form-control-user" @if(Cookie::has('adminuser')) value="{{Cookie::get('adminuser')}}" @endif id="username"
                                                aria-describedby="emailHelp" placeholder="Enter Username">
                                        </div>
                                        <div class="form-group">
                                            <input name="password" type="password"
                                                class="form-control form-control-user" @if(Cookie::has('adminpass')) value="{{Cookie::get('adminpass')}}" @endif  id="exampleInputPassword"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" @if(Cookie::has('adminuser')) checked @endif name="rememberme" 
                                                class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                            </div>
                                        </div>
                                        <input type="submit"
                                            class="btn btn-primary btn-user btn-block" value="Login">
                                        <hr>
                                    </form>
                                    @if($errors->any())
                                        @foreach($errors->all() as $error)
                                            <p class="text-danger"> {{ $error }} </p>
                                        @endforeach
                                    @endif

                                    @if(Session::has('message'))
                                        <p class="text-danger"> {{ session('message') }} </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>

</html>
