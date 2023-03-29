@extends('layouts.admin')
@section('title')
{{ $day->name }}

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                     <h2> {{$day->name}}</h2>
                    </div>
                    <figure class="figure mt-3">
                        <img src="{{Storage::url($day->image)}}" class="w-50 figure-img img-fluid rounded d-block mx-auto" alt="...">
                        <figcaption class="figure-caption ms-2">{{ $day->caption}}</figcaption>
                      </figure>
                    <div class="card-body p-3">
                      <h5 class="card-title">{{$day->tour->name}}</h5>
                      <h5 class="card-title">{{$day->order}}</h5>

                      <div>
                        {!! $day->body!!}
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
    var map = L.map('map').setView([{{ $day->latitud }}, {{ $day->longitud }}], {{ $day->zoom }});

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={{ env("MAP_KEY") }}' ,{
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,

}).addTo(map);

L.marker([{{ $day->latitud }}, {{ $day->longitud }}]).addTo(map);
    // .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    // .openPopup();
</script>
@endsection
