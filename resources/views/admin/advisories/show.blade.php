@extends('layouts.admin')
@section('title')
{{ $advisory->legend }}
@endsection
@section('content')

<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-md-4 mt-5 mx-auto">
            <div class="d-flex justify-content-center align-items-center">
                <div
                    style="background-color: {{$advisory->color}};width:50px;height:50px;border-radius:50%;line-height:50px;text-align:center;color:white;font-size:1.5em;font-weight:bold">
                    {{$advisory->level}}
                </div>
                <div style="background-color:{{$advisory->color}};padding:5px; color:white;margin-left:-5px;">
                    {{$advisory->legend}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection