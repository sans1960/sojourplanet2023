@extends('layouts.admin')
@section('title')
Edit {{ $country->name }}

@endsection
@section('content')
<div class="container">
  <div class="row ">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header bg-dark text-white text-center">
          Edit Country
        </div>
        <div class="card-body">

          <form action="{{ route('admin.countries.update',$country)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @if($errors->any())
            {{ implode('', $errors->all('<div>:message</div>')) }}
            @endif
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" value="{{ $country->name}}" name="name" required>
            </div>
            <div class="mb-3">
              <label for="title" class="form-label">Meta Title</label>
              <input type="text" class="form-control" id="meta_title" value="{{$country->meta_title}}" name="meta_title">
            </div>
            <div class="mb-3">
              <label for="title" class="form-label">Meta Description</label>
              <input type="text" class="form-control" id="meta_description" value="{{$country->meta_description}}" name="meta_description">
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Slug</label>
              <input type="text" class="form-control" id="slug" name="slug" value="{{$country->slug}}">
            </div>
            <div class="row mb-3">
              <div class="col">
                <select class="form-select " name="destination_id" id="dest">
                  <option selected>Choose Destination</option>
                  @foreach ($destinations as $destination)
                  <option value="{{ $destination->id}}" @if ($country->destination_id == ($destination->id)) selected

                    @endif >{{ $destination->name}}</option>
                  @endforeach

                </select>
              </div>
              <div class="col">
                <select name="subregion_id" id="subre" class="form-select ">
                  <option selected value="{{$country->subregion_id}}">{{ $country->subregion->name}}</option>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-4 mx-auto">
                <img id="preview-image-before-upload" class="img-fluid d-block mx-auto"
                  src="{{ Storage::url($country->image)}}" alt="">
              </div>
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">Image</label>
              <input class="form-control" type="file" id="image" name="image">
            </div>
            <div class=" row mb-3">
              <div class="col">
                <label for="caption" class="form-label">Caption</label>
                <input type="text" class="form-control" id="caption" value="{{$country->caption}}" name="caption"
                  required>
              </div>
              <div class="col">
                <label for="intro" class="form-label">Intro</label>
                <input type="text" class="form-control" id="intro" value="{{$country->intro}}" name="intro">
              </div>
              <div class="col">
                <label for="advisory" class="form-label">Advisory</label>
                <select class="form-select " name="advisory_id" id="advisory">
                  <option></option>
                  @foreach ($advisories as $advisory)
                  <option value="{{ $advisory->id}}" @if ($country->advisory_id == ($advisory->id)) selected

                    @endif>{{ $advisory->legend}}</option>
                  @endforeach

                </select>
              </div>
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control" id="description" rows="3" name="description">
                                {!! $country->description!!}
                            </textarea>
            </div>
            <div class="row mb-3">
              <div class="col">
                <input type="text" class="form-control" value="{{$country->latitud}}" name="latitud">
              </div>
              <div class="col">
                <input type="text" class="form-control" value="{{$country->longitud}}" name="longitud">
              </div>
              <div class="col">
                <input type="number" class="form-control" value="{{$country->zoom}}" name="zoom">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <input type="text" class="form-control" value="{{$country->population}}" placeholder="Population"
                  name="population">
              </div>
              <div class="col">
                <input type="text" class="form-control" value="{{$country->capital}}" placeholder="Capital"
                  name="capital">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <input type="text" class="form-control" name="state" value="{{$country->state}}" placeholder="State">
              </div>
              <div class="col">
                <input type="text" class="form-control" name="language" value="{{$country->language}}"
                  placeholder="Language">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <input type="text" class="form-control" placeholder="Currency" name="currency"
                  value="{{$country->currency}}">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Time Difference" name="time_difference"
                  value="{{$country->time_difference}}">
              </div>
              <div class="col">
                <input type="text" class="form-control" name="best_times" placeholder="Best Time"
                  value="{{$country->best_times}}">
              </div>
            </div>
            <div class="mb-3">
              <label for="sidebody" class="form-label">Sidebody</label>
              <textarea class="form-control" id="sidebody" rows="3" name="sidebody">
                {!! $country->sidebody!!}
              </textarea>
            </div>
            <div class="mb-3">
              <label for="information" class="form-label">Information</label>
              <textarea class="form-control" id="information" rows="3" name="information">
                {!! $country->information!!}
              </textarea>
            </div>
            <div class="mb-3">
              <h6>Countries</h6>



              <div class="col-md-12 d-flex flex-wrap mt-2">
                @foreach ($countries->sortBy('name') as $count)


                <div class="form-check me-3">
                  <input class="form-check-input" name="nearby[]" type="checkbox" value="{{$count->name}}"
                    id="flexCheckDefault" @if ($country->nearby) @foreach ($country->nearby as $item)
                  @if ($item == $count->name)
                  @checked(true)
                  @endif
                  @endforeach>
                  @endif



                  <label class="form-check-label" for="flexCheckDefault">
                    {{$count->name}}
                  </label>
                </div>


                @endforeach
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-md-4 mx-auto">
                <button type="submit" class="btn btn-success d-block mx-auto">
                  <i class="bi bi-upload"></i>
                </button>
              </div>
            </div>
          </form>

        </div>
      </div>

    </div>

  </div>

</div> @endsection
@section('js')
{{-- <script>
  CKEDITOR.replace( 'description' );
CKEDITOR.replace( 'sidebody' );
CKEDITOR.replace( 'information' );

</script> --}}
<script src="{{asset('tinymce/tinymce.min.js')}}"></script>
<script>
  tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample code emoticons  link lists  searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link  table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat | code',
            branding: false,
            menubar: false,
            language: 'ca',

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