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
                            <h5>{{$tour->duration}}</h5>
                        </div>
                        <div class="col">
                            @foreach ($tour->destinations as $item)
                                <p>{{$item->name}}</p>
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h5>{{$tour->accommodation}}</h5>
                        </div>
                        <div class="col">
                            <h5>{{$tour->meals}}</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>{!!$tour->description!!}</p>
                        </div>
                     
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>{!!$tour->conclusion!!}</p>
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
                   
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>{{$tour->date}}</p>
                        </div>
                        <div class="col">
                            <p>{{$tour->countries}}</p>
                        </div>
                    </div>
                    <div class="row">
                    
                        <div class="col">
                            @foreach ($type as $item)
                                <img width="100" src="{{Storage::url($item->icon)}}" alt="">
                            @endforeach
                        </div>
                        <div class="col-md-4">
                            

                            
                            @foreach ($tour->ratios as $item)
                            <ul class="list-group  ">
                                <li class="list-group-item d-flex justify-content-around align-items-center border-0">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">{{$item->name}}</div>
                                        
                                      </div>
                                      <span class="">
                                        @if ($item->ratio == 5)
                                        <span class="me-3">
                                            <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                            <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                            <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                            <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                            <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                            
                                        </span>  
                                        @elseif($item->ratio == 4)
                                        <span class="me-3">
                                            <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                            <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                            <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                            <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                            <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>
                                            
                                        </span>
                                        @elseif ($item->ratio == 3)
                                        <span class="me-3">
                                            <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                            <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                            <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                            <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>
                                            <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>
                                            
                                        </span>
                                        @elseif ($item->ratio == 2)
                                        <span class="me-3">
                                            <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                            <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                            <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>
                                            <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>
                                            <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>
                                            
                                        </span>
                                        @elseif ($item->ratio == 1)
                                        <span class="me-3">
                                            <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                            <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>
                                            <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>
                                            <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>
                                            <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>
                                            
                                        </span>
                                        @elseif ($item->ratio == 0)
                                        <span class="me-3">
                                            <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>
                                            <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>
                                            <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>
                                            <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>
                                            <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>
                                            
                                        </span>
                                        @endif
                                      </span>
                                    </li>
                              
                               
                              </ul>
                             
                                  
                                
                          
                              
                                
                           
                             
                            @endforeach
                       
                        </div>
                    </div>
                
                </div>
              </div>
        </div>
      </div>
      @if ($tour->day)
      @foreach ($tour->day as $item)
          <h4>{{$item->name}}</h4>
      @endforeach
          
      @endif
      @if ($tour->imagetour)
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
      @endif
    
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
    var map = L.map('map').setView([{{ $tour->maplatitud }}, {{ $tour->maplongitud }}],
                          {{$tour->mapzoom}});

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
