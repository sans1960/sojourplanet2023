@extends('front.layouts.base')
@section('title')
All countries
@endsection
@section('content')
<div class="container-fluid d-flex  justify-content-center align-items-center p-2"
    style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ asset('img/bosque.jpg') }});background-size:cover; height:250px;background-position:center;">
    <h4 class="patua text-white">Destinations A to Z</h4>
</div>
<div class="container mt-5 mb-3">
    <div class="row">
        <div class="col-md-8 mx-auto">

            @php
            $upper = array('A', 'B', 'C', 'D', 'E', 'F', 'G','H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R',
            'S',
            'T', 'U',
            'V', 'W', 'X', 'Y', 'Z');

            @endphp

            <div class="d-flex flex-row flex-wrap p-2 justify-content-center">
                @foreach ($upper as $item)
                <form action="{{route('search',$item)}}" method="get" class=" me-3 mb-3">
                    @csrf
                    <input type="submit" value="{{$item}}" class="form-control btn btn-outline-success" name="query">
                </form>

                @endforeach
            </div>





        </div>
    </div>
</div>
<div class="container  text-center">
    <div class="row mt-2">

        @if (isset($countries))
        @if ($countries !=null)
        @if (count($countries))
        <h4>{{$q}}</h4>

        <p>{{count($countries)}} results</p>
        <div class="d-flex flex-row flex-wrap p-2 justify-content-center mb-5">
            @foreach ($countries->sortBy('name') as $country)
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