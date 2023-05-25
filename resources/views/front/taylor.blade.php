@extends('front.layouts.base')
@section('title')
Tailor-made trips
@endsection
@section('content')
    <div class="container-fluid d-flex justify-content-center align-items-center" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(https://cdn.pixabay.com/photo/2018/10/01/11/45/landscape-3715977_1280.jpg);background-size:cover;height:300px;background-position:center;">
      <h1 class="text-white patua">Our tailor-made trips</h1>
    </div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-8 mx-auto ">
                <h3 class=" patua">We offer tailor-made trips around the world, with a PREMIUM quality standard for a
                    complete experience, adapted to your tastes, desires, and needs. We provide you with all aspects of the trip booked in advance to ensure a stress-free vacation.</h3>
            </div>
        </div>
   

    </div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-8 open texto">
                <p>We start the process with our questionnaire, where through a few simple questions you can define us what your idea of ​​travel is. In this survey we will try to define the essential features of your desired trip; the duration of the trip and at what time of year or date, the type of companions (partner, family, friends), if children are traveling or perhaps it is a romantic trip, if there is someone with reduced mobility among the passengers and, most importantly, the essence of your trip.</p>
                <p>We have defined up to four different types of trips, based on the nature of the tourist attractions to visit; cultural, leisure, gourmet and adventure. In any case, all the proposals include a base of different types of attractions, so that your trip does not become monotonous and boring, and it will always vary to your liking in the following contacts with one of our experts, who will Once your request has been received and with a first outline of your trip, you will get in touch with an initial proposal on which to refine the details, and thus refine it until you find the trip of your dreams.</p>
            </div>
              <div class="col-md-4 patua d-flex justify-content-star align-items-center flex-column px-5">
                <p>The same trip to the same destination can have an infinite number of different approaches with a wide range of possibilities.</p>
                <p>If you are interested in hiring our services, we can start.</p>
               <a href="{{ route('contactgeneral') }}" class="btn btn-outline-dark border border-dark mt-3 patua px-3 py-2 rounded-pill">Start to plan my
                trip</a>
              </div>
        </div>
    </div>
    <div class="container-fluid d-flex justify-content-center align-items-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url(https://cdn.pixabay.com/photo/2021/08/02/16/22/beach-6517214_1280.jpg);background-size:cover;height:300px;background-position:center;">
        <h1 class="text-white patua">Do you want to know more?</h1>
      </div>
      <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-8 open texto">
                <p>Imagine a trip in which you would like to know, for example, the essence of Japanese culture, staying in traditional hotels and soaking up the history of Japan, but with interspersed arrangements in which to enjoy leisure, perhaps going skiing or simply walking and enjoying the city ... </p>
                <p>Or maybe you would like to go on a gastronomic route visiting the best sake cellars, learn the secrets of Kobe Beef production and taste everything from the most traditional delicacies to the most contemporary proposals of restoration in a romantic trip with your partner…</p>
            </div>
              <div class="col-md-4 patua d-flex justify-content-star align-items-center flex-column px-5">
                <p>It does not matter if the trip is for a week or even more than a month, since our best service is to offer the client a vacation where they do not have to worry about anything, knowing at all times what they are going to see or do, and supported with all the graphic material necessary to obtain the best possible experience.</p>
               
                  <a href="{{ route('contactgeneral') }}" class="btn btn-outline-dark border border-dark mt-3 patua px-3 py-2 rounded-pill">Start to plan my
                trip</a>
              </div>
        </div>
    </div>
    <div class="container-fluid d-flex justify-content-center align-items-center" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(https://cdn.pixabay.com/photo/2019/07/30/08/44/mosque-4372296_1280.jpg);background-size:cover;height:300px;background-position:center;">
        <h1 class="text-white patua">Our goal is to offer you the perfect trip for you.</h1>
      </div>
      <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-8 mx-auto open texto">
              <p>Our process involves the use of a clear, practical and direct questionnaire, which allows us to know in detail your interests and preferences.</p>
              <p>Once completed and shipped back to us, we have a two-week commitment to meticulously review and carefully craft a unique travel itinerary and provide you with the following items:</p>
              <ul class="list-group mb-5 patua">
                <li class="list-group-item">Detailed itinerary day by day, hour by hour.</li>
                <li class="list-group-item">Addresses of the attractions to visit.</li>
                <li class="list-group-item">Admission costs and links for booking tickets.</li>
                <li class="list-group-item">Opening and closing hours.</li>
                <li class="list-group-item">General information about the specific attraction to be visited, as well as the general location.</li>
                <li class="list-group-item">Transportation and location tips.</li>
                <li class="list-group-item">Suggestions for lunches and dinners.</li>
                <li class="list-group-item">Map and directions for each day of the itinerary.</li>
              </ul>
               <a href="{{ route('contactgeneral') }}" class="btn btn-outline-dark border border-dark mt-3 patua px-3 py-2 rounded-pill">Start to plan my
                trip</a>
            </div>
        </div>
      </div>
@endsection