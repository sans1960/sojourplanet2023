<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      Destinations
    </a>
    <ul class="dropdown-menu">
        @foreach ($destinations as $destination)
        <li><a class="dropdown-item fs-5" href="{{route('destination',$destination)}}">{{$destination->name}}</a></li>
        @endforeach
    </ul>
  </li>










