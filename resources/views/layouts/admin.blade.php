<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('img/index.ico')}}" type="image/ico" />
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/tipo.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/leaflet.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/huebee@2/dist/huebee.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="{{ asset('js/leaflet.js') }}"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    Panel Admin
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Geography
                            </a>
                            <ul class="dropdown-menu ">
                              <li><a class="nav-link text-dark" href="{{ route('admin.destinations.index')}}">
                                {{ __('Destinations') }}
                               </a></li>
                               <li><a class="nav-link text-dark" href="{{ route('admin.imagedestinations.index')}}">
                                {{ __('Image Destinations') }}
                               </a></li>
                               <li><a class="nav-link text-dark" href="{{ route('admin.subregions.index')}}">
                                {{ __('Subregions') }}
                               </a></li>
                               <li><a class="nav-link text-dark" href="{{ route('admin.countries.index')}}">
                                {{ __('Countries') }}
                               </a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              TravelBlog
                            </a>
                            <ul class="dropdown-menu ">
                                <li><a class="nav-link text-dark" href="{{ route('admin.categoryblogs.index')}}">
                                    {{ __('Categories Blog') }}
                                   </a></li>
                                   <li><a class="nav-link text-dark" href="{{ route('admin.blogs.index')}}">
                                    {{ __(' Blogs') }}
                                   </a></li>
                                   <li><a class="nav-link text-dark" href="{{ route('admin.posts.index')}}">
                                    {{ __(' Posts') }}
                                   </a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              TravelSights
                            </a>
                            <ul class="dropdown-menu ">
                                <li><a class="nav-link text-dark" href="{{ route('admin.categorysights.index')}}">
                                    {{ __('Categories Sight') }}
                                   </a></li>
                                <li><a class="nav-link text-dark" href="{{ route('admin.tags.index')}}">
                                    {{ __('Tags') }}
                                   </a></li>
                                   <li><a class="nav-link text-dark" href="{{ route('admin.sights.index')}}">
                                    {{ __('Sights') }}
                                   </a></li>


                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              TravelTours
                            </a>
                            <ul class="dropdown-menu ">
                                <li><a class="nav-link text-dark" href="{{ route('admin.types.index')}}">
                                    {{ __('Types') }}
                                   </a></li>
                                <li><a class="nav-link text-dark" href="{{ route('admin.tours.index')}}">
                                    {{ __('Tours') }}
                                   </a></li>
                                   <li><a class="nav-link text-dark" href="{{ route('admin.days.index')}}">
                                    {{ __('Days') }}
                                   </a></li>


                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Contacts
                            </a>
                            <ul class="dropdown-menu ">
                                <li><a class="nav-link text-dark" href="{{ route('contactos.list.index')}}">
                                    {{ __('List Contacts') }}
                                   </a></li>
                                   <li><a class="nav-link text-dark" href="{{ route('contactos.general.index')}}">
                                    {{ __('General Contacts') }}
                                   </a></li>
                                   <li>
                                    <a class="nav-link text-dark" href="{{ route('contactos.sight.index')}}">
                                      {{ __('Sights Contacts') }} 
                                    </a>
                                  </li>
                            


                            </ul>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/sweetalert2.js')}}"></script>
    <script src="https://unpkg.com/huebee@2/dist/huebee.pkgd.min.js"></script>
    @yield('js')
</body>
</html>
