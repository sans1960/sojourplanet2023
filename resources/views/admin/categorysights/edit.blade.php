@extends('layouts.admin')
@section('title')
Edit {{ $categorysight->name}}
@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-center text-white">
                  Edit Category Sight
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.categorysights.update',$categorysight)}}" method="post">
                      @csrf
                      @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" value="{{ $categorysight->name}}" name="name" autofocus required>
                          </div>
                          <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slug" value="{{ $categorysight->slug}}" name="slug" >
                          </div>

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
