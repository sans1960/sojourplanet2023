@extends('front.layouts.base')
@section('title')
All countries
@endsection
@section('content')
<div class="container-fluid d-flex  justify-content-center align-items-center p-2"
    style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ asset('img/bosque.jpg') }});background-size:cover; height:250px;background-position:center;">
    <h4 class="patua text-white text-center">Destinations A to Z</h4>
</div>
<div class="container  mb-5">
    <div class="row">
        <div class="col-md-8 mx-auto">

            @php
            $upper = array('A', 'B', 'C', 'D', 'E', 'F', 'G','H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R',
            'S',
            'T', 'U',
            'V', 'W', 'X', 'Y', 'Z');

            @endphp
            <h4 class="patua text-center mt-5 mb-5">Click on the initial to see the different destinations</h4>

            <div class="d-flex flex-row flex-wrap p-2 justify-content-center">
                @foreach ($upper as $item)
                <form action="{{route('search',$item)}}" method="get" class=" me-4 mb-3">
                    @csrf
                    <input type="submit" value="{{$item}}" class="form-control patua border border-0 fs-4" name="query">
                </form>

                @endforeach
            </div>





        </div>
    </div>
</div>
<div class="container-fluid d-flex  justify-content-center align-items-center p-2"
    style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ asset('img/bosque.jpg') }});background-size:cover; height:250px;background-position:center;">

</div>
<div class="container  text-center">
    <div class="row mt-5">

        @if (isset($countries))
        @if ($countries !=null)
        @if (count($countries))
        <h4 class="fs-3 patua">{{$q}}</h4>

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