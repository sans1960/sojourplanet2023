@extends('front.layouts.base')


@section('title')
    {{ $destination->name }}
@endsection
@section('content')
    <div class="container">
        @include('front.layouts.navbardestinations', [
            'destinations' => ($destinations = App\Models\Destination::all()),
        ]);
        <h1 class="text-center patua mt-2">Countries of {{ $destination->name }}</h1>
        <div class="row">
            <div class="col-md-12 mx-auto d-flex flex-wrap p-2 justify-content-center">
                @foreach ($countries->sortBy('name') as $country)
                    <a href="{{ route('countrysights', $country) }}" class="nav-link me-3">{{ $country->name }}</a>
                @endforeach
            </div>
        </div>
        <div class="row mt-3">
            @foreach ($sights as $sight)
                <div class="col-md-3 mb-4">
                    <a href="{{ route('sight', $sight) }}" class="nav-link  ">
                        <div class="card p-2 ">
                            <img src="{{ Storage::url($sight->image) }}" class="img-fluid" alt="">
                            <div class="d-flex flex-column justify-content-start align-items-start p-2">
                                <h6 class="card-text text-secondary open">{{ $sight->country->name }}</h6>
                                <h5 class="patua">{{ $sight->title }}</h5>
                                <h6 class="card-text text-secondary open">{{ $sight->categorysight->name }}</h6>
                            </div>



                        </div>
                    </a>
                </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col-md-8 mx-auto d-flex justify-content-end">
                {!! $sights->links() !!}
            </div>
        </div>
    </div>
@endsection
