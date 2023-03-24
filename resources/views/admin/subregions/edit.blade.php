@extends('layouts.admin')
@section('title')
Edit {{ $subregion->name}}
@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-center text-white">
                  Create Subregion
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.subregions.update',$subregion)}}" method="post">
                      @csrf
                      @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" value="{{ $subregion->name}}" name="name" autofocus required>
                          </div>
                          <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slug" value="{{ $subregion->slug}}" name="slug" >
                          </div>
                          <select class="form-select mb-4" required name="destination_id">
                            <option selected>Choose Destination</option>
                            @foreach ($destinations as $destination)
                                <option value="{{ $destination->id}}"  @if ($subregion->destination_id == ($destination->id)) selected

                                    @endif >{{ $destination->name}}</option>
                            @endforeach

                          </select>
                          <div class="mb-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-upload"></i>
                            </button>
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
    $('#name').change(function(e) {
      $.get('{{ route('pages.check_slug') }}',
        { 'name': $(this).val() },
        function( data ) {
          $('#slug').val(data.slug);
        }
      );
    });
  </script>
@endsection
