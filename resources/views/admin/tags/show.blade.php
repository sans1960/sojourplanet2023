@extends('layouts.admin')
@section('title')
{{ $tag->name }}
@endsection
@section('content')

<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-md-4 mt-5 mx-auto">
         <button class="rounded" style="background-color: {{$tag->color}};color:white;padding:5px;font-weight:bold">{{$tag->name}}</button>
        </div>
    </div>
</div>
@endsection
