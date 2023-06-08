@extends('front.layouts.base')


@section('title')
    {{ $categorysight->name }}
@endsection
@section('content')
    <div class="container">
        <h1 class="text-center patua mt-4">Travel Sight of {{ $categorysight->name }}</h1>
        <div class="row mt-5">
            @foreach ($sights as $sight)
            <div class="col-md-4 mb-4">
                <a href="{{ route('sight', $sight) }}" class="nav-link  ">
                    <div class="d-flex flex-column justify-content-between align-items-center p-2 "
                    style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($sight->image) }});background-size:cover; height:200px;">
                    <p class="text-white open">{{$sight->country->name}}</p>
                    <h5 class="fs-4 patua text-center text-white">{{ $sight->title }}</h5>

                </div>
                </a>
            </div>
        @endforeach

        </div>
       
                {!! $sights->links() !!}
          
    </div>
@endsection
