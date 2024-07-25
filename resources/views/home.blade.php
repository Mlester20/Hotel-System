@extends('frontlayout')
@section('content')

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/img-3.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/img-4.jpg')}}" class="d-block w-100" alt="...">
            </div>
        </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
    </div>
    <!-- end of slider -->
    <h2 class="text-center  mt-4" style="color: aqua;">Our Services</h2>
    <div class="w-full h-full" style="background-color: white;">
        <div class="container">
            @foreach($services as $service)
            <div class="row mt-5 my-4">
                <div class="col-md-3 mt-4 mb-4">
                    <a href="{{url('service/'.$service->id)}}"><img src="{{ asset('storage/images/' . basename($service->photo)) }}" alt="" class="img-thumbnail"></a>
                </div>
                    <div class="col-md-8 mt-4">
                        <h3 style="color: #164863;">{{$service->title}}</h3>
                        <p class="text-dark">{{$service->small_desc}}</p>
                        <p>
                            <a href="{{url('service/'.$service->id)}}" class="btn btn-sm btn-primary">Read More</a>
                        </p>
                    </div>
            </div>
            @endforeach
        </div>
    </div>

<div class="width text-black">
    <div class="container">
        <h2 class="text-center" style="color: aqua;">Gallery</h2>
        <div class="row mb-4 my-4">
            @foreach($roomTypes as $rtype)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <p class="card-title">{{$rtype->title}}</p>
                            <div id="carousel{{$rtype->id}}" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner mb-2">
                                    @foreach($rtype->roomtypeimgs as $index => $img)
                                        <div class="carousel-item {{$index == 0 ? 'active' : ''}}">
                                            <img style="width:150px; height: 150px; border-radius: 10px;" src="{{ asset('storage/images/' . basename($img->img_src)) }}" class="d-block w-100" alt="Slide {{$index + 1}}">
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel{{$rtype->id}}" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel{{$rtype->id}}" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


    <!-- gallery section ends -->
    <div id="testimonials" class="carousel slide p-5 bg-dark text-white border mb-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <h2 class="card-title text-center mb-5" style="color: aqua;">Our Testimonial</h2>      
            @foreach($testimonials as $index => $testimonial)
            <div class="carousel-item @if($index == 0 ) active @endif">
                <figure class="text-center">
                    <blockquote class="blockquote">
                        <p>{{$testimonial->testi_cont}}</p>
                    </blockquote>
                    <figcaption class="blockquote-footer mt-2">
                        <cite>{{$testimonial->customer->full_name}}</cite>
                    </figcaption>
                </figure>
            </div>
            @endforeach
        </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonials" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonials" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
    </div>

    <div class="mt-5">
        <h3 class="card-title text-white text-center">Ask A Question? </h3>
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
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


@endsection