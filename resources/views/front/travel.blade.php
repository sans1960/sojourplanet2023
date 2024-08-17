<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>
    <link rel="shortcut icon" href="{{ asset('img/index.ico') }}" type="image/ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/tipo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front.css') }}">
</head>
<body>
    <div class="header" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url({{ asset('img/bosque.jpg') }});height: 500px;background-position:center;">
        <nav class="navbar navbar-expand-lg bg-dark " data-bs-theme="dark" style="background-color: transparent !important;">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{ route('index') }}">
                <img src="{{ asset('img/logo-sojournplanet-h.png') }}" alt="" class="img-fluid w-50">
              </a>
              <button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" ></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                 
                  <a class="nav-link text-white" href="#">+1 517 721 7020</a>
                  <a class="nav-link text-white" href="{{ route('contactos.landing.create') }}">contact-us</a>
                  <a class="nav-link" href="https://www.facebook.com/sojournplanet"> <i class="bi bi-facebook" style="color: white;"></i></a>
                  
    
                 
                </div>
              </div>
            </div>
          </nav>
       
          <div class="d-flex flex-column justify-content-center align-items-center p-2" >
            <h4 class="patua text-white ">Make the trip of your dreams come true with us</h4>
         
            <a href="{{ route('contactos.landing.create') }}"
                class="btn btn-outline-dark border border-white mt-3 patua px-3 py-2 text-white rounded-pill">Start to plan
                my
                trip</a>
          </div>
    </div>

      <div class="container mt-3">
        <div class="row">
            <div class="col-md-4 mt-2">
                <div class="card">
                    <img src="{{ asset('img/bosque.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     
                    </div>
                  </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="card">
                    <img src="{{ asset('img/bosque.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     
                    </div>
                  </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="card">
                    <img src="{{ asset('img/bosque.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     
                    </div>
                  </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="card">
                    <img src="{{ asset('img/bosque.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     
                    </div>
                  </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="card">
                    <img src="{{ asset('img/bosque.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     
                    </div>
                  </div>
            </div>

        </div>
      </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>