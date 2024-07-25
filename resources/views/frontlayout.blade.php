<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">

</head>
<style>
    body{
        background-color: #164863;
    }
 
</style>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
                <a class="navbar-brand" href="{{url('/')}}">Hotel Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a>
                    <a class="nav-link" href="{{url('page/about_us')}}">About Us</a>
                    <a class="nav-link" href="{{url('page/contact_us')}}">Contact Us</a>
                    <a class="nav-link" aria-current="page" href="#">Services</a>
                    <!-- <a class="nav-link" aria-current="page" href="#">Gallery</a> -->
                    @if(Session::has('customerlogin'))
                        <a href="{{url('customer/add_testimonial')}}" class="nav-link">Testimonial</a>
                        <a class="nav-link" href="{{url('booking')}}">Bookings</a>
                        <a class="nav-link" href="{{url('logout')}}">Logout</a>
                    @else
                        <a class="nav-link" href="{{url('login')}}">Login</a>
                        <a class="nav-link" href="{{url('register')}}">Register</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>
    <main>
         @yield('content')
    </main>


    <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src=" {{ asset('js/sb-admin-2.min.js') }}"></script>

    

    

</body>
</html>