@extends('layouts.admin')

@section('title')
{{ __('Image Destinations-create') }}

@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                   Create Image Destination
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.imagedestinations.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                          <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" placeholder="Title" name="title"  required>
                          </div>
                          <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slug"  name="slug"  required>
                          </div>
                        <div class="mb-3">
                            <select class="form-select" required name="destination_id" aria-label=".form-select-lg example">
                                <option selected>Escoje Destino</option>
                                @foreach ($destinations as $destination)
                                    <option value="{{ $destination->id}}">{{ $destination->name}}</option>
                                @endforeach


                              </select>
                        </div>
                          <div class="row mb-3">
                            <div class="col-md-4 mx-auto">
                                <img  id="preview-image-before-upload" class="img-fluid d-block mx-auto" src="https://cdn.pixabay.com/photo/2022/02/22/17/25/stork-7029266_960_720.jpg" alt="">
                            </div>
                        </div>
                          <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input class="form-control" type="file" id="image" name="image">
                          </div>
                          <div class="mb-3">
                            <label for="caption" class="form-label">Caption</label>
                            <input type="text" class="form-control" id="caption" placeholder="Caption" name="caption"  >
                          </div>

                        <div class="row mb-3">
                            <div class="col-md-4 mx-auto">
                            <button type="submit" class="btn btn-success d-block mx-auto">
                              <i class="bi bi-check-circle"></i>
                              </button>
                        </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>

    </div>

</div
@endsection
@section('js')
<script>
    $(document).ready(function (e) {
       $('#image').change(function(){
        let reader = new FileReader();
        reader.onload = (e) => {
          $('#preview-image-before-upload').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
       });
    });
 </script>
 <script>
    $('#title').change(function(e) {
      $.get('{{ route('pages.check_slug_title') }}',
        { 'title': $(this).val() },
        function( data ) {
          $('#slug').val(data.slug);
        }
      );
    });
  </script>
@endsection
