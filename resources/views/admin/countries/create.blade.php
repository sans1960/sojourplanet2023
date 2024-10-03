@extends('layouts.admin')
@section('title')
{{ __('Create Country') }}

@endsection
@section('content')
<div class="container">
  <div class="row ">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header bg-dark text-white text-center">
          Create Country
        </div>
        <div class="card-body">

          <form action="{{ route('admin.countries.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @if($errors->any())
            {{ implode('', $errors->all('<div>:message</div>')) }}
            @endif
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Name" name="name" autofocus required>
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

            <div class="row mb-3">
              <div class="col">
                <select class="form-select " name="destination_id" id="dest">
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
            <div class="row mb-3">
              <div class="col">
                <label for="caption" class="form-label">Caption</label>
                <input type="text" class="form-control" id="caption" placeholder="Caption" name="caption" required>
              </div>
              <div class="col">
                <label for="intro" class="form-label">Intro</label>
                <input type="text" class="form-control" id="intro" placeholder="Intro" name="intro">
              </div>
              <div class="col">
                <label for="advisory" class="form-label">Advisory</label>
                <select class="form-select " name="advisory_id" id="advisory">
                  <option></option>
                  @foreach ($advisories as $advisory)
                  <option value="{{ $advisory->id}}">{{ $advisory->legend}}</option>
                  @endforeach

                </select>
              </div>
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control" id="description" rows="3" name="description"></textarea>
            </div>
            <div class="row mb-3">
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
              <div class="col">
                <input type="text" class="form-control" placeholder="Population" name="population">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Capital" name="capital">
              </div>
            </div>
            <div class="row mb-3">

              <div class="col">
                <input type="text" class="form-control" name="state" placeholder="State">
              </div>

              <div class="col">
                <input type="text" class="form-control" name="language" placeholder="Language">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <input type="text" class="form-control" placeholder="Currency" name="currency">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Time Difference" name="time_difference">
              </div>
              <div class="col">
                <input type="text" class="form-control" name="best_times" placeholder="Best Time">
              </div>
            </div>
            <div class="mb-3">
              <label for="sidebody" class="form-label">Sidebody</label>
              <textarea class="form-control" id="sidebody" rows="3" name="sidebody"></textarea>
            </div>
            <div class="mb-3">
              <label for="information" class="form-label">Information</label>
              <textarea class="form-control" id="information" rows="3" name="information"></textarea>
            </div>

            <div class="mb-3">
              <h6>Countries</h6>
              <div class="col-md-12 d-flex flex-wrap mt-2">
                @foreach ($countries->sortBy('name') as $country)


                <div class="form-check me-3">
                  <input class="form-check-input" name="nearby[]" type="checkbox" value="{{$country->name}}"
                    id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    {{$country->name}}
                  </label>
                </div>


                @endforeach
              </div>
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