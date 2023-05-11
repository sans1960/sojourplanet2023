@extends('front.layouts.base')
@section('title')
    Contact for {{ $sight->title }}
@endsection

@section('content')
    <div class="container-fluid  d-flex justify-content-center align-items-center"
        style="background-image: url({{ Storage::url($sight->country->image) }});height:300px; background-size:cover;background-position:center center;">

        <h1 class="text-white">Planning your trip by {{ $sight->country->name }}</h1>

    </div>
    <div class="container">
        <h4 class="text-center mt-4">Prepare a tailor-made trip with us visiting {{ $sight->title }} </h4>
        <form action="{{ route('contactos.sight.store') }}" method="post">
            <x-honeypot />
            @csrf
            <h3>Your details</h3>
            <input type="hidden" name="sight_id" value="{{ $sight->id }}">
            <input type="hidden" name="country" value="{{ $sight->country->name }}">
            <input type="hidden" name="subregion" value="{{ $sight->subregion->name }}">
            @include('layouts.formularios.basic')
            <div class="row mt-5">
                <h4 class="mt-3 mb-3">Your interests</h4>
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" checked type="checkbox" name="sight" value="{{ $sight->title }}"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            {{ $sight->title }}
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 mt-5">
                    <h4>Another countries of {{ $sight->subregion->name }}</h4>
                    @foreach ($countries as $country)
                        <div class="form-check form-check-inline mt-3">
                            <input class="form-check-input" name="countries[]" type="checkbox" id="inlineCheckbox1"
                                value="{{ $country->name }}">
                            <label class="form-check-label" for="inlineCheckbox1">{{ $country->name }}</label>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-6 d-flex justify-content-center flex-column align-items-center mt-5">
                    @if (count($items))
                        <h4>More sites related</h4>
                        @foreach ($items as $item)
                            <div class="form-check mt-3">
                                <input class="form-check-input" name="sights[]" type="checkbox" value="{{ $item->title }}"
                                    id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{ $item->title }}
                                </label>
                            </div>
                        @endforeach
                    @endif
                </div>


            </div>
            <div class="row mt-5">
                <div class="col-md-10 mx-auto">
                    <h4>Another specificatons and sites</h4>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Please tell us about your wishes:
                        </label>
                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>

            </div>
            @include('layouts.formularios.footer')
        </form>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#travel').on('change', function() {
                if (this.value == 'Family') {
                    $("#child").show();
                } else {
                    $("#child").hide();
                }
            });
        });
    </script>
@endsection
