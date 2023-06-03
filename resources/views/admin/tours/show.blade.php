@extends('layouts.admin')
@section('title')
    {{ $tour->name }}
@endsection
@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                  {{$tour->name}}
                </div>
                <div class="card-body">
                    <h5>{{$tour->title}}</h5>
                    <h6>{{$tour->subtitle}}</h6>
                    <div class="row">
                        <div class="col">
                            <figure class="figure">
                                <img width="200" src="{{Storage::url($tour->image)}}" class="figure-img img-fluid rounded" alt="...">
                                <figcaption class="figure-caption">{{$tour->caption}}</figcaption>
                              </figure>
                        </div>
                        <div class="col">
                            <h5>{{$tour->accommodation}}</h5>
                        </div>
                        <div class="col">
                            <h5>{{$tour->meals}}</h5>
                        </div>
                        <div class="col">
                            <h5>{{$tour->duration}}</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>{{$tour->description}}</p>
                        </div>
                        <div class="col">
                            <p>{{$tour->conclusion}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>{{$tour->city_first}}</p>
                        </div>
                        <div class="col">
                            <p>{{$tour->city_last}}</p>
                        </div>
                        <div class="col">
                            <p>{{$tour->price}}</p>
                        </div>
                        <div class="col">
                            <p>{{$tour->date}}</p>
                        </div>
                        <div class="col">
                            <p>{{$tour->countries}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            @foreach ($tour->destinations as $item)
                                <p>{{$item->name}}</p>
                            @endforeach
                        </div>
                        <div class="col">
                            @foreach ($type as $item)
                                <img width="100" src="{{Storage::url($item->icon)}}" alt="">
                            @endforeach
                        </div>
                        <div class="col">
                            @foreach ($tour->ratios as $item)
                             <p>{{$item->name}} <img width="100" src="{{Storage::url($item->icon)}}" alt=""></p>   
                            @endforeach
                        </div>
                    </div>
                
                </div>
              </div>
        </div>
      </div>
        {{-- <div class="row">
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
        </div> --}}
        {{-- <div class="row">
            <div class="col-md-10 mx-auto">
                <div id="map" class="mb-5 mt-5" style="width:100%;height:400px">

                </div>
            </div>
            
        </div> --}}
    </div>
@endsection
@section('js')
{{-- <script>
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
       
            
          
      
       
 
       
    
        
           
          
</script> --}}
@endsection
