     <div class="row ">
         <div class="col-md-12 mx-auto d-flex flex-wrap p-2 justify-content-center">
             @foreach ($destinations->sortBy('name') as $destination)
                 <a href="{{ route('destinationsights', $destination) }}"
                     class="nav-link me-3">{{ $destination->name }}</a>
             @endforeach
         </div>

     </div>
