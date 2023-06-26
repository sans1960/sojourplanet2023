<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery of {{$tour->name}}</title>
    <link rel="shortcut icon" href="{{ asset('img/index.ico') }}" type="image/ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/tipo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front.css') }}">
    <link rel="stylesheet" href="{{asset('css/lightbox.css')}}">
    {{-- <link rel="stylesheet" href="{{ asset('css/leaflet.css')}}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>
    <div class="container-fluid bg-dark p-3">
        <h3 class="patua text-white text-center ">{{$tour->name}}</h3>
    </div>
    <div class="container">
        <div class="row mt-5">
            @foreach ($tour->imagetour as $item)
            <div class="col-md-4 mb-3">
                <a href="{{ Storage::url($item->image) }}"
                    data-lightbox="example-set" class="col-sm-4"
                    data-title="{{ $item->title }}">
                    <img src="{{ Storage::url($item->image) }}" class="img-fluid">
                </a>
            </div>
        @endforeach
        </div>
    </div>

    <div class="container-fluid bg-dark p-3">
        <h3 class="patua text-white text-center ">Image Gallery</h3>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
{{-- <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script> --}}

    <script src="{{ asset('js/lightbox.js') }}"></script>

</body>
</html>