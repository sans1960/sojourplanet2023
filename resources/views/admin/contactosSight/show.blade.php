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

                            {{ $contact->sight->title }}



                        </div>
                        <div class="row">
                            <div class="col">
                                {{ $contact->email }}
                            </div>
                            <div class="col">
                                +{{ $contact->country_code->phone_code.$contact->phone}}
                            </div>
                            <div class="col">
                                {{ $contact->ipAdress }}
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
                                {{ $contact->country_code->country }}
                            </div>
                            <div class="col">
                                {{ $contact->zipcode }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                {{ $contact->duration }}
                            </div>
                            <div class="col">
                                {{ $contact->season }}
                            </div>
                            <div class="col">
                                {{ $contact->travelers }}
                            </div>
                            <div class="col">
                                {{ $contact->type }}
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
                            {{ $contact->sight->country->name }}
                        </div>
                        <div>
                            {{ $contact->message }}
                        </div>
                        <div>
                            @if ($contact->countries)
                                <ul>
                                    @foreach ($contact->countries as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            @endif


                        </div>
                        <div>
                            @if ($contact->sights)
                                <ul>
                                    @foreach ($contact->sights as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            @endif




                        </div>

                    </div>
                </div>


            </div>

        </div>


    </div>
@endsection
