<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="@yield('meta_title')" />
    <meta property="og:description" content="@yield('meta_description')" />
    <meta property="og:url" content="@yield('meta_url')" />
    <meta property="og:image" content="@yield('meta_image')" />
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('img/index.ico') }}" type="image/ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/tipo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front.css') }}">
    {{--
    <link rel="stylesheet" href="{{ asset('css/leaflet.css')}}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    {{-- <script src="{{ asset('js/leaflet.js') }}"></script> --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">

    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <script src="https://kit.fontawesome.com/c6438ec7a6.js" crossorigin="anonymous"></script>
    @yield('css')
</head>

<body class="">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark patua">
        <div class="container-fluid">
            <a class="navbar-brand d-md-none" href="/">
                <img src="{{ asset('img/ll.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav align-items-center mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('taylor') }}">Tailor-made trips</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dream') }}">The trip of your dreams</a>
                    </li>

                    <a class="navbar-brand d-none d-md-block" href="/">
                        <img src="{{ asset('img/ll.png') }}" alt="">
                    </a>
                    @include('front.layouts.destinations', [
                    'destinations' => ($destinations = App\Models\Destination::all())
                    ])

                    <li class="nav-item ms-5">
                        <a class="nav-link" href="{{ route('sights') }}"> Sights</a>
                    </li>

                    <li class="nav-item ms-5">
                        <a class="nav-link" href="{{ route('alltours') }}">Tours</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('blogs') }}">Travel Blog</a>
                    </li> --}}


                </ul>
            </div>
        </div>
    </nav>



    @yield('content')
    <footer class="bg-dark">
        <div class="container mt-2 p-3">
            <div class="row mt-2">
                <div class="col-md-3 d-flex justify-content-center align-items-center">
                    <img src="{{asset('img/logo-sojournplanet-h.png')}}" alt="" class="img-fluid w-75">
                </div>
                <div class="col-md-3 d-flex flex-column justify-content-center align-items-center">
                    <a href="{{route('contactos.general.create')}}" target="_blank"
                        class="text-white nav-link open">Start planning</a>
                    <a href="{{url('countries')}}" class="text-white nav-link open">Destinations A to Z</a>
                    <a href="{{ route('dream') }}" class="text-white nav-link open">The trip of your dreams</a>
                    <a href="{{route('faqs')}}" class="text-white nav-link open">FAQs</a>
                </div>
                <div class=" col-md-3 d-flex flex-column justify-content-center align-items-center">
                    <a href="{{route('booking')}}" class="nav-link text-white open" target="_blank">Booking
                        Conditions</a>
                    <a href="{{route('services')}}" class="nav-link text-white open">Our
                        Services</a>
                    <a href="{{route('travelstate')}}" class="nav-link text-white open">Travel Security</a>
                    <a class="nav-link text-white open" href="{{ route('about') }}">About us</a>
                </div>
                <div class="col-md-3 d-flex flex-column justify-content-center align-items-center">
                    <a href="{{route('terms')}}" class="text-white nav-link open">Terms and Conditions</a>
                    <a href="{{route('private')}}" class="nav-link text-white open">Privacy
                        Policy</a>
                    <a href="{{route('cookie')}}" class="nav-link text-white open">Cookie
                        Policy</a>
                    <a href="https://sojournplanet.com/sitemap.xml" target="_blank"
                        class="nav-link text-white open">Sitemap</a>
                </div>

            </div>
            <div class="row mt-2 ">
                <div class="col-md-12 d-flex justify-content-center align-items-center">
                    <a target="_blank" href="https://www.facebook.com/sojournplanet" class="text-white">
                        <i class="bi bi-facebook" style="font-size: 1.2em;"></i>

                    </a>
                </div>

            </div>
            <div class="row mt-2 ">
                <div class="col-md-12 d-flex justify-content-center align-items-center">
                    <a class="text-white nav-link">Copyright © 2024 Sojournplanet LLC-All rights reserved</a>
                </div>

            </div>



        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/slider.js') }}"></script>
    <script src="{{ asset('js/share.js') }}"></script>
    @yield('js')
</body>

</html>