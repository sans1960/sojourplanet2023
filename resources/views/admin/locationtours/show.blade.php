@extends('layouts.admin')
@section('title')
    {{ $locationtour->site }}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card text-center">
                <div class="card-header">
                  {{$locationtour->site}}
                </div>
                <div class="card-body">
                    <div id="map" class="" style="width:100%;height:400px">
                    </div>
                </div>
                <div class="card-footer text-body-secondary">
                  {{$locationtour->tour->name}}
                </div>
              </div>
        </div>
    </div>
</div>
    
@endsection
@section('js')
<script>
    var map = L.map('map').setView([{{ $locationtour->latitud }}, {{ $locationtour->longitud }}], {{ $locationtour->zoom }});

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={{ env("MAP_KEY") }}' ,{
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,

}).addTo(map);
var datos = <?= json_encode($locationtour);?>;

                        var marker = L.marker([datos.latitud,datos.longitud]).addTo(map)
                        .bindPopup(datos.site); 

</script>   
@endsection