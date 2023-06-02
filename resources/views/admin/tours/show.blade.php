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
    </div>
@endsection
