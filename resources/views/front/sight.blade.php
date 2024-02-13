@extends('front.layouts.sights')
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
                <figcaption class="figure-caption text-center">{{ $sight->caption }}</figcaption>
            </figure>
            <h4 class="text-center patua"> {{ $sight->title }}</h4>
            <div class=" mt-4 d-flex flex-row justify-content-center align-items-center">
                <a class="nav-link " href="{{ route('destinationsights', $sight->destination) }}">
                    <h4 class="patua ">{{ $sight->destination->name }}</h4>
                </a>
                <p class="ms-2">|</p>
                {{-- @if (count($sight->countries))
                <p class="ms-2">|</p>
                @foreach ($sight->countries as $country)
                <a class="nav-link ms-2" href="{{ route('countrysights', $country) }}">
                    <h4 class="patua ">{{ $country->name }}</h4>
                </a>
                <p class="ms-2">|</p>
                @endforeach
                @else --}}
                <a class="nav-link ms-2" href="{{ route('countrysights', $sight->country) }}">
                    <h4 class="patua ">{{ $sight->country->name }}</h4>
                </a>
                {{-- @endif --}}


                <p class="ms-2">|</p>
                <a class="nav-link " href="{{ route('categorysights', $sight->categorysight) }}">
                    <h5 class="ms-2 open">{{ $sight->categorysight->name }}</h5>
                </a>
            </div>
            <div class=" mt-4 d-flex flex-row flex-wrap justify-content-center align-items-center">
                @if (count($sight->tags))
                <a class="open nav-link me-2">Related tags |</a>
                @foreach ($sight->tags as $tag)
                <a href="{{ route('tagsights', $tag) }}" class="me-2 nav-link text-dark patua">{{ $tag->name }} |</a>
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
                <figcaption class="figure-caption text-center">{{ $item->caption}}</figcaption>


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
            <div id="social-links" class="d-flex justify-content-center social-share">
                <p>Share this Sight with: {!! Share::currentPage('Share')->facebook()->twitter() !!}</p>
            </div>

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
@endsection