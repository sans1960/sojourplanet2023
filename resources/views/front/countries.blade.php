@extends('front.layouts.base')
@section('title')
Destinations A to Z
@endsection
@section('meta_title2')
//
@endsection
@section('meta_description2')
//

@endsection
@section('content')
<div class="container-fluid d-flex  justify-content-center align-items-center p-2"
    style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ asset('img/bosque.jpg') }});background-size:cover; height:250px;background-position:center;">
    <h1 class="patua text-white text-center fs-4">Destinations A to Z</h1>
</div>
<div class="container  mb-5">
    <div class="row">
        <div class="col-md-8 mx-auto">

            @php
            $upper = array('A', 'B', 'C', 'D', 'E', 'F', 'G','H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R',
            'S',
            'T', 'U',
            'V', 'W', 'Y', 'Z');

            @endphp

            <div class="d-flex flex-row flex-wrap p-2 justify-content-center mt-4 mb-5">
                @foreach ($upper as $item)
                <form action="{{route('search',$item)}}" method="get" class=" me-4 mb-2">
                    @csrf
                    <input type="submit" value="{{$item}}" class="form-control patua border border-0 fs-6" name="query">
                </form>

                @endforeach
                <p class="open text-center mb-5 fs-6">Click on the initial to see the different destinations</p>
            </div>
            
            





        </div>
    </div>
</div>
<div class="container-fluid d-flex  justify-content-center align-items-center p-2"
    style="background-image:linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url({{ asset('img/fnd.png') }});background-size:cover; height:1px;background-position:center;">

</div>
<div class="container  text-center">
    <div class="row mt-5">

        @if (isset($countries))
        @if ($countries !=null)
        @if (count($countries))
        <h2 class="fs-3 patua">{{$q}}</h2>

        <p class="open">{{count($countries)}} results</p>
        <div class="d-flex flex-row flex-wrap p-2 justify-content-center mb-5">
            @foreach ($countries->sortBy('slug') as $country)
            <a href="{{route('country',$country)}}" class="ms-3 nav-link patua">{{$country->name}}</a>
            @endforeach
        </div>
        @else
        <p>No results for {{$q}}</p>
        @endif

        @endif
        @endif

    </div>
</div>


@endsection