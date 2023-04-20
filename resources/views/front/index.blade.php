@extends('front.layouts.base')
@section('title')
    Home
@endsection
@section('css')
@endsection
@section('content')
    <div class="Slider" style="height: 300px">
  





                <div class="Slider-slide show d-flex flex-column justify-content-center align-items-center"
                    style="
    background-image: url('https://travel.sojournplanet.com/tailor-made-trips/img/middle-east-and-maghreb-egypt.jpg');
  ">
                    <h1 class="text-white text-center ">
                      The world is yours
                    </h1>
                    <h5 class="text-white text-center ">
                      We are specialists in tailor-made trips around the world.
                    </h5>
                    
                  
                </div>
                <div class="Slider-slide d-flex flex-column justify-content-center align-items-center"
                    style="
    background-image: url('https://travel.sojournplanet.com/tailor-made-trips/img/middle-east-and-maghreb-burj.jpg');
  ">
                    <h1 class=" text-white text-center ">
                      PREMIUM experience.
                    </h1>
                    <h5 class="text-white text-center ">
                      Our specialists guarantee all services with a PREMIUM and quality standard.
                    </h5>

                </div>
                <div class="Slider-slide d-flex flex-column justify-content-center align-items-center"
                    style="
    background-image: url('https://travel.sojournplanet.com/tailor-made-trips/img/middle-east-and-maghreb-petra.jpg');
  ">
                    <h1 class=" text-white text-center ">
                      We create unique trips.
                    </h1>
                    <h4 class="text-white text-center ">
                      We create unique itineraries for demanding clients who want advice and guidance in planning their vacations.
                    </h4>
                </div>
                <div class="Slider-slide d-flex flex-column justify-content-center align-items-center"
                    style="
    background-image: url('https://travel.sojournplanet.com/tailor-made-trips/img/middle-east-and-maghreb-mosque.jpg');
  ">
                    <h1 class="text-white text-center ">
                      Local knowledge.
                    </h1>
                    <h4 class="text-white text-center ">
                      We create unique itineraries for demanding clients who want advice and guidance in planning their vacations
                    </h4>
                </div>
        
    </div>
  
    <div class="container mt-3">
        @if (Session::has('success'))
        <div class="alert alert-warning" role="alert">
            {{ Session::get('success') }}
          </div>
                
          
      
        @endif
      <div class="row">
        <div class="col-md-4 mx-auto d-flex justify-content-center ">
          <a href="{{ route('contactgeneral') }}" class="btn btn-outline-dark mt-3 patua p-2 ">Start to plan my trip</a>
        </div>
      </div>
    </div>





    <div class="container mt-3">
        <div class="row">

            <div class="col-md-4 d-flex flex-column align-items-center p-2">

                <h3 class="text-center text-success patua">Lasts Travel Blog</h3>
                <div class="mx-auto owl-carousel owl-theme ms-2">
                    @foreach ($blogs as $blog)
                        <a href="{{ route('blog', $blog) }}" class="nav-link  ">
                            <div class="d-flex justify-content-center align-items-center p-2 "
                                style="background-image: url({{ Storage::url($blog->image) }});background-size:cover; height:200px;">
                                <h5 class="fs-5 open fw-bold text-white">{{ $blog->name }}</h5>

                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 d-flex flex-column align-items-center p-2">
                <h3 class="text-center text-success patua">Lasts Travel Sight</h3>
                <div class="mx-auto owl-carousel owl-theme ms-2">
                    @foreach ($sights as $sight)
                        <a href="{{ route('sight', $sight) }}" class="nav-link  ">
                            <div class="d-flex justify-content-center align-items-center p-2 "
                                style="background-image: url({{ Storage::url($sight->image) }});background-size:cover; height:200px;">
                                <h5 class="fs-5 open fw-bold text-white">{{ $sight->title }}</h5>

                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 d-flex flex-column align-items-center p-2">
                <h3 class="text-center text-success patua">Lasts Travel Tour</h3>
                <div class="mx-auto owl-carousel owl-theme ms-2">
                    @foreach ($tours as $tour)
                        <a href="{{ route('tour', $tour) }}" class="nav-link  ">
                            <div class="d-flex justify-content-center align-items-center p-2 "
                                style="background-image: url({{ Storage::url($tour->image) }});background-size:cover; height:200px;">
                                <h5 class="fs-5 open fw-bold text-white">{{ $tour->name }}</h5>

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
                <h1 class="open mt-3">Welcome</h1>
                <p class="open fs-5 mt-3">We believe that trips should be as individual as you, where every detail counts
                    for a unique experience. This is the essence of our business.</p>
                <a href="{{ route('taylor') }}" class="btn btn-outline-dark mt-3 patua">Tailor-made trips</a>

            </div>
            <div class="col-md-4  d-flex flex-column justify-content-start align-items-center p-3">
                <img src="{{ asset('img/dream.png') }}" class="img-fluid" width="150" alt="">
                <a href="{{ route('dream') }}" class="btn btn-outline-dark mt-3 patua">The trip of your dream</a>

            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row mt-5">
            <h1 class="text-center mt-5">Our destinations</h1>
            @foreach ($destinations as $destination)
                <div class="col-md-3 d-flex justify-content-center align-items-center"
                    style="background-image: url({{ Storage::url($destination->image) }});background-size:cover;height:200px;">
                    <a href="{{ route('destination', $destination) }}"
                        class="btn btn-outline-dark">{{ $destination->name }}</a>
                </div>
            @endforeach


        </div>

    </div>
    <div class="container mt-5 mb-5">
        <div class="row">

            <div class="col-md-6 mx-auto">
                <h1 class="text-center">Subscribe</h1>
                <p class="text-center">Sign up to hear from us about specials, news and promotions.</p>
                <form action="{{route('contactos.list.store')}}" method="post">
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
                        <button type="submit" class="btn btn-outline-dark">Sign up</button>
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
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },


            }
        })
    </script>
@endsection
