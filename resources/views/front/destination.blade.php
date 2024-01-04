@extends('front.layouts.base')
@section('title')
{{ $destination->name }}
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
@endsection
@section('content')
<div class="container-fluid  d-flex justify-content-center align-items-center"
    style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($destination->image) }});height:300px; background-size:cover;background-position:center center;">

    <h4 class="text-white patua text-center">{{ $destination->title }}</h4>

</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 mx-auto d-flex justify-content-center align-items-center">
            <h4 class="patua text-center">{{ $destination->subtitle }}</h4>
        </div>
    </div>
</div>
<div class="container-fluid mt-5">
    @foreach ($destination->imagedestination->chunk(3) as $items)
    <div class="row gx-0 gy-0 " style="margin-left: -15px;margin-right:-15px;">
        @foreach ($items as $item)
        <div class="col">
            <a href="{{Storage::url($item->image)}}" data-lightbox="example-set" data-title="{{$item->title}}">
                <img src="{{Storage::url($item->image)}}" class="img-fluid">
            </a>
        </div>
        @endforeach
    </div>
    @endforeach


</div>

<div class="container mt-5
">
    <div class="row ">
        <div class="col-md-8 open texto">
            {!! $destination->body !!}
        </div>
        <div class="col-md-4 patua">
            {!! $destination->sidebody !!}
            <div class="d-flex justify-content-center mt-5">
                <a href="{{ route('contactdestination',$destination) }}"
                    class="btn btn-outline-dark border border-dark mt-5 patua px-3 py-2 rounded-pill">Start to plan my
                    trip</a>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <h4 class="text-center patua mt-2"> Destinations of {{ $destination->name }}</h4>
    <div class="row">
        <div class="col-md-12 mx-auto d-flex flex-wrap p-2 justify-content-center">
            @foreach ($destination->country->sortBy('name') as $country)
            <a href="{{route('country',$country)}}" class="nav-link me-3 fw-bold">{{ $country->name }}</a>

            @endforeach
        </div>
    </div>

</div>
<div class="container mt-5">
    <a href="{{ route('destinationsights', $destination) }}" class="text-center nav-link text-dark patua fs-4">Latest
        sights from {{ $destination->name }} published</a>

    <div class="row mt-5 ">
        @foreach ($sights->take(6) as $sight)
        <div class="col-md-4 mb-2">
            <a href="{{ route('sight', $sight) }}" class="nav-link " target="_blank">
                <div class="d-flex flex-column justify-content-between text-white p-2 img-responsive"
                    style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($sight->image) }});background-size:cover;height:250px; ">
                    <div class="d-flex justify-content-center align-items-center">
                        <p class="open">{{ $sight->country->name }}</p>
                        {{-- <p class="open">{{$sight->categorysight->name}}</p> --}}
                    </div>
                    <h5 class="fs-4 patua  text-center text-white">{{ $sight->title }}</h3>

                </div>
            </a>

        </div>
        @endforeach


    </div>
    <div class="row mb-5">
        <div class="d-flex justify-content-center mt-3">
            <a href="{{ route('destinationsights', $destination) }}"
                class="btn btn-outline-dark border border-dark mt-5 patua px-3 py-2 rounded-pill">View more sights</a>
        </div>
    </div>



</div>
@endsection
@section('js')
<script src="{{ asset('js/lightbox.js') }}"></script>
@endsection