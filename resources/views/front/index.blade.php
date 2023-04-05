@extends('front.layouts.base')
@section('title')
    Home
@endsection
@section('css')

@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">

                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://travelblog.websans.app/img/architecture.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100 ">
                      <h1 class="mb-5">The world is yours</h1>
                      <h5>We are specialists in tailor-made trips around the world.</h5>
                      <a href="" class="btn btn-dark">Start to plan my trip</a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://travelblog.websans.app/img/bora-bora.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                      <h1>We create unique trips.</h1>
                      <h5>Some representative placeholder content for the second slide.</h5>
                      <a href="" class="btn btn-dark">Start to plan my trip</a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://travelblog.websans.app/img/lighthouse.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                      <h1>Third slide label</h1>
                      <h5>Some representative placeholder content for the third slide.</h5>
                      <a href="" class="btn btn-dark">Start to plan my trip</a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://travelblog.websans.app/img/maldives.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                      <h1>Third slide label</h1>
                      <h5>Some representative placeholder content for the third slide.</h5>
                      <a href="" class="btn btn-dark">Start to plan my trip</a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://travelblog.websans.app/img/woman.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                      <h1>Third slide label</h1>
                      <h5>Some representative placeholder content for the third slide.</h5>
                      <a href="" class="btn btn-dark">Start to plan my trip</a>
                    </div>
                  </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
        <div class="col-md-4 d-flex  flex-column justify-content-start align-items-center patua">
            <div class="mb-4">
                <h4>Lasts Travel Blog</h4>
                <div class="d-flex flex-column justify-content-start align-items-center">
                    <a href="#" class=" ">
                      The current link item
                    </a>
                    <a href="#" class="">A second link item</a>
                    <a href="#" class="">A third link item</a>
                    <a href="#" class="">A fourth link item</a>

                  </div>
            </div>
            <div class="mb-4">
                <h4>Lasts Travel Sight</h4>
                <div class="d-flex flex-column justify-content-start align-items-center">
                    <a href="#" class=" ">
                      The current link item
                    </a>
                    <a href="#" class="l">A second link item</a>
                    <a href="#" class="">A third link item</a>
                    <a href="#" class="">A fourth link item</a>

                  </div>
            </div>
            <div class="mb-4">
                <h4>Lasts Travel Tour</h4>
                <div class="d-flex flex-column justify-content-start align-items-center">
                    <a href="#" class=" ">
                      The current link item
                    </a>
                    <a href="#" class="">A second link item</a>
                    <a href="#" class="">A third link item</a>
                    <a href="#" class="">A fourth link item</a>

                  </div>
            </div>


        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 text-center">
            <h1 class="open">Welcome</h1>
            <p class="open">We believe that trips should be as individual as you, where every detail counts for a unique experience. This is the essence of our business.</p>
            <a href="" class="btn btn-outline-dark mb-5 patua">Tailor-made trips</a>

        </div>
        <div class="col-md-4 mb-5 d-flex flex-column justify-content-center align-items-center p-3">
              <img src="{{asset('img/dream.png')}}" class="img-fluid" alt="">
              <a href="">The trip of your dream</a>
           </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row mt-5">
        <h1 class="text-center mt-5">Our destinations</h1>
                @foreach ($destinations as $destination)
                <div class="col-md-3 d-flex justify-content-center align-items-center" style="background-image: url({{Storage::url($destination->image)}});background-size:cover;height:200px;">
                    <a href="{{ route('destination',$destination)}}" class="btn btn-outline-dark">{{$destination->name}}</a>
                  </div>
                @endforeach


                </div>

</div>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <h1 class="text-center">Subscribe</h1>
            <p class="text-center">Sign up to hear from us about specials, news and promotions.</p>
            <form action="" method="post">
             @csrf
             <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput">Email address</label>
                    </div>
                  <div class="d-flex justify-content-center">
                     <button type="submit" class="btn btn-outline-dark">Sign up</button>
                  </div>
            </form>



        </div>

    </div>
</div>
@endsection
@section('js')

@endsection
