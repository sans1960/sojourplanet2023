@extends('front.layouts.base')
@section('title')
What’s the trip of your dreams?
@endsection
@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center" style="background-image: url(https://cdn.pixabay.com/photo/2016/06/07/17/07/holiday-1442020_1280.jpg);background-size:cover;height:300px;background-position:center;">
    <h1 class="text-white">Discovering the world with us</h1>
  </div>
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-3 p-3 texto">
         <h5>Imagine a trip designed exclusively for you, where every detail reflects your desires, passions and interests. A trip that not only transports you to faraway places, but also immerses you in unique and unforgettable experiences. At Sojournplanet, we are dedicated to making your dream trip a reality, offering a tailor-made travel planning service that allows you to explore the world at your own pace and in your own way.</h5>
         <h5>Our personalized approach is based on listening carefully to your ideas and expectations, to design an itinerary that combines spectacular destinations with magical moments. Our team of experts is in charge of selecting the best hotels, restaurants and activities, guaranteeing a premium trip that satisfies all your desires and surprises you every step of the way.</h5>
         <h5>Your dream trip may take you to explore the natural wonders of the world, such as the surreal landscapes of Iceland, the Amazon rainforest or the majesty of the Grand Canyon. Or perhaps you prefer to immerse yourself in the cultural richness of iconic cities such as Paris, Rome or Tokyo, discovering their history, art and gastronomy in the company of passionate local guides.</h5>
         <h5>Sojournplanet is not satisfied with just offering an ordinary trip. Our mission is to bring you extraordinary experiences that connect with your emotions and allow you to create memories that will last forever. Whether it's witnessing an aurora borealis in the solitude of a frozen lake, enjoying a private dinner on a paradisiacal beach or experiencing the living traditions of ancient cultures, we are committed to taking your trip to the next level.</h5>
      
        </div>
        <div class="col-md-6 mt-3 p-3 texto">
            <h5>As part of the methodology to provide you with the best possible trips, exclusively designed and adapted to your tastes and interests, we have divided the type of trip possible into four different typologies; leisure, cultural, gourmet and adventure. Each of these typologies aims to explore the personalized concept of the trip of your dreams, based on what satisfies you the most.</h5>
            <h5>A mostly leisure trip is focused on experiences of a recreational nature, be they shows, performances, theaters or city life. This may include tickets to see a Champions League match or simply enjoying time with the little ones at Santa Claus Village in Finland.</h5>
            <h5>A mostly cultural trip focuses on the historical and cultural tour of your favorite destination, with an emphasis on its heritage. Tour the World Heritage Sites of Spain, Portugal, Greece or Italy and be dazzled by their architectural wonders, for example.</h5>
            <h5>A mostly gourmet trip will seek to explore the gastronomies and taste for local delicacies, whether it's appreciating the vineyards of French Champagne or learning about the breeding of the famous Kobe beef.</h5>
            <h5>A mostly adventure trip will include all those attractions where adrenaline is the protagonist, enjoying experiences mainly outdoors and in contact with nature, such as a paragliding trip over a beautiful valley.</h5>
            <h5>
                Of course, any classification will always be subject to your rhythms, tastes and interests, whose limit is imposed by you. Whether alone, with friends, with the love of your life or as a family with the little ones, the trip of your dreams will undoubtedly be one of the most satisfying experiences of your life.</h5>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6 mx-auto d-flex justify-content-center align-items-center flex-column p-3">
            <h5 class="patua texto">Let us take you on the journey of your dreams, a tailor-made trip that will awaken your senses, enrich your soul and transform you forever. Trust Sojournplanet to be your guide on this unique adventure, and discover what it means to truly travel.</h5>
            <a href="{{ route('contactgeneral') }}" class="btn btn-outline-dark mt-5 patua p-2 mb-5 ">What’s the trip of your dreams?</a>

        </div>
    </div>
</div>
@endsection
