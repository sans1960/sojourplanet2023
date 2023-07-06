@extends('front.layouts.base')
@section('title')
What’s the trip of your dreams?
@endsection
@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{asset('img/safari-jeep.jpg')}});background-size:cover;height:300px;background-position:center;">
    <h1 class="text-white">Discovering the world with us</h1>
  </div>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8 mx-auto  ">
             <h3 class="patua text-center">
                Let us take you on the journey of your dreams, a tailor-made trip that will awaken your senses, enrich your soul and transform you forever.
             </h3>
      
        </div>
       
    </div>
    <div class="row mt-5">
        <div class="col-md-8 open texto">
            <p class="fw-bold">Trust Sojournplanet to be your guide on this unique adventure, and discover what it means to truly travel.</p>
            <p>Imagine a trip designed exclusively for you, where every detail reflects your desires, passions and interests. A trip that not only transports you to faraway places, but also immerses you in unique and unforgettable experiences. At Sojournplanet, we are dedicated to making your dream trip a reality, offering a tailor-made travel planning service that allows you to explore the world at your own pace and in your own way.</p>
            <p>Our personalized approach is based on listening carefully to your ideas and expectations, to design an itinerary that combines spectacular destinations with magical moments. Our team of experts is in charge of selecting the best hotels, restaurants and activities, guaranteeing a premium trip that satisfies all your desires and surprises you every step of the way.</p>
            <p>Your dream trip may take you to explore the natural wonders of the world, such as the surreal landscapes of Iceland, the Amazon rainforest or the majesty of the Grand Canyon. Or perhaps you prefer to immerse yourself in the cultural richness of iconic cities such as Paris, Rome or Tokyo, discovering their history, art and gastronomy in the company of passionate local guides.</p>
        </div>
        <div class="col-md-4 patua d-flex justify-content-start align-items-start flex-column px-5">
            <p>Sojournplanet is not satisfied with just offering an ordinary trip. Our mission is to bring you extraordinary experiences that connect with your emotions and allow you to create memories that will last forever.</p>
            <p>Whether it's witnessing an aurora borealis in the solitude of a frozen lake, enjoying a private dinner on a paradisiacal beach or experiencing the living traditions of ancient cultures, we are committed to taking your trip to the next level.</p>
              <div class="d-flex justify-content-end align-items-end ms-auto">
                <a href="{{ route('contactgeneral') }}" class="btn btn-outline-dark border border-dark mt-3 patua px-3 py-2 rounded-pill">Start to plan my
            trip</a>
            </div>
          
            </div>

    </div>
   
</div>
<div class="container-fluid d-flex justify-content-center align-items-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url(https://cdn.pixabay.com/photo/2016/11/13/21/45/airport-1822133_1280.jpg);background-size:cover;height:300px;background-position:center;">
    <h1 class="text-white patua">Adapting the trip to you</h1>
  </div>
  <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8 open ">
            <p class="texto">As part of the methodology to provide you with the best possible trips, exclusively designed and adapted to your tastes and interests, we have divided the type of trip possible into five different typologies; patrimonial, leisure, gourmet, adventure and wellness. Each of these typologies aims to explore the personalized concept of the trip of your dreams, based on what satisfies you the most. Of course, any classification will always be subject to your rhythms, tastes and interests, whose limit is imposed by you. </p>
            <div class="d-flex justify-content-start align-items-center mt-3">
             
               <p class="ms-4 texto"><strong>A mostly patrimonial trip</strong>  focuses on the historical and cultural tour of your favorite destination, with an emphasis on its heritage. Tour the World Heritage Sites of Spain, Portugal, Greece or Italy and be dazzled by their architectural wonders, for example.</p>
            </div>
            <div class="d-flex justify-content-start align-items-center mt-3">
               
                <p class="ms-4 texto"><strong>A mostly leisure trip</strong> is focused on experiences of a recreational nature, be they shows, performances, theaters or city life. This may include tickets to see a Champions League match, be surprised by the fascinating Carnival of Oruro in Bolivia or simply enjoying time with the little ones at Santa Claus Village in Finland. </p>
             </div>
             <div class="d-flex justify-content-start align-items-center mt-3">
              
                <p class="ms-4 texto"><strong>A mostly gourmet trip</strong> will seek to explore the gastronomies and taste for local delicacies, whether it's discovering the vineyards of French Champagne, appreciating in the Kaffa Mountains the nuances of Ethiopian coffee or learning about the breeding of the famous Kobe beef. </p>
             </div>
             <div class="d-flex justify-content-start align-items-center mt-3">
             
                <p class="ms-4 texto"><strong>A mostly adventure trip</strong> will include all those attractions where adrenaline is the protagonist, enjoying experiences mainly outdoors and in contact with nature, such as practicing your favorite sport, hiking at your own pace or a paragliding trip over a beautiful valley.
                </p>
             </div>
             <div class="d-flex justify-content-start align-items-center mt-3">
            
                <p class="ms-4 texto"><strong>A mostly wellness trip</strong>  trip will prioritize those experiences focused on your physical, mental and spiritual well-being that help you disconnect from any type of stress. Imagine pampering your body in one of the traditional Japanese onsen, relaxing in one of the villas in the Maldives, or doing a spiritual retreat at the Ermita del Silencio in Puebla.
                </p>
             </div>
             <div class="d-flex justify-content-start align-items-center mt-3">
             
              <p class="ms-4 texto"><strong>A mostly traditions trip</strong>  will be a journey focused on experiences based on the customs and traditions of our favorite destination. From ancestral rituals, local customs or typical cultural manifestations, we will enjoy the immense richness and diversity of the different human groups that populate the planet.

              </p>
           </div>
        
        </div>
          <div class="col-md-4 patua d-flex justify-content-start align-items-start flex-column px-5">
            <p>Whether alone, with friends, with the love of your life or as a family with the little ones, the trip of your dreams will undoubtedly be one of the most satisfying experiences of your life..</p>
            <p>What’s the trip of your dreams?</p>
           
                   <div class="d-flex justify-content-end align-items-end ms-auto">
                <a href="{{ route('contactgeneral') }}" class="btn btn-outline-dark border border-dark mt-3 patua px-3 py-2 rounded-pill">Start to plan my
            trip</a>
            </div>
          </div>
          
    </div>
</div>
@endsection
