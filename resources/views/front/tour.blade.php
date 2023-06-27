@extends('front.layouts.base')
@section('title')
    {{ $tour->name }}
@endsection
@section('css')
<style>
    .pls{
        margin-top: -20px;
    }
</style>
@endsection
@section('content')
<div class="container-fluid d-flex justify-content-center align-items-end"  style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($tour->image) }});background-size:cover;height:300px; background-position:center;">
    <h3 class="text-white patua text-center">{{ $tour->name }}</h3>
</div>
<div class="container" >
<div class="row " >
    
        <div class="d-flex p-2 col-md-4 justify-content-center align-items-end" style="background-color: #D8D8D8;">
            <p class="patua me-3">Days</p>
            <p>{{ $tour->duration }}</p>
        </div>
        <div class="d-flex p-2 col-md-4 justify-content-center align-items-end" style="background-color: #D8D8D8;">
            <p class="patua me-3">Countries</p>
            <p>{{ $tour->countries }}</p>
        </div>
        <div class="d-flex p-2 col-md-4 justify-content-center align-items-end"style="background-color: #D8D8D8;">
            @foreach ($type as $item)
            <img src="{{ Storage::url($item->icon) }}" alt="" width="50">
        @endforeach
      
            <p class="patua ms-3">Trip type </p>
            @foreach ($type as $item)
            <p class="ms-3">Mostly   {{$item->name}}</p>
        @endforeach
        </div>
    
</div>
    
    <div class="row" style="background-color: #D8D8D8;">

    <div class="col-md-6 mx-auto">
      
      
       
        @foreach ($tour->ratios->chunk(3) as $chunk)
            
      
        <div class="row">
          @foreach ($chunk as $item)
             <div class="col mb-2">
              <div class="d-flex  align-items-end">
               <p class="patua">{{ $item->name }}</p> 
              </div>
              <div class="d-flex align-items-start pls">
                @if ($item->ratio == 5)
                <span class="me-3  ">
                    <i class="bi bi-star-fill" style="color: yellow;"></i>
                    <i class="bi bi-star-fill" style="color: yellow;"></i>
                    <i class="bi bi-star-fill" style="color: yellow;"></i>
                    <i class="bi bi-star-fill" style="color: yellow;"></i>
                    <i class="bi bi-star-fill" style="color: yellow;"></i>

                </span>
            @elseif($item->ratio == 4)
                <span class="me-3 d-flex justify-content-start align-items-center">
                    <i class="bi bi-star-fill" style="color: yellow;"></i>
                    <i class="bi bi-star-fill" style="color: yellow;"></i>
                    <i class="bi bi-star-fill" style="color: yellow;"></i>
                    <i class="bi bi-star-fill" style="color: yellow;"></i>
                    <i class="bi bi-star" style="color: grey;"></i>

                </span>
            @elseif ($item->ratio == 3)
                <span class="me-3 d-flex justify-content-start align-items-center">
                    <i class="bi bi-star-fill" style="color: yellow;"></i>
                    <i class="bi bi-star-fill" style="color: yellow;"></i>
                    <i class="bi bi-star-fill" style="color: yellow;"></i>
                    <i class="bi bi-star" style="color: grey;"></i>
                    <i class="bi bi-star" style="color: grey;"></i>

                </span>
            @elseif ($item->ratio == 2)
                <span class="me-3 d-flex justify-content-start align-items-center">
                    <i class="bi bi-star-fill" style="color: yellow;"></i>
                    <i class="bi bi-star-fill" style="color: yellow;"></i>
                    <i class="bi bi-star" style="color: grey;"></i>
                    <i class="bi bi-star" style="color: grey;"></i>
                    <i class="bi bi-star" style="color: grey;"></i>

                </span>
            @elseif ($item->ratio == 1)
                <span class="me-3 d-flex justify-content-start align-items-center">
                    <i class="bi bi-star-fill" style="color: yellow;"></i>
                    <i class="bi bi-star" style="color: grey;"></i>
                    <i class="bi bi-star" style="color: grey;"></i>
                    <i class="bi bi-star" style="color: grey;"></i>
                    <i class="bi bi-star" style="color: grey;"></i>

                </span>
            @elseif ($item->ratio == 0)
                <span class="me-3 d-flex justify-content-start align-items-center">
                    <i class="bi bi-star" style="color: grey;"></i>
                    <i class="bi bi-star" style="color: grey;"></i>
                    <i class="bi bi-star" style="color: grey;"></i>
                    <i class="bi bi-star" style="color: grey;"></i>
                    <i class="bi bi-star" style="color: grey;"></i>

                </span>
            @endif
              </div>
            </div>
          @endforeach
        </div>
        @endforeach
       
      
    </div>
</div>
</div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 d-flex flex-column mt-3 mx-auto">
             
                <h3 class="patua mt-3 text-center">{{ $tour->title }}</h3>
                <h4 class="patua mt-3 ">{{ $tour->subtitle }}</h4>
                <div class="open texto fs-5">
                    {!! $tour->description !!}
                </div>
                <div class="row">
                    <div class="col d-flex flex-column">
                        <div>
                            <p class="patua">Start</p>
                            <p>{{ $tour->city_first }}</p>
                        </div>
                        <div>
                            <p class="patua">Finish</p>
                            <p>{{ $tour->city_last }}</p>
                        </div>
                    </div>
                    <div class="col d-flex flex-column">
                        <div>
                            <p class="patua">Acomodation</p>
                            <p>{{ $tour->accommodation }}</p>
                        </div>
                        <div>
                            <p class="patua">Meals</p>
                            <p>{{ $tour->meals }}</p>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div id="map" class="mb-5" style="width:100%;height:400px">

                    </div>
                </div>
            </div>
    </div>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h4 class="patua">Trip Locations</h4>
            <div class="d-flex flex-wrap">
                @foreach ($tour->locationtour as $item)
               
                           <p class="me-2">{{ $loop->index +1 }}   {{$item->site}}</p>
                      
                 
            
            @endforeach
            </div>
        
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-4 ">


        <div class="col-md-8 mx-auto">
            
            <div class="d-flex justify-content-center align-items-center"
                style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url({{ Storage::url($tour->image) }}); height:300px;background-size:cover">
                <a href="{{route('imagestour',$tour)}}" target="external" class=" btn btn-outline-dark border border-whire mt-3 patua px-3 py-2 rounded-pill text-white"
                     >Image
                    Gallery</a>
            </div>

     

        </div>
    </div>
</div>
 
      <div class="container">
        <div class="row">
            <h3 class="patua">Itinerary</h3>
            <div class="col-md-10 mx-auto">
                <div class="accordion mb-5 mt-4" id="accordionExample">
                    @foreach ($tour->day as $day)
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed  patua" onclick=""
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $loop->index }}"
                                    aria-expanded="true" aria-controls="collapse{{ $loop->index }}">
                                    {{ $day->name }}
                                </button>
                            </h2>
                            <div id="collapse{{ $loop->index }}" class="accordion-collapse collapse  "
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body d-flex flex-column justify-content-center align-items-start">
                                    <div>
                                        <p class="open fw-bold">{{$day->introduction}}</p>
                                    </div>
                                    <div class="open texto fs-5">
                                        {!! $day->body !!}
                                    </div>
        
        
        
                                </div>
                            </div>
        
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
     </div>    
     <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="open texto fs-5">
                    {!! $tour->conclusion !!}
                </div>
                <div class=" d-flex justify-content-center mt-5 mb-5">
                    <a href="{{ route('contacttour', $tour) }}"  class="btn btn-outline-dark border border-dark mt-5 patua px-3 py-2 rounded-pill" >Plan a trip here</a>
                </div>
                <div id="social-links" class="d-flex justify-content-center social-share">
                    <p>Share this Tour with: {!! Share::currentPage('Share')->facebook()->twitter() !!}</p>
                </div>
            </div>
        </div>
     </div>
     
       
        
     
    


   
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
    <script>
        var map = L.map('map').setView([{{ $tour->maplatitud }}, {{ $tour->maplongitud }}],
            {{ $tour->mapzoom }});

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={{ env('MAP_KEY') }}', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,

        }).addTo(map);
        var datos = <?= json_encode($tour->locationtour) ?>;
         for (var i = 0; i < datos.length; i++) {
             var marker = L.marker([datos[i].latitud, datos[i].longitud]).addTo(map).bindPopup(datos[i].site).openPopup();
         }
        // console.log(datos);
    </script>
  
@endsection
