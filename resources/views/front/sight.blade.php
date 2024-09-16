@extends('front.layouts.base')
@section('meta_title')
{{ $sight->title }}
@endsection
@section('meta_description')
{!! $sight->extract !!}

@endsection
@section('meta_url')
{{url('sights/'.$sight->slug)}}
@endsection
@section('meta_image')
{{url(Storage::url($sight->image))}}
@endsection
@section('title')
{{ $sight->title }}
@endsection
@section('css')
@endsection
@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-8 mx-auto">

            <figure class="figure mt-3">
                <img src="{{ Storage::url($sight->image) }}" class="figure-img img-fluid  d-block mx-auto" alt="...">
                <figcaption class="figure-caption text-center mini">{{ $sight->caption }}</figcaption>
            </figure>
            <h1 class="text-center patua fs-2"> {{ $sight->title }}</h1>
                        <div class="  d-flex flex-column justify-content-center align-items-center">

                @if (count($sight->countries))

                @foreach ($sight->countries as $country)
                <a class="nav-link" href="{{ route('country', $country) }}" target="_blank">
                    <h2 class="patua fs-5">{{ $country->name }} </h2>

                </a>

                @endforeach

                @endif



            </div>
            <div class="  d-flex flex-row justify-content-center align-items-center">
                <a class="nav-link " href="{{ route('destinationsights', $sight->destination) }}">
                    <h3 class="patua fs-6">{{ $sight->destination->name }}</h3>
                </a>



                <p class="ms-2">|</p>
                <a class="nav-link " href="{{ route('categorysights', $sight->categorysight) }}">
                    <h3 class="ms-2 open fs-6">{{ $sight->categorysight->name }}</h3>
                </a>
            </div>

            <div class="mt-4 d-flex flex-row flex-wrap justify-content-center align-items-center">
                @if (count($sight->tags))
                <a class="open nav-link me-2 fs-6">Keywords |</a>
                @foreach ($sight->tags as $tag)
                <a href="{{ route('tagsights', $tag) }}" class="me-2 nav-link fst-italic patua fs-6">{{ $tag->name }} |</a>
                @endforeach
                @endif

            </div>

            <div class=" mt-4 texto fs-5 open">
                {!! $sight->extract !!}
            </div>
            <div class=" fs-5 open texto">
                {!! $sight->introduction !!}
            </div>

            <div class="open fw-bold fst-italic special text-center">
                {!! $sight->highlight !!}
            </div>



            @if ($sight->imagesight)
            @foreach ($sight->imagesight as $item)

            <figure class="figure mt-3">
                <img src="{{Storage::url($item->image)}}" class="figure-img img-fluid  d-block mx-auto" alt="...">
                <figcaption class="figure-caption text-center mini">{{ $item->caption}}</figcaption>


            </figure>
            <p class="open text-center">{{$item->title}}</p>
            @endforeach
            @endif
            <div class=" fs-5 open texto">
                {!! $sight->final !!}
            </div>
            <div class=" d-flex justify-content-center mt-5 mb-5">
                <a href="{{ route('contactsight', $sight) }}"
                    class="btn btn-outline-dark border border-dark  patua px-3 py-2 rounded-pill">Plan a trip here</a>
            </div>
            <div id="map" class="mb-5" style="width:100%;height:400px">
            </div>
        </div>
    </div>

    @if (count($proxims)>1)
    <h3 class="patua fs-4">Another inspiring sights</h3>
    @if (count($proxims)>=4)
    <div class="owl-carousel owl-theme mt-5">


        @foreach ($proxims as $item)
        @if ($item->id != $sight->id)
        <a href="{{route('sight',$item)}}" target="_blank" class="nav-link">
            <div class="d-flex flex-column justify-content-between text-white p-2 img-responsive"
                style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($item->image) }});background-size:cover;height:250px; ">
                <div class="d-flex justify-content-center align-items-center">
                    <p class="open">{{ $item->country->name }}</p>

                </div>
                <h4 class="fs-4 patua  text-center text-white">{{ $item->title }}</h4>
            </div>
        </a>
        @endif
        @endforeach
        @else
        <div class="row">
            @foreach ($proxims as $item)

            @if ($item->id != $sight->id)
            <div class="col-md-4">
                <a href="{{route('sight',$item)}}" target="_blank" class="nav-link">
                    <div class="d-flex flex-column justify-content-between text-white p-2 img-responsive"
                        style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($item->image) }});background-size:cover;height:250px; ">
                        <div class="d-flex justify-content-center align-items-center">
                            <p class="open">{{ $item->country->name }}</p>

                        </div>
                        <h4 class="fs-4 patua  text-center text-white">{{ $item->title }}</h4>
                    </div>
                </a>
            </div>
            @endif

            @endforeach
        </div>
        @endif





        @endif


    </div>
    <div class="row mt-5">
        <div id="social-links" class="d-flex justify-content-center social-share">
            <p>Share this sight with: {!! Share::currentPage('Share')->facebook() !!}</p>
        </div>





    </div>
</div>
@endsection
@section('js')
<script>
    var map = L.map('map').setView([{{ $sight->latitud }}, {{ $sight->longitud }}], {{ $sight->zoom }});

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={{ env('MAP_KEY') }}', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,

        }).addTo(map);

        L.marker([{{ $sight->latitud }}, {{ $sight->longitud }}]).addTo(map);
        // .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
        // .openPopup();
</script>
<script>
    $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            autoplay:true,
            responsive: {
             
                900: {
                items: 3,
                nav: false
                },
                0: {
                items: 1,
                nav: false
                },


            }
        });
   

</script>
@endsection