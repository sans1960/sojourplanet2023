@extends('front.layouts.base')

@section('title')
Explore Inspiring {{ $categorysight->name }} Around the World | Luxury Tailor-Made Journeys with Sojournplanet
@endsection
@section('meta_title2')
Explore Inspiring {{ $categorysight->name }} Around the World | Luxury Tailor-Made Journeys with Sojournplanet
@endsection
@section('meta_description2')
Discover Inspiring {{ $categorysight->name }} With Sojournplanet. Explore Personalized Luxury Travel Experiences in {{ $categorysight->name }}, Designed to Fit Your Unique Preferences. Start Planning Your Adventure Today.

@endsection
@section('css')
<style>
    .pagination>li>a,
    .pagination>li>span {
        color: darkslategrey; // use your own color here
    }

    .pagination>.active>a,
    .pagination>.active>a:focus,
    .pagination>.active>a:hover,
    .pagination>.active>span,
    .pagination>.active>span:focus,
    .pagination>.active>span:hover {
        background-color: #212529;
        /* border-color: green; */
    }
</style>
@endsection
@section('content')
<div class="container">
    @include('front.layouts.navbardestinations', [
    'destinations' => ($destinations = App\Models\Destination::all())
    ])


    <h1 class="text-center patua mt-2 fs-4">Inspiring {{ $categorysight->name }} around the world</h1>
    <div class="row mt-4">
        @foreach ($sights as $sight)
        <div class="col-md-4 mb-4">
            <a href="{{ route('sight', $sight) }}" class="nav-link  ">
                <div class="d-flex flex-column justify-content-between align-items-center p-2 "
                    style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($sight->image) }});background-size:cover; height:250px;">
                    <p class="text-white open">{{$sight->country->name}}</p>
                    <h2 class="fs-4 patua text-center text-white">{{ $sight->title }}</h2>

                </div>
            </a>
        </div>
        @endforeach

    </div>

    {!! $sights->links() !!}

</div>
@endsection