@extends('layouts.admin')
@section('title')
{{ $sight->title }}

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                     <h4> {{$sight->title}}</h4>
                    </div>
                    <figure class="figure mt-3">
                        <img src="{{Storage::url($sight->image)}}" class="w-50 figure-img img-fluid rounded d-block mx-auto" alt="...">
                        <figcaption class="figure-caption ms-2">{{ $sight->caption}}</figcaption>
                      </figure>
                    <div class="card-body p-3">
                      <h5 class="card-title">{{$sight->destination->name}}</h5>
                      <h5 class="card-title">{{$sight->subregion->name}}</h5>
                      <h5 class="card-title">{{$sight->country->name}}</h5>
                      <h5 class="card-title">{{$sight->categorysight->name}}</h5>
                      @foreach ($sight->tags as $tag)
                          <h6>{{$tag->name}}</h6>
                      @endforeach
                      <div>
                        {!! $sight->extract!!}
                      </div>
                      <div>
                        {!! $sight->introduction!!}
                      </div>
                      <div>
                        {!! $sight->highlight!!}
                      </div>
                      <div>
                        {!! $sight->final !!}
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
