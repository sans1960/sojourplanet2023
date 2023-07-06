@extends('front.layouts.base')
@section('title')
    All Sights
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
        <h1 class="text-center patua mt-4">Sights around the world</h1>
        @include('front.layouts.navbardestinations', [
            'destinations' => ($destinations = App\Models\Destination::all()),
        ])
        <div class="row mt-4">
            @foreach ($sights as $sight)
                <div class="col-md-4 mb-4">
                    <a href="{{ route('sight', $sight) }}" class="nav-link  ">
                        <div class="d-flex flex-column justify-content-between align-items-center p-2 "
                        style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($sight->image) }});background-size:cover; height:250px;">
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
@section('js')
@endsection
