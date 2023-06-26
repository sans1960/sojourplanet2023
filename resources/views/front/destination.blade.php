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

        <h1 class="text-white patua">{{ $destination->title }}</h1>

    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10 mx-auto d-flex justify-content-center align-items-center">
                <h3 class="patua text-center">{{ $destination->subtitle }}</h3>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="row gx-0 gy-0 " style="margin-left: -15px;margin-right:-15px;">
            <div class="col">
                <a href="https://cdn.pixabay.com/photo/2016/06/07/17/07/holiday-1442020_1280.jpg"
                    data-lightbox="example-set" data-title="accusamus beatae ad facilis cum similique qui sun">
                    <img src="https://cdn.pixabay.com/photo/2016/06/07/17/07/holiday-1442020_1280.jpg" class="img-fluid">
                </a>
            </div>
            <div class="col">
                <a href="https://cdn.pixabay.com/photo/2016/06/07/17/07/holiday-1442020_1280.jpg"
                    data-lightbox="example-set" data-title="accusamus beatae ad facilis cum similique qui sun">
                    <img src="https://cdn.pixabay.com/photo/2016/06/07/17/07/holiday-1442020_1280.jpg" class="img-fluid">
                </a>
            </div>
            <div class="col">
                <a href="https://cdn.pixabay.com/photo/2016/06/07/17/07/holiday-1442020_1280.jpg"
                    data-lightbox="example-set" data-title="accusamus beatae ad facilis cum similique qui sun">
                    <img src="https://cdn.pixabay.com/photo/2016/06/07/17/07/holiday-1442020_1280.jpg" class="img-fluid">
                </a>
            </div>
        </div>
        <div class="row gx-0 gy-0" style="margin-left: -15px;margin-right:-15px;">


            <div class="col">
                <a href="https://cdn.pixabay.com/photo/2016/06/07/17/07/holiday-1442020_1280.jpg"
                    data-lightbox="example-set" data-title="accusamus beatae ad facilis cum similique qui sun">
                    <img src="https://cdn.pixabay.com/photo/2016/06/07/17/07/holiday-1442020_1280.jpg" class="img-fluid">
                </a>
            </div>
            <div class="col">
                <a href="https://cdn.pixabay.com/photo/2016/06/07/17/07/holiday-1442020_1280.jpg"
                    data-lightbox="example-set" data-title="accusamus beatae ad facilis cum similique qui sun">
                    <img src="https://cdn.pixabay.com/photo/2016/06/07/17/07/holiday-1442020_1280.jpg" class="img-fluid">
                </a>
            </div>
            <div class="col">
                <a href="https://cdn.pixabay.com/photo/2016/06/07/17/07/holiday-1442020_1280.jpg"
                    data-lightbox="example-set" data-title="accusamus beatae ad facilis cum similique qui sun">
                    <img src="https://cdn.pixabay.com/photo/2016/06/07/17/07/holiday-1442020_1280.jpg" class="img-fluid">
                </a>
            </div>

        </div>

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
                    <a href="{{ route('contactdestination', $destination) }}"
                        class="btn btn-outline-dark border border-dark mt-5 patua px-3 py-2 rounded-pill">Start to plan my
                        trip</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <a href="{{ route('destinationsights', $destination) }}" class="text-center nav-link text-dark patua fs-3">Lasts
            Sights from {{ $destination->name }} published</a>

        <div class="row mt-5 mb-5">
            @foreach ($sights->take(6) as $sight)
                <div class="col-md-4 mb-2">
                    <a href="{{ route('sight', $sight) }}" class="nav-link ">
                        <div class="d-flex flex-column justify-content-between text-white p-2 img-responsive"
                            style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($sight->image) }});background-size:cover;height:200px; ">
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
            <div class="col-md-12 d-flex flex-wrap">
             
            </div>
        </div>



    </div>
@endsection
@section('js')
    <script src="{{ asset('js/lightbox.js') }}"></script>
@endsection
