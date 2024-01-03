<li class="nav-item dropdown ms-5">
  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Destinations
  </a>
  <ul class="dropdown-menu">
    @foreach ($destinations as $destination)
    @if ($destination->name != 'Antarctica')
    <li><a class="dropdown-item fs-6" href="{{route('destination',$destination)}}">{{$destination->name}}</a></li>
    @endif

    @endforeach
    <li>
      <hr class="dropdown-divider">
    </li>
    <li><a class="dropdown-item" href="{{url('countries')}}">All Desinations A to Z</a></li>
    <li><a class="dropdown-item" href="{{url('countries/antarctica')}}">Antarctica</a></li>
  </ul>
</li>