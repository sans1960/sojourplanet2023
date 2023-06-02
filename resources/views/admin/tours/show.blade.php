@extends('layouts.admin')
@section('title')
    {{ $tour->name }}
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2> {{ $tour->name }}</h2>
                        <h2> {{ $tour->title }}</h2>
                        <h2> {{ $tour->subtitle }}</h2>
                    </div>
                    <figure class="figure mt-3">
                        <img src="{{ Storage::url($tour->image) }}" class="w-50 figure-img img-fluid rounded d-block mx-auto"
                            alt="...">
                        <figcaption class="figure-caption ms-2">{{ $tour->caption }}</figcaption>
                    </figure>
                    <div class="card-body p-3">
                        @foreach ($tour->destinations as $destination)
                            <h5 class="card-title">{{ $destination->name }}</h5>
                        @endforeach

                        @foreach ($tour->types as $type)
                            <div class="d-flex justify-content-around mb-2">
                                <p>{{ $type->name }}</p>
                                <img src="{{ Storage::url($type->icon) }}" width="40" alt="">
                                <img src="{{ Storage::url($type->ratio) }}" width="80" alt="">
                            </div>
                        @endforeach
                        <p>{{ $tour->accommodation }}</p>
                        <p>{{ $tour->meals }}</p>

                        <h5 class="card-title">{{ $tour->price }}</h5>
                        <h5 class="card-title">{{ $tour->duration }}</h5>
                        <h5 class="card-title">{{ $tour->date }}</h5>

                        <h5 class="card-title">{{ $tour->countries }}</h5>
                        <h5 class="card-title">{{ $tour->city_first }}</h5>
                        <h5 class="card-title">{{ $tour->city_last }}</h5>

                        <div>
                            {!! $tour->description !!}
                        </div>
                        <div>
                            {!! $tour->conclusion !!}
                        </div>
                        @foreach ($tour->day as $day)
                            <h4>{{ $day->name }}</h4>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($tour->imagetour as $item)
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ Storage::url($item->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div id="map" class="mb-5 mt-5" style="width:100%;height:400px">

                </div>
            </div>
            
        </div>
    </div>
@endsection
@section('js')
<script>
    var map = L.map('map').setView([{{ $tour->locationtour()->first()->latitud }}, {{ $tour->locationtour()->first()->longitud }}],
                          12);

                      L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={{ env('MAP_KEY') }}', {
                          attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                          id: 'mapbox/streets-v11',
                          tileSize: 512,
                          zoomOffset: -1,

                      }).addTo(map);
                      var datos = <?= json_encode($tour->locationtour);?>;
              for(var i=0;i<datos.length;i++){
                  var marker = L.marker([datos[i].latitud,datos[i].longitud]).addTo(map).bindPopup(datos[i].site); 
              }
       
            
          
      
       
 
       
    
        
           
          
</script>
@endsection
