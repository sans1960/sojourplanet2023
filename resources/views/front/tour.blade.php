@extends('front.layouts.base')
@section('title')
    {{ $tour->name }}
@endsection
@section('css')
<style>
    .accordion {
        --bs-accordion-btn-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='white'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        --bs-accordion-btn-active-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='white'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    }
</style>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 d-flex flex-column mt-3 mx-auto">
                <div class="p-3 d-flex flex-column justify-content-start align-items-center"
                    style="background-image: url({{ Storage::url($tour->image) }});background-size:cover;height:200px;">
                    <h3 class="text-white patua">{{ $tour->name }}</h3>

                </div>
                <div class="d-flex flex-row justify-content-start mt-3">
                    @foreach ($tour->types as $type)
                        <h4>{{ $type->name }}</h4>
                    @endforeach

                </div>
                <div class="d-flex flex-row justify-content-start mt-3">
                    @foreach ($tour->destinations as $destination)
                        <h4>{{ $destination->name }}</h4>
                    @endforeach

                </div>
                <hr>
                <div class="open texto fs-5">
                    {!! $tour->description !!}
                </div>
                <hr>
     
           
  <div class="accordion mb-5" id="accordionExample">
    @foreach ($tour->day as $day)
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed bg-success text-white patua" onclick="" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $loop->index }}" aria-expanded="true" aria-controls="collapse{{ $loop->index }}">
        {{ $day->name }}
      </button>
    </h2>
    <div id="collapse{{ $loop->index }}" class="accordion-collapse collapse  "  data-bs-parent="#accordionExample">
      <div class="accordion-body d-flex flex-column justify-content-center align-items-center">
        <figure class="figure mt-3">
            <img src="{{ Storage::url($day->image) }}" class="w-75 figure-img img-fluid rounded d-block mx-auto"
                alt="...">
            <figcaption class="figure-caption text-center">{{ $day->caption }}</figcaption>
        </figure>
        <div class="open texto fs-5">
            {!! $day->body !!}
        </div>
      
            
           
        </div>
      </div>
    
  </div>
  @endforeach
</div> 
<div id="map" class="mb-5" style="width:100%;height:400px">

</div>

           
                <div class="open texto fs-5">
                    {!! $tour->conclusion !!}
                </div>
                <div class=" d-flex justify-content-center mt-5 mb-5">
                    <a href="{{ route('contacttour', $tour) }}" class="btn btn-dark patua p-2">Plan this tour</a>
                </div>
                <div id="social-links" class="d-flex justify-content-center social-share">
                    <p>Share this Tour with: {!! Share::currentPage('Share')->facebook()->twitter() !!}</p>
                </div>
            </div>

        </div>

    </div>
@endsection
@section('js')
<script>
          var map = L.map('map').setView([{{ $tour->day()->first()->latitud }}, {{ $tour->day()->first()->longitud }}],
                                4);

                            L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={{ env('MAP_KEY') }}', {
                                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                                id: 'mapbox/streets-v11',
                                tileSize: 512,
                                zoomOffset: -1,

                            }).addTo(map);
                            var datos = <?= json_encode($tour->day);?>;
                    for(var i=0;i<datos.length;i++){
                        var marker = L.marker([datos[i].latitud,datos[i].longitud]).addTo(map).bindPopup(datos[i].name); 
                    }
             
                  
                
            
             
       
             
          
              
                 
                
</script>
    
@endsection
