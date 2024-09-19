@extends('layouts.admin')

@section('title')
{{ __('Sight-create') }}

@endsection
@section('content')
<div class="container">
  <div class="row ">
    <div class="col-md-10 mx-auto">
      <div class="card">
        <div class="card-header bg-dark text-white text-center">
          Create Sight
        </div>
        <div class="card-body">
          <form action="{{ route('admin.sights.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" placeholder="Title" name="title">
            </div>
            <div class="mb-3">
              <label for="title" class="form-label">Meta Title</label>
              <input type="text" class="form-control" id="meta_title" placeholder="Meta Title" name="meta_title">
            </div>
            <div class="mb-3">
              <label for="title" class="form-label">Meta Description</label>
              <input type="text" class="form-control" id="meta_description" placeholder="Meta Description" name="meta_description">
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Slug</label>
              <input type="text" class="form-control" id="slug" name="slug">
            </div>
            <div class="mb-3">
              <label for="site" class="form-label">Site</label>
              <input type="text" class="form-control" id="site" name="site">
            </div>
            <div class="row mb-3">
              <div class="col">
                <select class="form-select" name="destination_id" id="dest">
                  <option selected>Choose Destination</option>
                  @foreach ($destinations as $destination)
                  <option value="{{ $destination->id}}">{{ $destination->name}}</option>
                  @endforeach


                </select>
              </div>
              <div class="col">
                <select name="subregion_id" id="subre" class="form-select ">

                </select>
              </div>
              <div class="col">
                <select name="country_id" id="country" class="form-select ">

                </select>
              </div>
            </div>
            <div class="mb-3">
              <select name="categorysight_id" class="form-select ">
                <option value="">Choose Category Sight</option>
                @foreach ($categorysights as $categorysight)
                <option value="{{ $categorysight->id}}">{{ $categorysight->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="row mb-3  ">
              <h6>Tags</h6>
              <div class="col-md-12 d-flex flex-wrap mt-2">
                @foreach ($tags->sortBy('name') as $tag)


                <div class="form-check me-3">
                  <input class="form-check-input" name="tags[]" type="checkbox" value="{{$tag->id}}"
                    id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    {{$tag->name}}
                  </label>
                </div>


                @endforeach
              </div>
            </div>
            <div class=" row mb-3">
              <div class="col">

                <input type="text" class="form-control" placeholder="Latitud" name="latitud">
              </div>
              <div class="col">

                <input type="text" class="form-control" placeholder="Longitud" name="longitud">
              </div>

            </div>
            <div class="row mb-3">
              <div class="col">

                <input type="text" class="form-control" placeholder="Caption" name="caption">
              </div>
              <div class="col">

                <input type="date" class="form-control" name="date">
              </div>
              <div class="col">

                <input type="number" class="form-control" name="zoom" placeholder="Zoom">
              </div>

            </div>
            <div class="row mb-3">
              <div class="col-md-4 mx-auto">
                <img id="preview-image-before-upload" class="img-fluid d-block mx-auto"
                  src="https://cdn.pixabay.com/photo/2022/02/22/17/25/stork-7029266_960_720.jpg" alt="">
              </div>
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">Image</label>
              <input class="form-control" type="file" id="image" name="image">
            </div>
            <div class="mb-3">
              <label for="extract" class="form-label">Extract</label>
              <textarea class="form-control" id="extract" rows="3" name="extract"></textarea>
            </div>
            <div class="mb-3">
              <label for="introduction" class="form-label">Introduction</label>
              <textarea class="form-control" id="introduction" rows="3" name="introduction"></textarea>
            </div>
            <div class="mb-3">
              <label for="highlight" class="form-label">Highlight</label>
              <textarea class="form-control" id="highlight" rows="3" name="highlight"></textarea>
            </div>
            <div class="mb-3">
              <label for="final" class="form-label">Final</label>
              <textarea class="form-control" id="final" rows="3" name="final"></textarea>
            </div>
            <div class="row mb-3">
              <h6>Countries</h6>
              @foreach ($countries->sortBy('name') as $country)
              <div class="col-md-3 mt-2">
                <div class="form-check">
                  <input class="form-check-input" name="countries[]" type="checkbox" value="{{ $country->id }}"
                    id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    {{ $country->name }}
                  </label>
                </div>
              </div>
              @endforeach
            </div>

            <div class="row mb-3">
              <div class="col-md-4 mx-auto">
                <button type="submit" class="btn btn-primary d-block mx-auto">
                  <i class="bi bi-check-circle"></i>
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

  <script src="{{asset('tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('tinymce/code/plugin.min.js')}}"></script>
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
  $(document).ready(function(){
        $('#dest').on('change',function(){
            var destId = this.value;
            $('#subre').html('');
            $.ajax({
                url:'{{ route('getsubregions') }}?destination_id='+destId,
                type:'get',
                success:function (res){
                    $('#subre').html('<option value="">Select subregion</option>');
                    $.each(res,function(key,value){
                        $('#subre').append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                    });
                }
            });
        });
        $('#subre').on('change',function(){
            var subretId = this.value;
            $('#country').html('');
            $.ajax({
                url:'{{ route('getcountries') }}?subregion_id='+subretId,
                type:'get',
                success:function (res){
                    $('#country').html('<option value="">Select country</option>');
                    $.each(res,function(key,value){
                        $('#country').append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                    });
                }
            });
        });


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