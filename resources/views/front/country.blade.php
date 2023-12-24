@extends('front.layouts.base')
@section('title')
{{ $country->name }}


@endsection
@section('content')
<div class="container-fluid  d-flex justify-content-center align-items-center"
    style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($country->image) }});height:300px; background-size:cover;background-position:center center;">

    <h1 class="text-white patua">{{$country->intro}} {{ $country->name }}</h1>

</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <a href="{{url('countries')}}">All countries</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3 class="patua mt-3">Overview</h3>
            <div class="texto open fs-5">
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
                    <p class="topy mini">{{$country->currency}}</p>
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
            <div class="row">
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-flag" style="font-size: 1.5em;"></i>
                    <p class="mini">STATE</p>
                    <p class="topy">{{$country->state}}</p>
                </div>
            </div>
            @if ($country->advisory)
            <div class="accordion mt-3 mb-3" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed patua" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Advisories
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <h5>{{$country->advisory->level}}</h5>
                            <p>{{$country->advisory->legend}}</p>
                            <div>
                                {!!$country->advisory->coment!!}
                            </div>
                            <div>
                                {!!$country->information!!}
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            @endif

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
    <div class="row">
        @if ($country->location)
        @foreach ($country->location as $item)
        <div class="col-md-3">
            <a href="" class="nav-link  " data-bs-toggle="modal" data-bs-target="#Modal{{$item->id}}">
                <div class="d-flex flex-column justify-content-between align-items-center p-2 "
                    style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($item->image) }});background-size:cover; height:250px;">

                    <h5 class="fs-4 patua text-center text-white">{{ $item->name }}</h5>

                </div>
            </a>
            <div class="modal fade" id="Modal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $item->name }}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <figure class="figure">
                                <img src="{{Storage::url($item->image)}}" class="figure-img img-fluid rounded"
                                    alt="...">
                                <figcaption class="figure-caption">{{$item->caption}}.</figcaption>
                            </figure>
                            <div>
                                {!!$item->body!!}
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>

</div>
<div class="container mt-3">
    <h3 class="patua mt-3">Experiences and atractions in {{$country->name}}</h3>
    <div class="row">
        @if ($country->experience)
        @foreach ($country->experience as $item)
        <div class="col-md-3">
            <a href="" class="nav-link  " data-bs-toggle="modal" data-bs-target="#Modalo{{$item->id}}">
                <div class="d-flex flex-column justify-content-between align-items-center p-2 "
                    style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($item->image) }});background-size:cover; height:250px;">

                    <h5 class="fs-4 patua text-center text-white">{{ $item->name }}</h5>

                </div>
            </a>
            <div class="modal fade" id="Modalo{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $item->name }}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <figure class="figure">
                                <img src="{{Storage::url($item->image)}}" class="figure-img img-fluid rounded"
                                    alt="...">
                                <figcaption class="figure-caption">{{$item->caption}}.</figcaption>
                            </figure>
                            <div>
                                {!!$item->body!!}
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>
<div class="container mt-3">
    <h3 class="patua mt-3">Essential sights in {{$country->name}}</h3>
    <div class="row">
        @if ($country->sight)
        @foreach ($country->sight as $sight)
        <div class="col-md-4 mb-3">
            <a href="{{route('sight',$sight)}}" class="nav-link  ">
                <div class="d-flex flex-column justify-content-between align-items-center p-2 "
                    style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($sight->image) }});background-size:cover; height:250px;">

                    <h5 class="fs-4 patua text-center text-white">{{ $sight->title }}</h5>

                </div>
            </a>

        </div>
        @endforeach
        @endif
    </div>
</div>
<div class="container mt-3">
    <h3 class="patua mt-3">Luxury acomodations in {{$country->name}}</h3>
    <div class="row mb-3">
        @if ($country->acommodation)
        @foreach ($country->acommodation as $item)
        <div class="col-md-3">
            <a href="" class="nav-link  " data-bs-toggle="modal" data-bs-target="#Modale{{$item->id}}">
                <div class="d-flex flex-column justify-content-between align-items-center p-2 "
                    style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($item->image) }});background-size:cover; height:250px;">

                    <h5 class="fs-4 patua text-center text-white">{{ $item->name }}</h5>

                </div>
            </a>
            <div class="modal fade" id="Modale{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $item->name }}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <figure class="figure">
                                <img src="{{Storage::url($item->image)}}" class="figure-img img-fluid rounded"
                                    alt="...">
                                <figcaption class="figure-caption">{{$item->caption}}.</figcaption>
                            </figure>
                            <div>
                                {!!$item->body!!}
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">

            <div id="map" class="" style="width:100%;height:400px">
            </div>

        </div>
    </div>
</div>
{{-- <div class="container">
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
</div> --}}
<div class="container">
    <h3 class="patua mt-3">Other nearby destinations</h3>
    <div class="row mb-3">

        @if ($country->nearby)
        @foreach ($country->nearby as $item)
        @php
        $ito = \App\Models\Country::where('name',$item)->get();
        @endphp
        @foreach ($ito as $it)
        <div class="col-md-3">
            <a href="{{route('country',$it)}}">
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