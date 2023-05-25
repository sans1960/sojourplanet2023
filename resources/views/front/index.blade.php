@extends('front.layouts.base')
@section('title')
    Home
@endsection
@section('css')
@endsection
@section('content')

            <div class=" owl-carousel owl-theme text-center">
                <div class="d-flex flex-column justify-content-center align-items-center p-2" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url(https://travel.sojournplanet.com/tailor-made-trips/img/middle-east-and-maghreb-burj.jpg);height: 500px;background-position:center;">
                       <h1 class="patua text-white">The world is yours</h1>
                       <h3 class="patua text-white">We are specialists in tailor-made trips around the world.</h3>
                       <a href="{{ route('contactgeneral') }}" class="btn btn-outline-dark border border-white mt-3 patua p-3 text-white rounded-pill">Start to plan my
                           trip</a>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center p-2" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url(https://travel.sojournplanet.com/tailor-made-trips/img/middle-east-and-maghreb-petra.jpg);height: 500px;background-position:center;">
                            <h1 class="patua text-white">We create unique trips.</h1>
                            <h3 class="patua text-white">We design travel experiences that provide you with special moments that generate fond memories for life.</h3>
                            <a href="{{ route('contactgeneral') }}" class="btn btn-outline-dark border border-white mt-3 patua p-3 text-white rounded-pill">Start to plan my
                                trip</a>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center p-2" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url(https://travel.sojournplanet.com/tailor-made-trips/img/middle-east-and-maghreb-mosque.jpg);height: 500px;background-position:center;">
                        <h1 class="patua text-white">Local knowledge.</h1>
                        <h3 class="patua text-white">Our experts will create unique, authentic and engaging itineraries specifically for you. In any destination in the world.</h3>
                        <a href="{{ route('contactgeneral') }}" class="btn btn-outline-dark border border-white mt-3 patua p-3 text-white rounded-pill">Start to plan my
                            trip</a>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center p-2" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url(https://travel.sojournplanet.com/tailor-made-trips/img/middle-east-and-maghreb-egypt.jpg);height: 500px;background-position:center;">
                            <h1 class="patua text-white">Planning is our business.</h1>
                            <h3 class="patua text-white">We create unique itineraries for demanding clients who want advice and guidance in planning their vacations.</h3>
                            <a href="{{ route('contactgeneral') }}" class="btn btn-outline-dark border border-white mt-3 patua p-3 text-white rounded-pill">Start to plan my
                                trip</a>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center p-2" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url(https://travel.sojournplanet.com/travelblog/public/storage/photos/SLlHMeaZMvTq1JpFNPELB5AgtzDxrA0llvnBfhh2.jpg);height: 500px;background-position:center;">
                         <h1 class="patua text-white">PREMIUM experience.</h1>
                         <h3 class="patua text-white">Our specialists guarantee all services with a PREMIUM and quality standard.</h3>
                         <a href="{{ route('contactgeneral') }}" class="btn btn-outline-dark border border-white mt-3 patua p-3 text-white rounded-pill">Start to plan my
                             trip</a>
                </div>
            </div>







    <div class="container mt-3">
        @if (Session::has('success'))
            <div class="alert alert-warning" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
     
    </div>





    <div class="container mt-3">
        <div class="row">

            <div class="col-md-4 d-flex flex-column align-items-center">

               
                <div class="mx-auto owl-carousel owl-theme">
                    @foreach ($blogs as $blog)
                        <a href="{{ route('blog', $blog) }}" class="nav-link  ">
                            <div class="d-flex flex-column justify-content-between align-items-center p-2 "
                                style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($blog->image) }});background-size:cover; height:250px;">
                                <p class="text-white open">Travel Blog</p>
                                <h5 class="fs-5 open fw-bold text-center text-white">{{ $blog->name }}</h5>

                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 d-flex flex-column align-items-center">
               
                <div class="mx-auto owl-carousel owl-theme">
                    @foreach ($sights as $sight)
                        <a href="{{ route('sight', $sight) }}" class="nav-link  ">
                            <div class="d-flex flex-column justify-content-between align-items-center p-2 "
                                style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($sight->image) }});background-size:cover; height:250px;">
                                <p class="text-white open">Sights</p>
                                <h5 class="fs-5 open fw-bold text-center text-white">{{ $sight->title }}</h5>

                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 d-flex flex-column align-items-center">
                
                <div class="mx-auto owl-carousel owl-theme">
                    @foreach ($tours as $tour)
                        <a href="{{ route('tour', $tour) }}" class="nav-link  ">
                            <div class="d-flex justify-content-between flex-column align-items-center p-2 "
                                style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url({{ Storage::url($tour->image) }});background-size:cover; height:250px;">
                                <p class="text-white open">Tours</p>
                                <h5 class="fs-5 open fw-bold text-center text-white">{{ $tour->name }}</h5>

                            </div>
                        </a>
                    @endforeach
                </div>






            </div>


        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 text-center p-3">
                <h1 class="patua mt-3">Welcome to Sojournplanet</h1>
                <p class="open fs-5 mt-3">We believe that trips should be as individual as you, where every detail counts
                    for a unique experience. This is the essence of our business.</p>
                <a href="{{ route('taylor') }}" class="btn btn-outline-dark border border-dark mt-3 patua p-3  rounded-pill">Tailor-made trips</a>

            </div>
            <div class="col-md-4">
                <div class="mx-auto">
           
                        <a href="{{route('dream')}}" class="nav-link">
                            <div class="d-flex justify-content-center align-items-center p-2" style="background-size:cover; height:250px;background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url({{asset('img/beach.jpg')}})">
                             <h4 class="patua text-white text-center">What's the trip of your dreams?</h4>
                            </div>
                        </a>
           

                    
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
          
            @foreach ($destinations as $destination)
             <div class="col-md-4 mb-3"> 
            <a href="{{ route('destination', $destination) }}" class="nav-link">
                <div class=" d-flex flex-column justify-content-between align-items-center w-full" 
                    style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($destination->sight->last()->image) }});background-size:cover;height:250px;">
                    <p class="open text-white">Destinations</p>
                    <h3 class="patua text-white text-center">{{ $destination->name }}</h3>
                  
                </div>
             </a> 
         </div> 
            @endforeach


        </div>

    </div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="mx-auto ">
       
                        <a href="{{route('about')}}" class="nav-link">
                            <div class="d-flex justify-content-center align-items-center" style="background-size:cover; height:250px;background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url({{asset('img/paris.jpg')}})">
                                <h3 class="patua text-white text-center">About us</h3>
                            </div>
                    </a>

                    
                </div>

            </div>
            <div class="col-md-8 mx-auto mt-2">
                <h1 class="text-center patua">Subscribe</h1>
                <p class="text-center open">Sign up to hear from us about specials, news and promotions.</p>
                <form action="{{ route('contactos.list.store') }}" method="post">
                    <x-honeypot />
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="floatingInput"
                            placeholder="name@example.com" required>
                        <label for="floatingInput">Email address</label>
                    </div>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="d-flex justify-content-center">
                        <button type="submit"  class="btn btn-outline-dark border border-dark mt-3 patua px-4 py-3 rounded-pill">Sign up</button>
                    </div>
                </form>



            </div>

        </div>
    </div>
@endsection
@section('js')
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            autoplay:true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },


            }
        });
   

    </script>
@endsection
