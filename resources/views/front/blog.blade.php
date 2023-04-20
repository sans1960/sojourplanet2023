@extends('front.layouts.base')
@section('title')
    {{$blog->name}}
@endsection
@section('css')

@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 d-flex flex-column mt-3">
            <div class="p-2 d-flex flex-column justify-content-center align-items-center" style="background-image: url({{Storage::url($blog->image)}});background-size:cover;height:200px;">
             <h3 class="text-white patua">{{$blog->name}}</h3>

            </div>
            <p>{{ $blog->caption}}</p>
            <h4>{{ $blog->categoryblog->name}}</h4>
            <div class="open texto fs-5">
                  {!! $blog->description!!}
            </div>
            <hr>
          @foreach ($blog->post as $post)
          <h2> {{$post->name}}</h2>
          <figure class="figure mt-3">
            <img src="{{Storage::url($post->image)}}" class="w-50 figure-img img-fluid rounded d-block mx-auto" alt="...">
            <figcaption class="figure-caption ms-2">{{ $post->caption}}</figcaption>
          </figure>
          <div class="open texto fs-5">
            {!! $post->body!!}
          </div>
           <div id="map{{$loop->index}}" style="width:100%;height:400px">
            <script>
                var map = L.map('map{{$loop->index}}').setView([{{ $post->latitud }}, {{ $post->longitud }}], {{ $post->zoom }});

            L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={{ env("MAP_KEY") }}' ,{
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1,

            }).addTo(map);

            L.marker([{{ $post->latitud }}, {{ $post->longitud }}]).addTo(map);
                // .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
                // .openPopup();
            </script>
           </div>

          <hr>
          @endforeach
          <div class="open texto fs-5">
            {!! $blog->conclusion!!}
          </div>
          <div id="social-links" class="d-flex justify-content-center social-share" >
            <p>Share this Blog with:  {!! Share::currentPage('Share')->facebook()->twitter(); !!}</p>
          </div>
        </div>
        <div class="col-md-4">

        </div>
    </div>
</div>

@endsection
@section('js')

@endsection
