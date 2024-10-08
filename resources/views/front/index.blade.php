@extends('front.layouts.base')
@section('title')
Luxury Travel and Tailor-Made Vacations | Sojournplanet
@endsection
@section('css')
@endsection
@section('meta_title2')
Tailor-Made Luxury Travel | Bespoke Journeys with Sojournplanet
@endsection
@section('meta_description2')
Discover luxury tailor-made trips worldwide with Sojournplanet. Experience personalized travel planning and premium services for unforgettable journeys. Start designing your bespoke vacation today.

@endsection
@section('content')

<div class=" owl-carousel owl-theme text-center">
    <div class="d-flex flex-column justify-content-center align-items-center p-2"
        style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url({{asset('img/templo01.jpg')}});height: 500px;background-position:center;">
        <h2 class="patua text-white display-2">The world is yours.</h2>
        <h3 class="open text-white p-3">We are specialists in tailor-made trips around the world.</h3>
        <h4 class="patua text-white">What's the trip of your dreams?</h4>
        <a href="{{route('contactos.general.create')}}"
            class="btn btn-outline-dark border border-white mt-3 patua px-3 py-2 text-white rounded-pill">Start to plan
            my
            trip</a>
    </div>
    <div class="d-flex flex-column justify-content-center align-items-center p-2"
        style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url({{asset('img/flamencos.jpg')}});height: 500px;background-position:center;">
        <h2 class="patua text-white display-2">We create unique trips.</h2>
        <h3 class="open text-white p-3">We design travel experiences that provide you with special moments that generate
            fond memories for life.</h3>
            <h4 class="patua text-white">What's the trip of your dreams?</h4>
        <a href="{{route('contactos.general.create')}}"
            class="btn btn-outline-dark border border-white mt-3 patua px-3 py-2 text-white rounded-pill">Start to plan
            my
            trip</a>
    </div>
    <div class="d-flex flex-column justify-content-center align-items-center p-2"
        style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url({{asset('img/moai01.jpg')}});height: 500px;background-position:center;">
        <h2 class="patua text-white display-2">Local knowledge.</h2>
        <h3 class="open text-white p-3">Our experts will create unique, authentic and engaging itineraries specifically
            for you. In any destination in the world.</h3>
        <h4 class="patua text-white">What's the trip of your dreams?</h4>
        <a href="{{route('contactos.general.create')}}"
            class="btn btn-outline-dark border border-white mt-3 patua px-3 py-2 text-white rounded-pill">Start to plan
            my
            trip</a>
    </div>
    <div class="d-flex flex-column justify-content-center align-items-center p-2"
        style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url({{asset('img/paris01.jpg')}});height: 500px;background-position:center;">
        <h2 class="patua text-white display-2">Planning is our business.</h2>
        <h3 class="open text-white p-3">We create unique itineraries for demanding clients who want advice and guidance
            in planning their vacations.</h3>
        <h4 class="patua text-white">What's the trip of your dreams?</h4>
        <a href="{{route('contactos.general.create')}}"
            class="btn btn-outline-dark border border-white mt-3 patua px-3 py-2 text-white rounded-pill">Start to plan
            my
            trip</a>
    </div>
    <div class="d-flex flex-column justify-content-center align-items-center p-2"
        style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url({{asset('img/salar-uyuni.jpg')}});height: 500px;background-position:center;">
        <h2 class="patua text-white display-2">PREMIUM experience.</h2>
        <h3 class="open text-white p-3">Our specialists guarantee all services with a PREMIUM and quality standard.</h3>
        <h4 class="patua text-white">What's the trip of your dreams?</h4>
        <a href="{{route('contactos.general.create')}}"
            class="btn btn-outline-dark border border-white mt-3 patua px-3 py-2 text-white rounded-pill">Start to plan
            my
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

        <h2 class="patua fs-4 mb-3">Inspiring sights around the world</h2>
        @foreach ($sights as $sight)
        <div class="col-md-4 mb-2">
            <a href="{{ route('sight', $sight) }}" class="nav-link  ">
                <div class="d-flex flex-column justify-content-between align-items-center p-2 "
                    style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($sight->image) }});background-size:cover; height:250px;">
                    <p class="text-white open">{{$sight->country->name}}</p>
                    <h3 class="fs-4 patua text-center text-white">{{ $sight->title }}</h3>

                </div>
            </a>
        </div>
        @endforeach
        <div class="d-flex justify-content-center">
            <a href="{{route('sights')}}"
                class="btn btn-outline-dark border border-dark mt-3 patua px-3 py-2  rounded-pill">View more</a>
        </div>



    </div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 text-center p-3">
            <h1 class="patua text-center mt-3 fs-4">Welcome to Sojournplanet</h1>
            <p class="open fs-5 mt-3">We believe that trips should be as individual as you, where every detail counts
                for a unique experience. This is the essence of our business.</p>
             <a href="{{route('contactos.create')}}"
                class="btn btn-outline-dark border border-dark mt-3 patua px-3 py-2  rounded-pill">Contact us</a>


        </div>
        <div class="col-md-4">
            <div class="mx-auto">

                <a href="{{route('dream')}}" class="nav-link">
                    <div class="d-flex justify-content-center align-items-center p-2"
                        style="background-size:cover; height:250px;background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url({{asset('img/beach.jpg')}})">
                        <h2 class="patua text-white text-center fs-4">What's the trip of your dreams?</h2>
                    </div>
                </a>



            </div>

        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-5">
        <h2 class="patua fs-4 mb-3">Inspiring destinations</h2>

           @foreach ($destinations as $destination)
        @if ($destination->name != 'Antarctica')
        <div class="col-md-4 mb-3">
            <a href="{{ route('destination', $destination) }}" class="nav-link">
                <div class=" d-flex flex-column justify-content-end align-items-center w-full p-2"
                    style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ Storage::url($destination->image) }});background-size:cover;height:250px;">
                    {{-- <p class="open text-white">Destinations</p> --}}
                    <h3 class="patua text-white text-center">{{ $destination->name }}</h3>

                </div>
            </a>
        </div>
        @endif
        @endforeach


    </div>

</div>
<div class="container mt-2 mb-5">
    <div class="row">
                 <div class="col-md-4">
            <div class="mx-auto ">
                @foreach ($antartida as $item)
                <a href="{{url('countries/antarctica')}}" class="nav-link">
                    <div class="d-flex justify-content-center align-items-end"
                        style="background-size:cover; height:250px;background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url({{Storage::url($destination->image)}})">
                        <h3 class="patua text-white text-center">{{$item->name}}</h3>
                    </div>
                </a>
                @endforeach




            </div>

        </div>
        <div class="col-md-8 mx-auto mt-2">
            <h2 class="text-center patua fs-4">Subscribe</h2>
            <p class="text-center open">Sign up to hear from us about specials, news and promotions.</p>
            <form action="{{ route('contactos.list.store') }}" method="post">
                <x-honeypot />
                @csrf
                <div class=" mb-3">
                    <input type="email" class="form-control w-75 mx-auto" name="email" id="floatingInput"
                        placeholder="Email address" required>

                </div>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                      <div class="mb-3 mt-3 d-flex justify-content-center flex-column align-items-center">
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                            @error ('g-recaptcha-response')
                            <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                <div class="d-flex justify-content-center">
                    <button type="submit"
                        class="btn btn-outline-dark border border-dark mt-3 patua px-3 py-2 rounded-pill">Sign
                        up</button>
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