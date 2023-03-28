@extends('layouts.admin')
@section('title')
{{ __('Create Type') }}
@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-center text-white">
                  Create Type
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.types.store')}}" method="post">
                      @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name" autofocus required>
                          </div>
                          <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slug"  name="slug" >
                          </div>
                          <div class="mb-3">
                            <label for="color" class="form-label">Color</label>
                            <input type="text" class="form-control" id="color" class="color-input" data-huebee='{ "notation": "hex", "saturations": 2 }' name="color" >
                          </div>

                          <div class="mb-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-check-circle"></i>
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
