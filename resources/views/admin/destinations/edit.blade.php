@extends('layouts.admin')
@section('title') 
Edit {{ $destination->name }}

@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                   Edit Destination
                </div>
                <div class="card-body">

                    <form action="{{ route('admin.destinations.update',$destination)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name"  name="name" value="{{ $destination->name}}">
                          </div>
                          <div class="mb-3">
                            <label for="title" class="form-label">Meta Title</label>
                            <input type="text" class="form-control" id="meta_title" value="{{$destination->meta_title}}" name="meta_title">
                          </div>
                          <div class="mb-3">
                            <label for="title" class="form-label">Meta Description</label>
                            <input type="text" class="form-control" id="meta_description" value="{{$destination->meta_description}}" name="meta_description">
                          </div>
                          <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slug"  name="slug" value="{{ $destination->slug}}" >
                          </div>
                          <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" placeholder="Title" name="title"  value="{{ $destination->title}}">
                          </div>
                          <div class="mb-3">
                            <label for="subtitle" class="form-label">Subtitle</label>
                            <input type="text" class="form-control" id="subtitle" placeholder="Subtitle" name="subtitle"  value="{{ $destination->subtitle}}">
                          </div>
                          <div class="row mb-3">
                            <div class="col-md-4 mx-auto">
                                <img  id="preview-image-before-upload" class="img-fluid d-block mx-auto" src="{{ Storage::url($destination->image)}}" alt="">
                            </div>
                        </div>
                          <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input class="form-control" type="file" id="image" name="image">
                          </div>
                          <div class="mb-3">
                            <label for="caption" class="form-label">Caption</label>
                            <input type="text" class="form-control" id="caption" placeholder="Caption" name="caption"  value="{{ $destination->caption}}">
                          </div>
                          <div class="mb-3">
                            <label for="body" class="form-label">Body</label>
                            <textarea class="form-control" id="body" rows="3"  name="body">
                                {!! $destination->body!!}
                            </textarea>
                          </div>
                          <div class="mb-3">
                            <label for="sidebody" class="form-label">Sidebody</label>
                            <textarea class="form-control" id="sidebody" rows="3"  name="sidebody">
                                {!! $destination->sidebody!!}
                            </textarea>
                          </div>

                        <div class="row mb-3">
                            <div class="col-md-4 mx-auto">
                            <button type="submit" class="btn btn-primary d-block mx-auto">
                                <i class="bi bi-upload"></i>
                              </button>
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
  tinymce.init({
            selector: 'textarea',
            advcode_inline: true,
            plugins: 'anchor autolink charmap codesample code emoticons  link lists  searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link  table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat | code',
            branding: false,
            menubar: false,
            language: 'ca',
            advcode_inline: true,
        });
</script>
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
 
@endsection
