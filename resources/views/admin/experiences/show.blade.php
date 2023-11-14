@extends('layouts.admin')
@section('title')
{{$experience->name}}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <img src="{{Storage::url($experience->image)}}" class="card-img-top" alt="...">
                <p class="card-text">{{$experience->caption}}</p>
                <div class="card-body">
                    <h5 class="card-title">{{$experience->name}}</h5>
                    <p class="card-text">{{$experience->country->name}}</p>
                    <div>
                        {!! $experience->body!!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection