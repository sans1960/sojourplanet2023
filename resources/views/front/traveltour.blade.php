@extends('front.layouts.base')
@section('title')
    All Tours
@endsection
@section('css')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <h2 class="patua text-center">All Tours</h2>
            @foreach ($tours as $tour)
                <div class="col-md-3 mb-4">
                    <a href="{{ route('tour', $tour) }}" class="nav-link  ">
                        <div class="d-flex justify-content-center align-items-center p-2 "
                            style="background-image: url({{ Storage::url($tour->image) }});background-size:cover; height:200px;">
                            <h5 class="fs-5 open fw-bold text-white">{{ $tour->name }}</h5>

                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
