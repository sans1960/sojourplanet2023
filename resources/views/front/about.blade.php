@extends('front.layouts.base')
@section('title')
    About us
@endsection
@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(https://cdn.pixabay.com/photo/2016/01/09/18/27/journey-1130732_1280.jpg);background-size:cover;height:300px;background-position:center;">
    <h1 class="text-white patua">Welcome to Sojournplanet!</h1>
  </div>
  <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <h3 class="text-center patua">
                We are a premium online travel agency that makes your dreams come true
            </h3>

        </div>
    </div>
        <div class="row mt-5">
        <div class="col-md-8  texto open">
            <p class="mb-4 fw-bold"> We specialize in creating tailor-made travel experiences designed to fulfill your desires and exceed your expectations.</p>
            <p class="mb-3">At Sojournplanet we understand that each traveler is unique and has their own needs and preferences. We focus on offering a fully personalized service, tailoring every detail of the trip to your tastes and interests. Our travel consultants are always available to listen to your ideas and suggestions, and will work with you to design the perfect itinerary.We partner with the best service providers in each destination, guaranteeing luxury accommodations, exclusive activities and first-class culinary experiences. Our network of contacts around the world allows us to offer access to events and venues that are often not available to the general public. We work tirelessly to discover and select the most extraordinary destinations and authentic experiences for our clients.</p>
            <p>Sustainability and responsible tourism are core values at Sojournplanet. We strive to minimize our impact on the environment and promote the well-being of local communities. That is why we collaborate with organizations and projects that work to protect ecosystems and promote sustainable development in the places we visit. We offer personalized attention and exceptional service so you can enjoy unforgettable moments in exclusive destinations around the world.</p>
          
         

        </div>
        <div class="col-md-4 d-flex justify-content-start align-items-start flex-column px-5 ">
            <p class="patua  mb-3">With Sojorunplanet, traveling is living unique and memorable experiences. We invite you to explore the world with us and embark on the adventure of a lifetime.</p>
            <p class="patua">
                What's the trip of your dreams?
            </p>
                <div class="d-flex justify-content-end align-items-end ms-auto">
                    <a href="{{ route('contactgeneral') }}" class="btn btn-outline-dark border border-dark mt-3 patua px-3 py-2 rounded-pill">Start to plan my
                trip</a>
                </div>
        </div>
    </div>
  
  </div>

@endsection
