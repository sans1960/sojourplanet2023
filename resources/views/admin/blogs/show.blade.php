@extends('layouts.admin')
@section('title')
{{ $blog->name }}

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                     <h2> {{$blog->name}}</h2>
                    </div>
                    <figure class="figure mt-3">
                        <img src="{{Storage::url($blog->image)}}" class="w-50 figure-img img-fluid rounded d-block mx-auto" alt="...">
                        <figcaption class="figure-caption ms-2">{{ $blog->caption}}</figcaption>
                      </figure>
                    <div class="card-body p-3">
                      <h5 class="card-title">{{$blog->categoryblog->name}}</h5>
                      <h5 class="card-title">{{$blog->date}}</h5>
                      <div class="open texto">
                                {!! $blog->description !!}
                      </div>
                      <div>
                        @foreach ($blog->post as $post)
                            <h5>{{$post->name}}</h5>
                        @endforeach
                      </div>
                      <div class="open texto">
                        {!! $blog->conclusion !!}
                      </div>

                    </div>
                  </div>
            </div>
        </div>
    </div>

@endsection
