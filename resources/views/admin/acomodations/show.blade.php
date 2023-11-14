@extends('layouts.admin')
@section('title')
{{$acomodation->name}}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <img src="{{Storage::url($acomodation->image)}}" class="card-img-top" alt="...">
                <p class="card-text">{{$acomodation->caption}}</p>
                <div class="card-body">
                    <h5 class="card-title">{{$acomodation->name}}</h5>
                    {{-- <p class="card-text">{{$acommodation->country->name}}</p> --}}
                    <div>
                        {!! $acomodation->body!!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection