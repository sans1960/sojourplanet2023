@extends('layouts.admin')
@section('title')
{{$location->name}}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <img src="{{Storage::url($location->image)}}" class="card-img-top" alt="...">
                <p class="card-text">{{$location->caption}}</p>
                <div class="card-body">
                    <h5 class="card-title">{{$location->name}}</h5>
                    <p class="card-text">{{$location->country->name}}</p>
                    <div>
                        {!! $location->body!!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection