@extends('front.layouts.base')
@section('title')
    Contact for {{ $destination->name }}
@endsection
@section('content')
    <div class="container-fluid  d-flex justify-content-center align-items-center"
        style="background-image: url({{ Storage::url($destination->image) }});height:300px; background-size:cover;background-position:center center;">

        <h1 class="text-white">{{ $destination->name }}</h1>

    </div>
    <div class="container">
        <h4 class="text-center mt-4">Inquire about a tailor-made trip for {{ $destination->name }}</h4>
        <form action="{{route('contactos.destination.store')}}" method="post">
            <x-honeypot />
            @csrf
            <h3>Your details</h3>
            @include('layouts.formularios.basic')
            <input type="hidden" name="destination_id" value="{{ $destination->id }}">
            <div class="row mt-5">
                <h3>Countries of {{$destination->name}}</h3>
                <div class="col-md-12 d-flex flex-wrap mt-5">
                 @foreach ($destination->country->sortBy('name') as $country)
                 <div class="form-check me-4">
                    <input class="form-check-input" type="checkbox" name="countries[]" value="{{$country->name}}" id="">
                    <label class="form-check-label" for="">
                      {{$country->name}}
                    </label>
                  </div>
                 @endforeach
                </div>
            </div>
         
            <div class="row mt-5">
                <div class="col-md-10 mx-auto">
                    <h4>More info</h4>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Tell us more interested </label>
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
    $(document).ready(function(){ 
 $('#travel').on('change', function() { 
 if ( this.value == 'Family'){ 
     $("#child").show(); 
 } 
 else{ 
     $("#child").hide(); 
 } 
 }); 
}); 
</script>
@endsection
