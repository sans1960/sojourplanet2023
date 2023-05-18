@extends('layouts.admin')
@section('title')
    {{ $contact->name }} {{ $contact->surname }}
@endsection
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-10 mx-auto">

                <div class="card">
                    <div class="card-header">
                        {{ $contact->trait }} {{ $contact->name }} {{ $contact->surname }}
                    </div>
                    <div class="card-body">
                        <div>

                            {{ $contact->tour->name }}



                        </div>
                        <div class="row">
                            <div class="col">
                                {{ $contact->email }}
                            </div>
                            <div class="col">
                                {{ $contact->phone }}
                            </div>
                            <div class="col">
                                {{ $contact->created_at }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                {{ $contact->city }}
                            </div>
                            <div class="col">
                                {{ $contact->state }}
                            </div>
                            <div class="col">
                                {{ $contact->zipcode }}
                            </div>
                        </div>
                        <div class="row">
                       
                            <div class="col">
                                {{ $contact->season }}
                            </div>
                            <div class="col">
                                {{ $contact->travelers }}
                            </div>
                        
                        </div>
                        <div class="row">
                            <div class="col">
                                {{ $contact->children }}
                            </div>
                            <div class="col">
                                {{ $contact->romantic }}
                            </div>
                            <div class="col">
                                {{ $contact->mobility }}
                            </div>
                        </div>
                        <div class="">
                             @foreach ($contact->tour->types as $item)
                                 <p>{{$item->name}}</p>
                             @endforeach
                        </div>
                        <div class="">
                            @foreach ($contact->tour->destinations as $item)
                                <p>{{$item->name}}</p>
                            @endforeach
                       </div>
                       <div class="">
                        
                            <p>{{$contact->tour->countries}}</p>
                        
                   </div>
                     
                
                        <div>
                            {{ $contact->message }}
                        </div>
                  
                   

                    </div>
                </div>


            </div>

        </div>


    </div>
@endsection