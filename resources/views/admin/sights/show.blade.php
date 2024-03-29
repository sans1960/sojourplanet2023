@extends('layouts.admin')
@section('title')
{{ $sight->title }}

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">



                    <figure class="figure mt-3">
                        <img src="{{Storage::url($sight->image)}}" class="figure-img img-fluid rounded d-block mx-auto" alt="...">
                        <figcaption class="figure-caption text-center">{{ $sight->caption}}</figcaption>
                      </figure>
                      <h3 class="text-center patua"> {{$sight->title}}</h3>
                      <h5 class="text-center patua"> {{$sight->site}}</h5>
                    <div class=" mt-4 d-flex flex-row justify-content-center align-items-center">
                      {{-- <h5 class="card-title">{{$sight->destination->name}}</h5>
                      <h5 class="card-title">{{$sight->subregion->name}}</h5> --}}
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
                      @if ($sight->imagesight)
                         @foreach ($sight->imagesight as $item)
                         <h5 class="patua">{{$item->title}}</h5>
                         <figure class="figure mt-3">
                          <img src="{{Storage::url($item->image)}}" class="figure-img img-fluid rounded d-block mx-auto" alt="...">
                          <figcaption class="figure-caption text-center">{{ $item->caption}}</figcaption>
                        </figure>
                         @endforeach 
                      @endif
                      <div class=" fs-5 open">
                        {!! $sight->introduction!!}
                      </div>
                      <div class=" p-2 fw-bold fs-3 fst-italic text-center texto">

                            {!! $sight->highlight!!}


                      </div>
                      <div class=" fs-5 open texto">
                        {!! $sight->final !!}
                      </div>
                      <div id="map" class="" style="width:100%;height:400px">
                      </div>



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
