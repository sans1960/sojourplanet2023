@extends('front.layouts.base')
@section('title')
Contact for {{ $tour->title }}
@endsection
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">
<style>
    .hide {
  display: none;
}
#valid-msg {
  color: #00c900;
}
    </style>     
@endsection
@section('content')
<div class="container-fluid  d-flex justify-content-center align-items-center"  style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($tour->image)}});height:300px; background-size:cover;background-position:center center;" >
       
    <h1 class="text-white">Planning the tour</h1>

</div>
<div class="container">
    <h4 class="text-center mt-4 patua">{{$tour->name}} tour details</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="card p-3">
                <form action="{{route('contactos.tour.store')}}" method="post">
                    <x-honeypot />
                    @csrf
                    <h5 class="patua">Your details</h5>
                    <div class="row mt-2">
                        <div class="col-md-4 mb-2 open">
                            <label for="name" class="form-label">Trait</label>
                            <select class="form-select form-select" name="trait" aria-label="Default select example">
                              <option ></option>
                              <option value=""></option>
                              <option value="Dr" {{ "Dr" === old('trait') ? 'selected' : '' }}>Dr</option>
                              <option value="Mr" {{ "Mr" === old('trait') ? 'selected' : '' }}>Mr</option>
                              <option value="Mrs" {{ "Mrs" === old('trait') ? 'selected' : '' }}>Mrs</option>
                              <option value="Ms" {{ "Ms" === old('trait') ? 'selected' : '' }}>Ms</option>
                              <option value="Mss" {{ "Mss" === old('trait') ? 'selected' : '' }}>Mss</option>
                            </select>
                          </div>
                          <div class="col-md-4 mb-2 open">
                            <input type="hidden" name="tour_id" value="{{$tour->id}}">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control"  id="name" placeholder="Name*" value="{{old('name')}}">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                              
                          </div>
                        <div class="col-md-4 mb-2 open">
                            <label for="surname" class="form-label">Surname</label>
                            <input type="text" name="surname" value="{{old('surname')}}" class="form-control"  id="name" placeholder="Surname*">
                            @if ($errors->has('surname'))
                            <span class="text-danger">{{ $errors->first('surname') }}</span>
                            @endif
                          </div>
                          
                    </div>
                    <div class="row mt-2">
                         <div class="col-md-6 mb-2 open">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" value="{{old('email')}}" class="form-control"  id="email" placeholder="Email*">
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                         </div>
                         <div class="col-md-6 mb-2">
                            <h6 class="card-title">Phone Number:</h6>
                            <input id="phone" type="tel" name="phone" value="{{old('phone')}}"class="form-control">
                            <span id="valid-msg" class="hide">✓ Valid</span>
                            <span id="error-msg" class="hide"></span>
                            @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                         </div>
                    </div>
                    <div class="row mt-2">
                       <div class="col-md-4 mb-2 open">
                        <label for="" class="form-label">Country</label>
                        <select class="form-select " name="country_code_id" aria-label="Default select example">
                          <option ></option>
                          @foreach ($countrycodes as $countrycode)
                          <option value="{{$countrycode->id}}" {{ old('country_code_id') == $countrycode->id ? 'selected' : '' }} >{{$countrycode->country}}</option>
                      @endforeach
                        </select>
                        @if ($errors->has('country_code_id'))
                        <span class="text-danger">{{ $errors->first('country_code_id') }}</span>
                        @endif
                      </div>
                       
                       <div class="col-md-4 mb-2 open">
                        <label for="city" class="form-label">City</label>
                        <input type="text" value="{{old('city')}}" name="city" class="form-control"  id="city" placeholder="City">
                       
                       </div>
                       <div class="col-md-4 mb-2">
                        <label for="zipcode" class="form-label">Zipcode</label>
                        <input type="text"  value="{{old('zipcode')}}" name="zipcode" class="form-control"  id="zipcode" placeholder="Zipcode">
                        @if ($errors->has('zipcode'))
                        <span class="text-danger">{{ $errors->first('zipcode') }}</span>
                        @endif
                       </div>
                       
                    </div>
                    <div class="row mt-2">
                        <h5 class="patua">Your travel plans</h5>
                        <p>Later will define the departure date.</p>
                     
                       <div class="col-md-3 open">
                        <label for="" class="form-label">Season</label>
                        <select class="form-select  mb-3" name="season" >
                            <option ></option>
                            <option value=""></option>
                            <option value="Spring" {{ "Spring" === old('season') ? 'selected' : '' }} >Spring</option>
                            <option value="Summer" {{ "Summer" === old('season') ? 'selected' : '' }} >Summer</option>
                            <option value="Winter" {{ "Winter" === old('season') ? 'selected' : '' }}>Winter</option>
                            <option value="Autumm" {{ "Autumm" === old('season') ? 'selected' : '' }} >Autumm</option>
                          </select>
                       </div>
                       <div class="col-md-3 open">
                        <label for="" class="form-label">Travelers</label>
                        <select id="travel" class="form-select mb-3" name="travelers">
                            <option ></option>
                            <option value=""></option>
                            <option value="Individual" {{ "Individual" === old('travelers') ? 'selected' : '' }}>Individual</option>
                            <option value="Couple" {{ "Couple" === old('travelers') ? 'selected' : '' }} >Couple</option>
                            <option value="Family" {{ "Family" === old('travelers') ? 'selected' : '' }}>Family</option>
                            <option value="Group" {{ "Group" === old('travelers') ? 'selected' : '' }}>Group</option>
                          </select>
                          <div class="form-check" id="child" style="display: none;">
                            <input class="form-check-input" type="radio" name="children" value="Travel with children" {{ (old('children') == 'Travel with children') ? 'checked' : ''}} id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Travel with children
                            </label>
                          </div>
                       </div>
                      
                    </div>
              
                    <div class="row mt-2">
                        <h5 class="patua">Other specifications</h5>
                       <div class="col-md-4 open">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" {{ (old('romantic') == 'Romantic trip') ? 'checked' : ''}} name="romantic" value="Romantic trip">
                            <label class="form-check-label" for="inlineCheckbox1">Romantic trip</label>
                          </div>
                       </div>
                       <div class="col-md-4 open">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" {{ (old('mobility') == 'Reduced mobility') ? 'checked' : ''}} name="mobility" value="Reduced mobility">
                            <label class="form-check-label" for="inlineCheckbox2">Reduced mobility</label>
                          </div>
                       </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <h5 class="patua">Tell us about your plans</h5>
                            <div class="mb-3 open">
                                <label for="exampleFormControlTextarea1" class="form-label">Countries, places or things you are interested</label>
                                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3">
                                    {{old('message')}}
                                </textarea>
                              </div>
                        </div>
                
                     </div>
                     <div class="d-flex justify-content-center align-items-center flex-column open">
                        <div class="form-check">
                            <input class="form-check-input" {{ (old('legal') == 'on') ? 'checked' : ''}} type="radio" name="legal" value="on" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                I aprove the <span><a href="https://sojournplanet.com/privacy-policy"
                                    target="_blank" style="text-decoration: underline;"><b>Privacy Policy</b></a></span>,
                                    and the <span><a href="https://sojournplanet.com/terms-and-conditions" target="_blank" 
                                    style="text-decoration: underline;"><b>Terms and Conditions</b></a></span>
                            </label>
                            @if ($errors->has('legal'))
                            <span class="text-danger">{{ $errors->first('legal') }}</span>
                            @endif
                          </div>
                          <button type="submit" class="btn btn-outline-dark border border-dark mt-3 patua px-3 py-2 rounded-pill">Send</button>
                    
                     </div>

                </form>
            </div>
        </div>
    </div>
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
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>
<script>
    const input = document.querySelector("#phone");
const errorMsg = document.querySelector("#error-msg");
const validMsg = document.querySelector("#valid-msg");

// here, the index maps to the error code returned from getValidationError - see readme
const errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

// initialise plugin
const iti = window.intlTelInput(input, {
	utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/utils.js"
});

const reset = () => {
	input.classList.remove("error");
	errorMsg.innerHTML = "";
	errorMsg.classList.add("hide");
	validMsg.classList.add("hide");
};

// on blur: validate
input.addEventListener('blur', () => {
	reset();
	if (input.value.trim()) {
		if (iti.isValidNumber()) {
			validMsg.classList.remove("hide");
		} else {
			input.classList.add("error");
			const errorCode = iti.getValidationError();
			errorMsg.innerHTML = errorMap[errorCode];
			errorMsg.classList.remove("hide");
		}
	}
});

// on keyup / change flag: reset
input.addEventListener('change', reset);
input.addEventListener('keyup', reset);
</script> 
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
    </script>  
@endsection
