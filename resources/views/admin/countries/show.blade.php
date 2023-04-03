@extends('layouts.admin')
@section('title')
{{ $country->name }}

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                     <h2> {{$country->name}}</h2>
                    </div>
                    <figure class="figure mt-3">
                        <img src="{{Storage::url($country->image)}}" class="w-50 figure-img img-fluid rounded d-block mx-auto" alt="...">
                        <figcaption class="figure-caption ms-2">{{ $country->caption}}</figcaption>
                      </figure>
                    <div class="card-body p-3">
                      <h5 class="card-title">{{$country->destination->name}}</h5>
                      <h5 class="card-title">{{$country->subregion->name}}</h5>
                      <div>
                        {!! $country->description!!}
                      </div>
                      <div id="map" class="" style="width:100%;height:400px">
                      </div>

                    </div>
                  </div>
            </div>
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
