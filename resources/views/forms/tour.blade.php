@extends('front.layouts.base')
@section('title')
    Contact for {{ $tour->name }}
@endsection
@section('content')
    <div class="container-fluid  d-flex justify-content-center align-items-center"
        style="background-image: url({{ Storage::url($tour->image) }});height:300px; background-size:cover;background-position:center center;">

        <h1 class="text-white">{{ $tour->name }}</h1>

    </div>
    <div class="container">
        <h4 class="text-center mt-4"> {{ $tour->name }}</h4>
        <form action="{{route('contactos.tour.store')}}" method="post">
            <x-honeypot />
            @csrf
            <h3>Your details</h3>
            <div class="row">
                <div class="col-md-4">
                    <select class="form-select form-select-lg mt-3 mb-3" name="trait" aria-label="Default select example">
                        <option>Choose your title</option>
                        <option value=""></option>
                        <option value="Dr">Dr</option>
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Ms">Ms</option>
                        <option value="Mss">Mss</option>
                    </select>
                </div>
            </div>


            <div class="row mt-5">

                <div class="col-md-6">




                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingname" placeholder="Name*" name="name"
                            required>
                        <label for="floatingname">Name*</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingsurname" placeholder="Surname*"
                            name="surname" required>
                        <label for="floatingsurname">Surname*</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingemail" placeholder="Email*" name="email"
                            required>
                        <label for="floatingemail">Email*</label>
                    </div>


                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingname" placeholder="Phone*" name="phone"
                            required>
                        <label for="floatingphone">Phone*</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingcity" placeholder="City*" name="city"
                            required>
                        <label for="floatingcity">City*</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingstate" placeholder="State*" name="state"
                            required>
                        <label for="floatingstate">State*</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingzipcode" placeholder="Zipcode"
                            name="zipcode">
                        <label for="floatingstate">Zipcode</label>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                  
                
                
                    <select id="travel" class="form-select form-select-lg mb-3" name="travelers"
                        aria-label=".form-select-lg example">
                        <option selected>Choose Travellers</option>
                        <option value="Individual">Individual</option>
                        <option value="Couple">Couple</option>
                        <option value="Family">Family</option>
                        <option value="Group">Group</option>
                    </select>
                    <div class="form-check" id="child" style="display: none;">
                        <input class="form-check-input" type="radio" name="children" value="Travel with children"
                            id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Travel with children
                        </label>
                    </div>
                 
                </div>
                <div class="col-md-6">
                    <select class="form-select form-select-lg mb-3" name="season" aria-label=".form-select-lg example">
                        <option selected>Choose Season</option>
                        <option value="Spring">Spring</option>
                        <option value="Summer">Summer</option>
                        <option value="Winter">Winter</option>
                        <option value="Autumm">Autumm</option>
                    </select>
                    <h4>Other specifications</h4>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="romantic"
                            value="Romantic trip">
                        <label class="form-check-label" for="inlineCheckbox1">Romantic trip</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="mobility"
                            value="Reduced mobility">
                        <label class="form-check-label" for="inlineCheckbox2">Reduced mobility</label>
                    </div>
            </div>
            <input type="hidden" name="tour_id" value="{{ $tour->id }}">


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
