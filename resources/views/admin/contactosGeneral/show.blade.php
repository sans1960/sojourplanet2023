@extends('layouts.admin')
@section('title')
@foreach ($contact as $item)
{{ $item->name }} {{ $item->surname }}
@endforeach

@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-10 mx-auto">
            @foreach($contact as $item)
            <div class="card">
                <div class="card-header">
                  {{$item->trait}} {{$item->name}} {{$item->surname}}
                </div>
                <div class="card-body">
                   <div class="row">
                    <div class="col">
                      <p>Email : {{$item->email}} </p>  
                    </div>
                    <div class="col">
                      <p>Phone : +{{$item->country_code->phone_code.$item->phone}} </p>  
                    </div>
                    <div class="col">
                      <p>Data : {{$item->created_at}}</p>  
                    </div>
                   </div>
                   <div class="row">
                    <div class="col">
                      <p>Country : {{$item->country_code->country}} </p>  
                    </div>
                    <div class="col">
                        <p>City : {{$item->city}}</p>
                    </div>
                    <div class="col">
                      <p>Zipcode : {{$item->zipcode}}</p>  
                    </div>
                    <div class="col">
                     <p>IP : {{$item->ipAdress}}</p>  
                    </div>
                   </div>
                   <div class="row">
                    <div class="col">
                        {{$item->duration}}
                    </div>
                    <div class="col">
                        {{$item->season}}
                    </div>
                    <div class="col">
                        {{$item->travelers}}
                    </div>
                   </div>
                   <div class="row">
                    <div class="col">
                        {{$item->children}}
                    </div>
                    <div class="col">
                        {{$item->romantic}}
                    </div>
                    <div class="col">
                        {{$item->mobility}}
                    </div>
                   </div>
                   <div class="row">
                    <div class="col">
                        {{$item->type}}
                    </div>
                 
                   </div>
                   <div>
                    {{$item->message}}
                   </div>
                </div>
              </div>
            @endforeach
         
        </div>
      
    </div>

    
</div> 

@endsection