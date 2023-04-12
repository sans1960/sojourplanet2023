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
                     <h2> {{$tour->name}}</h2>
                    </div>
                    <figure class="figure mt-3">
                        <img src="{{Storage::url($tour->image)}}" class="w-50 figure-img img-fluid rounded d-block mx-auto" alt="...">
                        <figcaption class="figure-caption ms-2">{{ $tour->caption}}</figcaption>
                      </figure>
                    <div class="card-body p-3">
                        @foreach ($tour->destinations as $destination)
                        <h5 class="card-title">{{$destination->name}}</h5>
                        @endforeach

                        @foreach ($tour->types as $type)
                        <h5 class="card-title">{{$type->name}}</h5>
                        @endforeach


                      <h5 class="card-title">{{$tour->price}}</h5>
                      <h5 class="card-title">{{$tour->duration}}</h5>
                      <h5 class="card-title">{{$tour->date}}</h5>

                      <h5 class="card-title">{{ $tour->countries}}</h5>


                      <div>
                                {!! $tour->description !!}
                      </div>
                      <div>
                        {!! $tour->conclusion !!}
                      </div>
                        @foreach ($tour->day as $day)
                            <h4>{{ $day->name}}</h4>
                        @endforeach
                    </div>
                  </div>
            </div>
        </div>
    </div>

@endsection
