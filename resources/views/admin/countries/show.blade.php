@extends('layouts.admin')
@section('title')
{{ $country->name }}

@endsection
@section('content')
<div class="container-fluid  d-flex justify-content-center align-items-center"
    style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($country->image) }});height:300px; background-size:cover;background-position:center center;">

    <h1 class="text-white patua">{{ $country->name }}</h1>

</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3 class="patua mt-3">Overview</h3>
            <div>
                {!! $country->description!!}
            </div>
        </div>
        <div class="col-md-4">
            <h3 class="patua mt-3">Key facts</h3>
            <div class="row">
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-people" style="font-size: 1.5em;"></i>
                    <p class="mini">POPULATION</p>
                    <p class="topy">{{$country->population}}</p>
                </div>
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-buildings-fill" style="font-size: 1.5em;"></i>
                    <p class="mini">CAPITAL</p>
                    <p class="topy">{{$country->capital}}</p>
                </div>
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-chat-text" style="font-size: 1.5em;"></i>
                    <p class="mini">LANGUAGE</p>
                    <p class="topy">{{$country->language}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-currency-dollar" style="font-size: 1.5em;"></i>
                    <p class="mini">CURRENCY</p>
                    <p class="topy">{{$country->currency}}</p>
                </div>
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-clock" style="font-size: 1.5em;"></i>
                    <p class="mini">TIME DIFFERENCE</p>
                    <p class="topy">{{$country->time_difference}}</p>
                </div>
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-calendar2-check" style="font-size: 1.5em;"></i>
                    <p class="mini">BEST TIME</p>
                    <p class="topy">{{$country->best_times}}</p>
                </div>
            </div>
            <div class="patua p-3">
                {!!$country->sidebody!!}
            </div>
            <div class="d-flex justify-content-center">
                <a href="" class="btn btn-outline-dark border border-dark mt-5 patua px-3 py-2 rounded-pill">Start to
                    plan my
                    trip</a>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3">
    <h3 class="patua mt-3">Inspiring itineraris in {{$country->name}}</h3>
</div>
<div class="container mt-3">
    <h3 class="patua mt-3">Insteresting locations in {{$country->name}}</h3>
</div>
<div class="container mt-3">
    <h3 class="patua mt-3">Experiences and atractions in {{$country->name}}</h3>
</div>
<div class="container mt-3">
    <h3 class="patua mt-3">Essential sights in {{$country->name}}</h3>
</div>
<div class="container mt-3">
    <h3 class="patua mt-3">Luxury acomodations in {{$country->name}}</h3>
</div>



<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">

            <div id="map" class="" style="width:100%;height:400px">
            </div>

        </div>
    </div>
</div>
<div class="container">
    <h3 class="patua mt-3">Travel information {{$country->name}}</h3>
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div>
                {!!$country->information!!}
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="" class="btn btn-outline-dark border border-dark mt-5 patua px-3 py-2 rounded-pill">Start to
                plan my
                trip</a>
        </div>
    </div>
</div>
<div class="container">
    <h3 class="patua mt-3">Other nearby destinations</h3>
    <div class="row">

        @if ($country->nearby)
        @foreach ($country->nearby as $item)
        @php
        $ito = \App\Models\Country::where('name',$item)->get();
        @endphp
        @foreach ($ito as $it)
        <div class="col-md-3">
            <a href="">
                <div class="d-flex flex-column justify-content-between align-items-center p-2 "
                    style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($it->image) }});background-size:cover; height:250px;">

                    <h5 class="fs-4 patua text-center text-white">{{$it->name}}</h5>
                </div>
            </a>
        </div>

        @endforeach

        @endforeach
        @endif


    </div>

</div>


@endsection
@section('js')
<script>
    var map = L.map('map').setView([{{ $country->latitud }}, {{ $country->longitud }}], {{ $country->zoom }});

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={{ env("MAP_KEY") }}' ,{
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,

}).addTo(map);

// L.marker([{{ $country->latitud }}, {{ $country->longitud }}]).addTo(map);
    // .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    // .openPopup();
</script>
@endsection