@extends('layouts.admin')
@section('title')
{{ $destination->name }}

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                     <h2> {{$destination->name}}</h2>
                    </div>
                    <figure class="figure">
                        <img src="{{Storage::url($destination->image)}}" class="w-50 figure-img img-fluid rounded d-block mx-auto" alt="...">
                        <figcaption class="figure-caption">{{ $destination->caption}}</figcaption>
                      </figure>
                    <div class="card-body">
                      <h5 class="card-title">{{$destination->title}}</h5>
                      <h5 class="card-title">{{$destination->subtitle}}</h5>
                      <div>
                                {!! $destination->body !!}
                      </div>
                      <div>
                        {!! $destination->sidebody !!}
                      </div>

                    </div>
                  </div>
            </div>
        </div>
    </div>

@endsection
