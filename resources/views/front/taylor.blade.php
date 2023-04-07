@extends('front.layouts.base')
@section('title')
{{  Route::current()->getName();}}
@endsection
