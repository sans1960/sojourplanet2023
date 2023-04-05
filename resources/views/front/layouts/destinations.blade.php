<div class="container-fluid bg-dark text-white patua d-flex justify-content-end me-5">
    <div class="dropdown">
        <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Destinations
        </button>
        <ul class="dropdown-menu dropdown-menu-dark">
            @foreach ($destinations as $destination)
            <li><a class="dropdown-item " href="{{route('destination',$destination)}}">{{$destination->name}}</a></li>
            @endforeach


        </ul>
      </div>

</div>
