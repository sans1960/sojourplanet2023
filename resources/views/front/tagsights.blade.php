@extends('front.layouts.base')


@section('title')
Discover {{ $tag->name }} Inspiring Sights | Luxury Tailor-Made Journeys with Sojournplanet
@endsection
@section('meta_title2')
Discover {{ $tag->name }} Inspiring Sights | Luxury Tailor-Made Journeys with Sojournplanet
@endsection
@section('meta_description2')
Explore {{ $tag->name }} inspiring sights with Sojournplanet. Experience personalized luxury travel focused on {{ $tag->name }}, with bespoke itineraries designed to match your passions. Start planning your unique adventure today.

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
    <h1 class="text-center patua mt-2 fs-4"> {{ $tag->name }} inspiring sights</h1>
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