@extends('layouts.admin')
@section('title')
    {{ $day->name }}
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2> {{ $day->name }}</h2>
                        <h4> {{ $day->introduction }}</h4>
                    </div>

                    <div class="card-body p-3">
                        <h5 class="card-title">{{ $day->tour->name }}</h5>
                        <h5 class="card-title">{{ $day->order }}</h5>

                        <div>
                            {!! $day->body !!}
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
