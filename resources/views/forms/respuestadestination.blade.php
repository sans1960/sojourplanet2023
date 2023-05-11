@extends('front.layouts.base')
@section('title')
    Thanks you
@endsection
@section('content')
  <div class="container-fluid  d-flex flex-column justify-content-center align-items-center min-vh-100" style="background-image: url({{ Storage::url($contact->destination->image)}});background-size:cover;background-position:center center;"> 
 >
            <h3 class="text-white">Thanks: {{$contact->trait }} {{$contact->name }} {{$contact->surname }}</h3>
            <h4 class="text-white">{{$contact->destination->name}} </h4>
      
</div>  
   
@endsection