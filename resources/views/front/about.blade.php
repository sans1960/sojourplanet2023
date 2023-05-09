@extends('front.layouts.base')
@section('title')
    About us
@endsection
@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center" style="background-image: url(https://cdn.pixabay.com/photo/2016/01/09/18/27/journey-1130732_1280.jpg);background-size:cover;height:300px;background-position:center;">
    <h1 class="text-white">Welcome to Sojournplanet!</h1>
  </div>
  <div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mx-auto patua p-3 texto">
            <h5 class="mb-4">We are a premium online travel agency that makes your dreams come true. We specialize in creating tailor-made travel experiences designed to fulfill your desires and exceed your expectations. We offer personalized attention and exceptional service so you can enjoy unforgettable moments in exclusive destinations around the world.</h5>
            <h5 class="mb-4">At Sojournplanet we understand that each traveler is unique and has their own needs and preferences. We focus on offering a fully personalized service, tailoring every detail of the trip to your tastes and interests. Our travel consultants are always available to listen to your ideas and suggestions, and will work with you to design the perfect itinerary.</h5>
            <h5 class="mb-4">We partner with the best service providers in each destination, guaranteeing luxury accommodations, exclusive activities and first-class culinary experiences. Our network of contacts around the world allows us to offer access to events and venues that are often not available to the general public. We work tirelessly to discover and select the most extraordinary destinations and authentic experiences for our clients.</h5>
            <h5 class="mb-4">Sustainability and responsible tourism are core values at Sojournplanet. We strive to minimize our impact on the environment and promote the well-being of local communities. That is why we collaborate with organizations and projects that work to protect ecosystems and promote sustainable development in the places we visit.</h5>
            <h4 class="mt-4 fst-italic">With Sojorunplanet, traveling is living unique and memorable experiences. We invite you to explore the world with us and embark on the adventure of a lifetime.</h4>
         

        </div>

    </div>
    <div class="row">
        <div class="col-md-6 mx-auto d-flex justify-content-center align-items-center">
            <a href="{{route('dream')}}" class="btn btn-outline-dark mt-3 patua p-2 mt-5 mb-5 ">What's the trip of your dreams?</a>
        </div>
    </div>
  </div>

@endsection
