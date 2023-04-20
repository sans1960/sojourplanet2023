@extends('front.layouts.base')
@section('title')
Start to plan my trip
@endsection
@section('content')
<div class="container-fluid  d-flex justify-content-center align-items-center"  style="background-image: url({{ asset('img/beach.jpg')}});height:300px; background-size:cover;background-position:center center;" >
       
    <h1 class="text-white">Planning your trip</h1>

</div>
<div class="container">
    <h4 class="text-center mt-4">Inquire about a tailor-made trip with us</h4>
<form action="{{ route('contactos.general.store')}}" method="post">
    <x-honeypot />
  @csrf
    <h3>Your details</h3>
 @include('layouts.formularios.basic')
    <div class="row mt-5">
        <div class="col-md-10 mx-auto">
            <h4>Tell us about your plans</h4>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Countries, places or things you are interested</label>
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