@extends('frontlayout')
@section('content')

    <div class="container w-50 my-4">
        <h3 class="card-title text-center" style="color: aqua;">Service {{$service->id}}</h3>
        <div class="card border-0 mt-4 shadow">
            <img src="{{ asset('storage/images/' . basename($service->photo)) }}" class="rounded mx-auto d-block mt-3" alt="...">
            <div class="card-body">
                <h3 class="card-title text-black text-center">{{ $service->title }}</h3>
                <p class="card-text">{{ $service->detail_desc }}</p>
            </div>
        </div>
    </div>

@endsection
