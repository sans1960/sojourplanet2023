@extends('layouts.admin')
@section('title')
    {{ $destinationcontact->name }} {{ $destinationcontact->surname }}
@endsection
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-10 mx-auto">

                <div class="card">
                    <div class="card-header">
                        {{ $destinationcontact->trait }} {{ $destinationcontact->name }} {{ $destinationcontact->surname }}
                    </div>
                    <div class="card-body">
                        <div>

                            {{ $destinationcontact->destination->name }}



                        </div>
                        <div class="row">
                            <div class="col">
                                {{ $destinationcontact->email }}
                            </div>
                            <div class="col">
                                {{ $destinationcontact->phone }}
                            </div>
                            <div class="col">
                                {{ $destinationcontact->created_at }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                {{ $destinationcontact->city }}
                            </div>
                            <div class="col">
                                {{ $destinationcontact->state }}
                            </div>
                            <div class="col">
                                {{ $destinationcontact->zipcode }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                {{ $destinationcontact->duration }}
                            </div>
                            <div class="col">
                                {{ $destinationcontact->season }}
                            </div>
                            <div class="col">
                                {{ $destinationcontact->travelers }}
                            </div>
                            <div class="col">
                                {{ $destinationcontact->type }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                {{ $destinationcontact->children }}
                            </div>
                            <div class="col">
                                {{ $destinationcontact->romantic }}
                            </div>
                            <div class="col">
                                {{ $destinationcontact->mobility }}
                            </div>
                        </div>

                        <div>
                            {{ $destinationcontact->message }}
                        </div>
                        <div>
                            @if ($destinationcontact->countries)
                                <ul>
                                    @foreach ($destinationcontact->countries as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            @endif


                        </div>
                        <div>





                        </div>

                    </div>
                </div>


            </div>

        </div>


    </div>
@endsection
