@extends('layouts.admin')

@section('title')
Edit {{ $sight->title }}

@endsection
@section('content')
<div class="container">
  <div class="row ">
    <div class="col-md-10 mx-auto">
      <div class="card">
        <div class="card-header bg-dark text-white text-center">
          Edit Sight
        </div>
        <div class="card-body">
          <form action="{{route('admin.sights.update',$sight)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" value="{{$sight->title}}" name="title">
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Slug</label>
              <input type="text" class="form-control" id="slug" value="{{$sight->slug}}" name="slug">
            </div>
            <div class="mb-3">
              <label for="site" class="form-label">Site</label>
              <input type="text" class="form-control" value="{{$sight->site}}" id="site" name="site">
            </div>
            <div class="row mb-3">
              <div class="col">
                <select class="form-select" name="destination_id" id="dest">
                  <option selected>Choose Destination</option>
                  @foreach ($destinations as $destination)

                  <option value="{{ $destination->id}}" @if ($sight->destination_id == ($destination->id)) selected

                    @endif>{{ $destination->name}}</option>
                  @endforeach


                </select>
              </div>
              <div class="col">
                <select name="subregion_id" id="subre" class="form-select ">
                  <option selected value="{{$sight->subregion_id}}">{{ $sight->subregion->name}}</option>
                </select>
              </div>
              <div class="col">
                <select name="country_id" id="country" class="form-select ">
                  <option selected value="{{$sight->country_id}}">{{ $sight->country->name}}</option>
                </select>
              </div>
            </div>
            <div class="mb-3">
              <select name="categorysight_id" class="form-select ">
                <option value="">Choose Category Sight</option>
                @foreach ($categorysights as $categorysight)
                <option value="{{ $categorysight->id}}" @if ($sight->categorysight_id == ($categorysight->id)) selected

                  @endif
                  >{{ $categorysight->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="row mb-3  ">
              <h6>Tags</h6>
              <div class="col-md-12 mt-2 d-flex flex-wrap">
                @foreach ($sight->tags->sortBy('name') as $tag)

                <div class="form-check me-4">
                  <input class="form-check-input" checked name="tags[]" type="checkbox" value="{{$tag->id}}"
                    id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    {{$tag->name}}
                  </label>
                </div>

                @endforeach
              </div>
              <div class="col-md-12 d-flex flex-wrap mt-2">
                @foreach ($difftags->sortBy('name') as $tag)

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

                <input type="text" class="form-control" placeholder="Latitud" name="latitud"
                  value="{{$sight->latitud}}">
              </div>
              <div class="col">

                <input type="text" class="form-control" placeholder="Longitud" name="longitud"
                  value="{{$sight->longitud}}">
              </div>

            </div>
            <div class="row mb-3">
              <div class="col">

                <input type="text" class="form-control" placeholder="Caption" name="caption"
                  value="{{$sight->caption}}">
              </div>
              <div class="col">

                <input type="date" class="form-control" name="date" value="{{$sight->date}}">
              </div>
              <div class="col">

                <input type="number" class="form-control" name="zoom" value="{{$sight->zoom}}">
              </div>

            </div>
            <div class="row mb-3">
              <div class="col-md-4 mx-auto">
                <img id="preview-image-before-upload" class="img-fluid d-block mx-auto"
                  src="{{Storage::url($sight->image)}}" alt="">
              </div>
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">Image</label>
              <input class="form-control" type="file" id="image" name="image">
            </div>
            <div class="mb-3">
              <label for="extract" class="form-label">Extract</label>
              <textarea class="form-control" id="extract" rows="3" name="extract">
                                {!! $sight->extract!!}
                            </textarea>
            </div>
            <div class="mb-3">
              <label for="introduction" class="form-label">Introduction</label>
              <textarea class="form-control" id="introduction" rows="3" name="introduction">
                                {!! $sight->introduction!!}
                            </textarea>
            </div>
            <div class="mb-3">
              <label for="highlight" class="form-label">Highlight</label>
              <textarea class="form-control" id="highlight" rows="3" name="highlight">
                                {!! $sight->highlight !!}
                            </textarea>
            </div>
            <div class="mb-3">
              <label for="final" class="form-label">Final</label>
              <textarea class="form-control" id="final" rows="3" name="final">
                                {!! $sight->final !!}
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
  CKEDITOR.replace( 'introduction' );
          CKEDITOR.replace( 'extract' );
          CKEDITOR.replace( 'highlight' );
          CKEDITOR.replace( 'final' );
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