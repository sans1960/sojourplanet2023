@extends('front.layouts.base')
@section('title')
Contact-list
@endsection
@section('content')
    <div class="container vh-100">
         {{$listcontact->email}}
    </div>

@endsection