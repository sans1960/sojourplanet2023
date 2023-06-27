@extends('front.layouts.base')
@section('title')
    All Tours
@endsection
@section('css')
@endsection
@section('content')
    <div class="container vh-100">
        <h1 class="patua text-center mt-4">Tours around the world</h1>
        <div class="row">
            <div class="col-md-12 mx-auto d-flex flex-wrap p-2 justify-content-center">
                @include('front.layouts.toursdestinations',[
                'destinations'=>($destinations = App\Models\Destination::has('tours')->get()),
            ])
            </div>
        </div>
        <div class="row mt-4">           
            @foreach ($tours as $tour)
                <div class="col-md-4 mb-4">
                    <a href="{{ route('tour', $tour) }}" class="nav-link  ">
                        <div class="d-flex flex-column justify-content-between align-items-center p-2 "
                            style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($tour->image) }});background-size:cover; height:200px;">
                        
                            <p class="text-white open fw-bold">{{$tour->duration}} days</p>
                          
                            
                            <h5 class="fs-4 patua text-center  text-white">{{ $tour->name }}</h5>

                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
