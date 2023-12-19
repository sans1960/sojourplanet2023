@extends('front.layouts.base')
@section('title')
All countries
@endsection
@section('content')
<div class="container py-3">
    <div class="row">
        <div class="col-md-12">
            <h4 class="mt-3 mb-5">All countries</h4>
            @php
            $upper = array('A', 'B', 'C', 'D', 'E', 'F', 'G','H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R',
            'S',
            'T', 'U',
            'V', 'W', 'X', 'Y', 'Z');

            @endphp

            <div class="d-flex flex-row flex-wrap p-2 justify-content-center">
                @foreach ($upper as $item)
                <form action="{{route('search',$item)}}" method="get" class="ms-3 mb-3">
                    @csrf
                    <input type="submit" value="{{$item}}" class="form-control btn btn-outline-success" name="query">
                </form>

                @endforeach
            </div>





        </div>
    </div>
</div>
<div class="container py-5">
    <div class="row mt-5">

        @if (isset($countries))
        @if ($countries !=null)
        @if (count($countries))
        <h4>{{$q}}</h4>

        <p>{{count($countries)}} results</p>
        <div class="d-flex flex-row flex-wrap p-2 justify-content-center mt-5">
            @foreach ($countries as $country)
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