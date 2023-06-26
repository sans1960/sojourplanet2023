@extends('front.layouts.base')


@section('title')
    {{ $destination->name }}
@endsection
@section('css')
<style>
    .pagination > li > a,
.pagination > li > span {
    color: darkslategrey; // use your own color here
}

.pagination > .active > a,
.pagination > .active > a:focus,
.pagination > .active > a:hover,
.pagination > .active > span,
.pagination > .active > span:focus,
.pagination > .active > span:hover {
    background-color:#212529;
    /* border-color: green; */
}
</style>  
@endsection
@section('content')
    <div class="container">
        @include('front.layouts.navbardestinations', [
            'destinations' => ($destinations = App\Models\Destination::all())
        ])
           <h1 class="text-center patua mt-2"> Sights around {{ $destination->name }}</h1>
        <h2 class="text-center patua mt-2">Countries of {{ $destination->name }}</h2>
        <div class="row">
            <div class="col-md-12 mx-auto d-flex flex-wrap p-2 justify-content-center">
                @foreach ($countries->sortBy('name') as $country)
                    <a href="{{ route('countrysights', $country) }}" class="nav-link me-3">{{ $country->name }}</a>
                @endforeach
            </div>
        </div>
        <div class="row mt-3">
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
