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
                <div class="p-3 d-flex flex-column justify-content-center align-items-center"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($tour->image) }});background-size:cover;height:200px;">
                    <h3 class="text-white patua text-center">{{ $tour->name }}</h3>

                </div>
                <h2 class="patua mt-3 text-center">{{ $tour->title }}</h2>
                <h4 class="patua mt-3 text-center">{{ $tour->subtitle }}</h4>
            </div>

            <div class="row mt-4">
                <div class="col-md-4 mb-3 flex-column d-flex justify-content.center align-items-center">
                    @foreach ($tour->destinations as $destination)
                        <h4>{{ $destination->name }}</h4>
                    @endforeach
                    <h5>{{ $tour->countries }}</h5>
                    <h5>{{ $tour->city_first }}</h5>
                    <h5>{{ $tour->city_last }}</h5>
                    <h5>{{ $tour->duration }} days</h5>
                </div>
                <div class="col-md-4 mb-3 d-flex justify-content-center align-items-center">
                    @foreach ($type as $item)
                        <img src="{{ Storage::url($item->icon) }}" alt="" width="100">
                    @endforeach

                </div>
                <div class="col-md-4 mb-3">
                    <table class="table table-borderless">
                        <tbody>
                            @foreach ($tour->ratios as $item)
                                <tr>
                                    <td class="patua d-flex justify-content-start align-items-center mt-2">
                                        {{ $item->name }}
                                    </td>
                                    <td>
                                        @if ($item->ratio == 5)
                                            <span class="me-3 d-flex justify-content-start align-items-center ">
                                                <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                                <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                                <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                                <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                                <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>

                                            </span>
                                        @elseif($item->ratio == 4)
                                            <span class="me-3 d-flex justify-content-start align-items-center">
                                                <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                                <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                                <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                                <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                                <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>

                                            </span>
                                        @elseif ($item->ratio == 3)
                                            <span class="me-3 d-flex justify-content-start align-items-center">
                                                <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                                <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                                <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                                <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>
                                                <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>

                                            </span>
                                        @elseif ($item->ratio == 2)
                                            <span class="me-3 d-flex justify-content-start align-items-center">
                                                <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                                <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                                <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>
                                                <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>
                                                <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>

                                            </span>
                                        @elseif ($item->ratio == 1)
                                            <span class="me-3 d-flex justify-content-start align-items-center">
                                                <i class="bi bi-star-fill" style="color: yellow;font-size:1.3rem;"></i>
                                                <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>
                                                <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>
                                                <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>
                                                <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>

                                            </span>
                                        @elseif ($item->ratio == 0)
                                            <span class="me-3 d-flex justify-content-start align-items-center">
                                                <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>
                                                <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>
                                                <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>
                                                <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>
                                                <i class="bi bi-star" style="color: grey;font-size:1.3rem;"></i>

                                            </span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>


                </div>

            </div>
            <hr>
            <div class="row mt-4">
                <div class="col-md-8 mx-auto">
                    <div class="open texto fs-5">
                        {!! $tour->description !!}
                    </div>
                </div>
            </div>

            <hr>
            <div class="row mt-4 ">


                <div class="col-md-6 mx-auto">
                    
                    <div class="d-flex justify-content-center align-items-center"
                        style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url({{ Storage::url($tour->image) }}); height:300px;background-size:cover">
                        <a href="{{route('imagestour',$tour)}}" target="_blank" class="btn btn-outline-dark border border-whire mt-3 patua px-3 py-2 rounded-pill text-white"
                             >Image
                            Gallery</a>
                    </div>

                    {{-- <div class="d-flex justify-content-center align-items-center"
                        style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url({{ Storage::url($tour->image) }}); height:300px;background-size:cover">
                        <a class="btn btn-outline-dark border border-whire mt-3 patua px-3 py-2 rounded-pill text-white"
                            data-bs-toggle="modal" data-bs-target="#exampleModal">Image
                            Gallery</a>
                    </div> --}}

                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header bg-dark text-white">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Gallery {{ $tour->name }}</h1>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                @foreach ($tour->imagetour as $item)
                                    <div class="col-md-4 mb-3">
                                        <a href="{{ Storage::url($item->image) }}" data-toggle="lightbox"
                                            data-gallery="example-gallery" class="col-sm-4"
                                            data-caption="{{ $item->title }}">
                                            <img src="{{ Storage::url($item->image) }}" class="img-fluid">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="modal-footer bg-dark">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion mb-5 mt-4" id="accordionExample">
            @foreach ($tour->day as $day)
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed bg-success text-white patua" onclick=""
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $loop->index }}"
                            aria-expanded="true" aria-controls="collapse{{ $loop->index }}">
                            {{ $day->name }}
                        </button>
                    </h2>
                    <div id="collapse{{ $loop->index }}" class="accordion-collapse collapse  "
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body d-flex flex-column justify-content-center align-items-center">

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
            var marker = L.marker([datos[i].latitud, datos[i].longitud]).addTo(map).bindPopup(datos[i].site);
        }
    </script>
@endsection
