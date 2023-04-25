@extends('front.layouts.base')
@section('title')
    All Sights
@endsection
@section('css')

@endsection
@section('content')
<div class="container">
    <h1 class="text-center patua mt-4">Travel Sight</h1>
    <div class="row mt-5">
      @foreach ($sights as $sight)
      <div class="col-md-3 mb-4">
        <a href="{{ route('sight', $sight) }}" class="nav-link  ">
            <div class="card p-2 ">
                <img src="{{Storage::url($sight->image)}}" class="img-fluid" alt="">
                <div class="d-flex flex-column justify-content-start align-items-start p-2">
                    <h6 class="card-text text-secondary open">{{$sight->country->name}}</h6>
                    <h5 class="patua">{{$sight->title}}</h5>
                    <h6 class="card-text text-secondary open">{{$sight->categorysight->name}}</h6>
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
@section('js')

@endsection