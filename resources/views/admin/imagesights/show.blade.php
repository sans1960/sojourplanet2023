@extends('layouts.admin')
@section('title')
    {{ $imagesight->title }}

@endsection
@section('content')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2> {{ $imagesight->title }}</h2>
                    </div>
                    <figure class="figure mt-3">
                        <img src="{{ Storage::url($imagesight->image) }}"
                            class="w-50 figure-img img-fluid rounded d-block mx-auto" alt="...">
                        <figcaption class="figure-caption ms-2">{{ $imagesight->caption }}</figcaption>
                    </figure>
                    <div class="card-body p-3">
                        <h5 class="card-title">{{ $imagesight->sight->title }}</h5>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection