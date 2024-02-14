@extends('front.layouts.base')
@section('title')
{{$country->intro}} {{ $country->name }}


@endsection
@section('content')
<div class="container-fluid  d-flex flex-column justify-content-center align-items-center"
    style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($country->image) }});height:400px; background-size:cover;background-position:center center;">

    <h1 class="text-white patua text-center">{{$country->intro}} {{ $country->name }}</h1>
    <a href="{{route('contactcountry',$country)}}"
        class="btn btn-outline-dark border border-white mt-3 patua px-3 py-2 text-white rounded-pill">Start to
        plan
        my
        trip</a>

</div>
<div class="d-flex justify-content-end ">
    <p class="mini me-2">{{$country->caption}}</p>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 py-2 ">
            <h4 class="patua ">Overview</h4>
            <div class="texto  open py-4">

                {!! \Illuminate\Support\Str::limit( $country->description, 500 );!!}
                <div class="d-flex justify-content-end">
                    <a href="" class="nav-link patua text-secondary me-2" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Read
                        more</a>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 patua" id="exampleModalLabel">{{$country->intro}} {{
                                    $country->name }}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="open texto p-2">
                                    {!!$country->description!!}
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 py-2 ">

            <div class="row d-flex justify-content-center align-items-center px-2">
                <h4 class="patua">Key facts</h4>
                @if ($country->population !=null)
                <div class="col d-flex flex-column justify-content-center align-items-center p-2">
                    <i class="bi bi-people" style="font-size: 1.5em;"></i>
                    <p class="mini fw-bold">POPULATION</p>
                    <p class="topy mini text-center">{{$country->population}}</p>
                </div>
                @endif
                @if ($country->capital !=null)
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-buildings-fill" style="font-size: 1.5em;"></i>
                    <p class="mini fw-bold">CAPITAL</p>
                    <p class="topy mini text-center">{{$country->capital}}</p>
                </div>
                @endif
                @if ($country->language !=null)
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-chat-text" style="font-size: 1.5em;"></i>
                    <p class="mini fw-bold">LANGUAGE</p>
                    <p class="topy mini text-center">{{$country->language}}</p>
                </div>
                @endif
                @if ($country->currency !=null)
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-currency-dollar" style="font-size: 1.5em;"></i>
                    <p class="mini fw-bold">CURRENCY</p>
                    <p class="topy mini text-center">{{$country->currency}}</p>
                </div>
                @endif
            </div>
            <div class="row">
                @if ($country->time_difference !=null)
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-clock" style="font-size: 1.5em;"></i>
                    <p class="mini fw-bold">TIME DIFFERENCE</p>
                    <p class="topy mini text-center">{{$country->time_difference}}</p>
                </div>
                @endif
                @if ($country->best_times !=null)
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-calendar2-check" style="font-size: 1.5em;"></i>
                    <p class="mini fw-bold">BEST TIME</p>
                    <p class="topy mini text-center">{{$country->best_times}}</p>
                </div>
                @endif
                @if($country->state !=null)
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-flag" style="font-size: 1.5em;"></i>
                    <p class="mini fw-bold">COUNTRY</p>
                    <p class="topy mini text-center">{{$country->state}}</p>
                </div>
                @endif
            </div>

            <div class="row">

            </div>
            @if ($country->advisory)

            <div class="accordion mt-3 mb-3" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed patua" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Travel recomendations
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @if ($country->advisory->level == 1)
                            <div style="background-color:#003875;"
                                class="p-2 d-flex justify-content-center align-items-center ">
                                <h6 class="text-white patua">{{$country->advisory->legend}}</h6>
                            </div>
                            @elseif ($country->advisory->level == 2)
                            <div style="background-color:#FFCC66;"
                                class="p-2 d-flex justify-content-center align-items-center">
                                <h6 class="patua ">{{$country->advisory->legend}}</h6>
                            </div>
                            @elseif ($country->advisory->level == 3)
                            <div style="background-color:#FF9900;"
                                class="p-2 d-flex justify-content-center align-items-center">
                                <h6 class=" text-white patua">{{$country->advisory->legend}}</h6>
                            </div>
                            @elseif ($country->advisory->level == 4)
                            <div style="background-color:#FF0000;"
                                class="p-2 d-flex justify-content-center align-items-center">
                                <h6 class="patua text-white">{{$country->advisory->legend}}</h6>
                            </div>
                            @endif
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
                <a href="{{route('contactcountry',$country)}}"
                    class="btn btn-outline-dark border border-dark mt-5 patua px-3 py-2 rounded-pill">Start to
                    plan my
                    trip</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">

        </div>
    </div>
</div>

<div class="container mt-3">
    @if (count($country->tours))
    <h3 class="patua mt-3">Inspiring itineraris in {{$country->name}}</h3>
    @if (count($country->tours) <= 4) <div class="row">
        @foreach ($country->tours as $tour)
        <div class="col-md-3 mb-3">
            <a href="{{route('tour',$tour)}}" class="nav-link  ">
                <div class="d-flex flex-column justify-content-between align-items-center p-2 "
                    style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($tour->image) }});background-size:cover; height:250px;">

                    <h5 class="fs-4 patua text-center text-white">{{ $tour->title }}</h5>

                </div>
            </a>

        </div>
        @endforeach
</div>

@else
<div class="container">
    <div class="owl-carousel owl-theme mb-3">
        @foreach ($country->tours as $tour)

        <a href="{{route('tour',$tour)}}" class="nav-link  ">
            <div class="d-flex flex-column justify-content-between align-items-center p-2 "
                style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($tour->image) }});background-size:cover; height:250px;">

                <h5 class="fs-4 patua text-center text-white">{{ $tour->title }}</h5>

            </div>
        </a>


        @endforeach
    </div>


</div>
@endif
@endif

</div>
<div class="container mt-3">

    <div class="row">
        @if(count($country->location))
        <h3 class="patua mt-3">Insteresting locations in {{$country->name}}</h3>

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

    <div class="row">
        @if (count($country->experience))
        <h3 class="patua mt-3">Experiences and atractions in {{$country->name}}</h3>
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

    @if (count($country->sights))
    <h3 class="patua mt-3">Essential sights in {{$country->name}}</h3>


    @if (count($country->sights) <= 4) <div class="row">
        @foreach ($country->sights as $sight)
        <div class="col-md-3 mb-3">
            <a href="{{route('sight',$sight)}}" class="nav-link  ">
                <div class="d-flex flex-column justify-content-between align-items-center p-2 "
                    style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($sight->image) }});background-size:cover; height:250px;">

                    <h5 class="fs-4 patua text-center text-white">{{ $sight->title }}</h5>

                </div>
            </a>

        </div>
        @endforeach
</div>

@else
<div class="container">
    <div class="owl-carousel owl-theme mb-3">
        @foreach ($country->sights as $sight)

        <a href="{{route('sight',$sight)}}" class="nav-link  ">
            <div class="d-flex flex-column justify-content-between align-items-center p-2 "
                style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($sight->image) }});background-size:cover; height:250px;">

                <h5 class="fs-4 patua text-center text-white">{{ $sight->title }}</h5>

            </div>
        </a>


        @endforeach
    </div>
    @endif



</div>
@endif
<div class="container mt-3">

    <div class="row mb-3">
        @if (count($country->acommodation))
        <h3 class="patua mt-3">Luxury acomodations in {{$country->name}}</h3>
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
        <div class="col-md-12">
            <div id="map" class="" style="width:100%;height:400px">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto d-flex justify-content-center">
            <a href="{{route('contactcountry',$country)}}"
                class="btn btn-outline-dark border border-dark mt-5 mb-5 patua px-3 py-2 rounded-pill">Start to
                plan my
                trip</a>



        </div>
        <hr>
    </div>
</div>

<div class="container">
    @if ($country->nearby)
    <h3 class="patua mt-3">Other nearby destinations</h3>
    @if (count($country->nearby)<=4) <div class="row mb-3">


        @foreach ($country->nearby as $item)
        @php
        $ito = \App\Models\Country::where('name',$item)->get();
        @endphp
        @foreach ($ito as $it)
        <div class="col-md-3 mb-2">
            <a href="{{route('country',$it)}}" class="nav-link ">
                <div class="d-flex flex-column justify-content-between align-items-center p-2 "
                    style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($it->image) }});background-size:cover; height:250px;">

                    <h5 class="fs-4 patua text-center text-white">{{$it->name}}</h5>
                </div>
            </a>
        </div>

        @endforeach

        @endforeach



</div>
@else

<div class="mb-3 owl-carousel owl-theme">


    @foreach ($country->nearby as $item)
    @php
    $ito = \App\Models\Country::where('name',$item)->get();
    @endphp
    @foreach ($ito as $it)

    <a href="{{route('country',$it)}}" class="nav-link">
        <div class="d-flex flex-column justify-content-between align-items-center p-2 "
            style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($it->image) }});background-size:cover; height:250px;">

            <h5 class="fs-4 patua text-center text-white">{{$it->name}}</h5>
        </div>
    </a>


    @endforeach

    @endforeach



</div>
@endif

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
<script>
    $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            autoplay:true,
            responsive: {
             
                900: {
                items: 4,
                nav: false
                },
                0: {
                items: 1,
                nav: false
                },


            }
        });
   

</script>
@endsection