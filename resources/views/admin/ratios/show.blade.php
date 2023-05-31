@extends('layouts.admin')
@section('title')
    {{ $ratio->ratio }}
@endsection
@section('content')
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-4 mt-5 mx-auto">
                <div class="card">
                    <img src="{{ Storage::url($ratio->icon) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $ratio->ratio }}</h5>

                    </div>
                </div>
            </div>
        </div>
    @endsection