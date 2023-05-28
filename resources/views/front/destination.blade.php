@extends('front.layouts.base')
@section('title')
    {{ $destination->name }}
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
@endsection
@section('content')
    <div class="container-fluid  d-flex justify-content-center align-items-center"
        style="background-image: url({{ Storage::url($destination->image) }});height:300px; background-size:cover;background-position:center center;">

        <h1 class="text-white">{{ $destination->title }}</h1>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto d-flex justify-content-center align-items-center p-5">
                <h3>{{ $destination->subtitle }}</h3>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="row">
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
        <div class="row">
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
        <div class="row">
            <div class="col-md-8 p-3 open texto">
                {!! $destination->body !!}
            </div>
            <div class="col-md-4 p-3">
                {!! $destination->sidebody !!}
                <div class="d-flex justify-content-center mt-5">
                    <a href="{{ route('contactdestination', $destination) }}" class="btn  btn-outline-dark">Start to plan my
                        trip</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h1 class="text-center">Lasts Sights from {{ $destination->name }}</h1>
        <div class="row mt-5">
            <div class="col-md-6 mx-auto owl-carousel owl-theme">
                @foreach ($sights as $sight)
                    <a href="{{ route('sight', $sight) }}" class="nav-link">
                        <div class="card mb-5">
                            <img src="{{ Storage::url($sight->image) }}" class="card-img-top" alt=".{{ $sight->caption }}">
                            <div class="card-body mb-5">
                                <h6 class="card-title">{{ $sight->date }}</h6>
                                <h5 class="card-title">{{ $sight->title }}</h5>
                                <div>
                                    {!! Str::limit($sight->extract, 110, '...') !!}
                                </div>
                                <p>Read more</p>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>
        </div>

    </div>
@endsection
@section('js')
    <script src="{{ asset('js/lightbox.js') }}"></script>
    {
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>
@endsection
