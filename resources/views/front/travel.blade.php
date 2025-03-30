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
    <div class="header" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url({{ asset('img/flamencos.jpg') }});height: 400px;background-position:center;background-size:cover;">
        <nav class="navbar navbar-expand-lg bg-dark " data-bs-theme="dark" style="background-color: transparent !important;">
            <div class="container">
              <a class="navbar-brand" href="{{ route('index') }}">
                <img src="{{ asset('img/dos.png') }}" alt="" class="img-fluid w-100">
              </a>
              <button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" ></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                       <ul class="navbar-nav ms-auto">
                  
                 <li class="nav-item">
                  <a class="nav-link text-white" href="#">+1 517 721 7020</a>
                 </li>
                 <li class="nav-item">
                  <a class="nav-link text-white" href="{{ route('contactos.create') }}">contact us</a>
                 </li>
                 <li class="nav-item">
                  <a class="nav-link" href="https://www.facebook.com/sojournplanet"> <i class="bi bi-facebook" style="color: white;"></i></a>
                 </li>
                 
                  
                
                  
    
                 
                </ul>
              </div>
            </div>
          </nav>
       
          <div class="d-flex flex-column justify-content-center align-items-center px-2 py-5" >
            <h1 class="patua text-white text-center">Make the trip of your dreams come true with us</h1>
         
            <a href="{{ route('contactos.landing.create') }}"
                class="btn btn-outline-dark border border-white mt-3 patua px-3 py-2 text-white rounded-pill">Start to plan
                my
                trip</a>
          </div>
    </div>

      <div class="container mt-3 mb-5">
          <h1 class="patua text-black  text-center fs-4">Embark on extraordinary journeys with Sojournplanet</h1>
        <div class="row">
            <div class="col-md-3 mt-2 d-flex justify-content-center flex-column flex-align-center especial"  data-bs-toggle="modal" data-bs-target="#exampleModal">
               
              <div class="rounded-circle mx-auto d-flex justify-content-center align-items-center" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url({{ asset('img/boat.jpg') }});height: 200px;background-position:center;width: 200px;background-size:cover; ">
                <i class="bi bi-plus-circle-dotted" style="color:white;font-size:1.3rem;"></i>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header d-flex flex-column " style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url(https://sojournplanet.com/img/boat.webp);height: 200px;background-size:cover">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <h3 class="modal-title fs-5 patua mt-5" id="exampleModalLabel" >Bespoke & exclusive travel</h3>
                      
                      </div>
                      <div class="modal-body">
                        <p class="fw-bold">Discover a world where your travels are crafted with precision and exclusivity.</p> 
                        
                        <p style="text-align:justify;">At Sojournplanet, we understand that luxury is more than just opulence—it's about experiencing the extraordinary, tailored just for you. Our bespoke journeys are meticulously designed to align with your desires, ensuring that every moment is a reflection of your unique preferences.</p>
                        
                        <p style="text-align:justify;">Whether it’s a secluded beach retreat or a culturally immersive expedition, we transform your dreams into unforgettable memories. Travel with Sojournplanet and unlock a personalized adventure like no other.</p>
                      </div>
                      <div class="modal-footer d-flex justify-content-center ">
                        <a href="{{ route('contactos.landing.create') }}"
                        class="btn btn-dark border border-white mt-3 patua px-3 py-2 text-white rounded-pill">Start to plan
                        my
                        trip</a>
                      
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h2 class="patua mt-4 text-center fs-6">Bespoke & exclusive travel</h2>
            
            </div>
            <div class="col-md-3 mt-2 d-flex justify-content-center flex-column flex-align-center especial" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                
              <div class="rounded-circle mx-auto d-flex justify-content-center align-items-center" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url({{ asset('img/towel.jpg') }});height: 200px;background-position:center;width: 200px;background-size:cover; ">
                <i class="bi bi-plus-circle-dotted" style="color:white;font-size:1.3rem;" ></i>
                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-title fs-5 patua" id="exampleModalLabel">Attention to unique details</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <p class="fw-bold">At Sojournplanet, we believe that the magic of travel lies in the details.</p>
                        
                        <p style="text-align:justify;">Our commitment to excellence means that every aspect of your journey is thoughtfully considered and expertly executed. From the personalized welcome notes to the handpicked local guides, no detail is too small to enhance your experience.</p> 
                        
                        <p style="text-align:justify;">We strive to create moments that resonate with your individual tastes, ensuring that your journey is not only seamless but also profoundly meaningful.</p>
                      </div>
                      <div class="modal-footer d-flex justify-content-center">
                        <a href="{{ route('contactos.landing.create') }}"
                        class="btn btn-dark border border-white mt-3 patua px-3 py-2 text-white rounded-pill ">Start to plan
                        my
                        trip</a>
                        
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h2 class="patua mt-4 text-center fs-6">Attention to unique details</h2>
            
            </div>
            <div class="col-md-3 mt-2 d-flex justify-content-center flex-column flex-align-center especial" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                 
              <div class="rounded-circle mx-auto d-flex justify-content-center align-items-center" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url({{ asset('img/water.jpg') }});height: 200px;background-position:center;width: 200px;background-size:cover; ">
                <i class="bi bi-plus-circle-dotted" style="color:white;font-size:1.3rem;"></i>
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-title fs-5 patua" id="exampleModalLabel">Authentic & local experiences</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <p class="fw-bold">Travel with Sojournplanet and immerse yourself in the authenticity of each destination.</p>
                        
                        <p style="text-align:justify;">We go beyond the ordinary to offer you experiences that connect you deeply with the local culture and traditions. Whether it’s dining with a local family or exploring hidden gems with a knowledgeable guide, our curated experiences allow you to see the world through a genuine lens.</p>
                        
                        <p style="text-align:justify;">Discover the heart of each place you visit, and create stories that last a lifetime.</p>
                      </div>
                      <div class="modal-footer d-flex justify-content-center">
                        <a href="{{ route('contactos.landing.create') }}"
                        class="btn btn-dark border border-white mt-3 patua px-3 py-2 text-white rounded-pill">Start to plan
                        my
                        trip</a>
                      
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h2 class="patua mt-4 text-center fs-6">Authentic & local experiences</h2>
            
            </div>
            <div class="col-md-3 mt-2 d-flex justify-content-center flex-column flex-align-center especial" data-bs-toggle="modal" data-bs-target="#exampleModal3">
            
              <div class="rounded-circle mx-auto d-flex justify-content-center align-items-center" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url({{ asset('img/helicopter.jpg') }});height: 200px;background-position:center;width: 200px;background-size:cover; ">
                <i class="bi bi-plus-circle-dotted" style="color:white;font-size:1.3rem;"></i>
                <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-title fs-5 patua" id="exampleModalLabel">Personalized & close attention</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <p class="fw-bold">Let us handle every aspect while you focus on creating unforgettable memories.</p>
                        
                        <p style="text-align:justify;">From the initial consultation to the moment you return home, our dedicated team is with you every step of the way. We pride ourselves on our close attention to detail, ensuring that your travel experience is smooth, enjoyable, and truly yours.</p> 
                        
                        <p style="text-align:justify;">Your journey with Sojournplanet is more than just a trip—it’s a personalized experience designed with care and attention to your every need.</p>
                        
                        
                      </div>
                      <div class="modal-footer d-flex justify-content-center">
                        
                        <a href="{{ route('contactos.landing.create') }}"
                        class="btn btn-dark border border-white mt-3 patua px-3 py-2 text-white rounded-pill ">Start to plan
                        my
                        trip</a>
                        
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h2 class="patua mt-4 text-center fs-6">Personalized & close attention</h2>
            
            </div>

       

        </div>
      </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>