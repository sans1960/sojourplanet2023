@extends('front.layouts.base')
@section('title')
    {{$sight->title}}
@endsection
@section('css')

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <figure class="figure mt-3">
                    <img src="{{Storage::url($sight->image)}}" class="figure-img img-fluid rounded d-block mx-auto" alt="...">
                    <figcaption class="figure-caption text-center">{{ $sight->caption}}</figcaption>
                  </figure>
                  <h3 class="text-center patua"> {{$sight->title}}</h3>
                <div class=" mt-4 d-flex flex-row justify-content-center align-items-center">

                  <h5 class="patua">{{$sight->country->name}}</h5>
                  <p class="ms-4">|</p>
                  <h5 class="ms-4 patua">{{$sight->categorysight->name}}</h5>
                </div>
                <div class=" mt-4 d-flex flex-row flex-wrap justify-content-center align-items-center">

                    @foreach ($sight->tags as $tag)

                    <a href="" class="me-4 nav-link text-dark patua">{{$tag->name}}</a>
                @endforeach
                </div>

                  <div class=" mt-4 texto fs-5 open">
                    {!! $sight->extract!!}
                  </div>
                  <div class=" fs-5 open">
                    {!! $sight->introduction!!}
                  </div>
                  <div class=" p-2 fw-bold fs-3 fst-italic text-center texto">

                        {!! $sight->highlight!!}


                  </div>
                  <div class=" fs-5 open texto">
                    {!! $sight->final !!}
                  </div>
                  <div id="map" class="mb-5" style="width:100%;height:400px">
                  </div>
                  <div id="social-links" class="d-flex justify-content-center social-share" >
                    <p>Share this Sight with:  {!! Share::currentPage('Share')->facebook()->twitter(); !!}</p>
                  </div>
                  <div class=" d-flex justify-content-center mt-5 mb-5">
                    <a href="{{route('contactsight',$sight)}}" class="btn btn-dark patua p-2">Plan a trip here</a>
                   </div>
            </div>
            <div class="col-md-4">

            </div>
        </div>

    </div>

@endsection
@section('js')
<script>
    var map = L.map('map').setView([{{ $sight->latitud }}, {{ $sight->longitud }}], {{ $sight->zoom }});

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={{ env("MAP_KEY") }}' ,{
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,

}).addTo(map);

L.marker([{{ $sight->latitud }}, {{ $sight->longitud }}]).addTo(map);
    // .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    // .openPopup();
</script>
@endsection
