@extends('layouts.admin')
@section('title')
    {{ __('Location Tours Create') }}
@endsection
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 mx-auto ">
                <div class="card">
                    <div class="card-header">
                        Location Tours Create

                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.locationtours.store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="site" class="form-label">Site</label>
                                <input type="text" name="site" class="form-control" id="site" placeholder="Site">
                            </div>
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" name="slug" class="form-control" id="slug">
                            </div>
                            <div class="mb-3">
                                <select class="form-select" required name="tour_id" aria-label=".form-select-lg example">
                                    <option selected>Escoje Tour</option>
                                    @foreach ($tours as $tour)
                                        <option value="{{ $tour->id }}">{{ $tour->name }}</option>
                                    @endforeach


                                </select>
                            </div>
                            <div class=" row mb-3">
                                <div class="col">

                                    <input type="text" class="form-control" placeholder="Latitud" name="latitud">
                                </div>
                                <div class="col">

                                    <input type="text" class="form-control" placeholder="Longitud" name="longitud">
                                </div>
                                <div class="col">

                                    <input type="number" class="form-control" name="zoom" placeholder="Zoom">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4 mx-auto">
                                    <button type="submit" class="btn btn-primary d-block mx-auto">
                                        <i class="bi bi-check-circle"></i>
                                    </button>
                                </div>
                            </div>

                    </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
@section('js')
    <script>
        $('#site').change(function(e) {
            $.get('{{ route('pages.check_slug_site') }}', {
                    'site': $(this).val()
                },
                function(data) {
                    $('#slug').val(data.slug);
                }
            );
        });
    </script>
@endsection
