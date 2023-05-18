@extends('front.layouts.base')
@section('title')
    {{ $tour->name }}
@endsection
@section('css')
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
                @foreach ($tour->day as $day)
                    <h2> {{ $day->name }}</h2>
                    <figure class="figure mt-3">
                        <img src="{{ Storage::url($day->image) }}" class="w-75 figure-img img-fluid rounded d-block mx-auto"
                            alt="...">
                        <figcaption class="figure-caption ms-2">{{ $day->caption }}</figcaption>
                    </figure>
                    <div class="open texto fs-5">
                        {!! $day->body !!}
                    </div>
                    <div id="map{{ $loop->index }}" style="width:100%;height:400px">
                        <script>
                            var map = L.map('map{{ $loop->index }}').setView([{{ $day->latitud }}, {{ $day->longitud }}],
                                {{ $day->zoom }});

                            L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={{ env('MAP_KEY') }}', {
                                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                                id: 'mapbox/streets-v11',
                                tileSize: 512,
                                zoomOffset: -1,

                            }).addTo(map);

                            L.marker([{{ $day->latitud }}, {{ $day->longitud }}]).addTo(map);
                            // .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
                            // .openPopup();
                        </script>
                    </div>

                    <hr>
                @endforeach
                <div class="open texto fs-5">
                    {!! $tour->conclusion !!}
                </div>
                <div class=" d-flex justify-content-center mt-5 mb-5">
                    <a href="" class="btn btn-dark patua p-2">Plan this tour</a>
                </div>
                <div id="social-links" class="d-flex justify-content-center social-share">
                    <p>Share this Tour with: {!! Share::currentPage('Share')->facebook()->twitter() !!}</p>
                </div>
            </div>

        </div>

    </div>
@endsection
