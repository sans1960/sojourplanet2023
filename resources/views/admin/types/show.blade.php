@extends('layouts.admin')
@section('title')
{{ $type->name }}
@endsection
@section('content')

<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-md-4 mt-5 mx-auto">
         <button class="rounded" style="background-color: {{$type->color}};color:white;padding:5px;font-weight:bold">{{$type->name}}</button>
        </div>
    </div>
</div>
@endsection
