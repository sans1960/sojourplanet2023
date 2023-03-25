@extends('layouts.admin')
@section('title')
Edit {{ $country->name }}

@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                   Edit Country
                </div>
                <div class="card-body">

                    <form action="{{ route('admin.countries.update',$country)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" value="{{ $country->name}}"  name="name"  required>
                          </div>
                          <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slug"  name="slug" value="{{$country->slug}}" >
                          </div>
                          <div class="row mb-3">
                            <div class="col">
                               <select class="form-select "  name="destination_id" id="dest">
                                   <option selected>Choose Destination</option>
                                   @foreach ($destinations as $destination)
                                   <option value="{{ $destination->id}}"  @if ($country->destination_id == ($destination->id)) selected

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
                                <img  id="preview-image-before-upload" class="img-fluid d-block mx-auto" src="{{ Storage::url($country->image)}}" alt="">
                            </div>
                        </div>
                          <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input class="form-control" type="file" id="image" name="image">
                          </div>
                          <div class="mb-3">
                            <label for="caption" class="form-label">Caption</label>
                            <input type="text" class="form-control" id="caption" value="{{$country->caption}}" name="caption"  required>
                          </div>
                          <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" rows="3"  name="description">
                                {!! $country->description!!}
                            </textarea>
                          </div>
                           <div class="row mb-3">
                             <div class="col">
                                <input type="text" class="form-control"  value="{{$country->latitud}}"  name="latitud"  >
                             </div>
                             <div class="col">
                                <input type="text" class="form-control"  value="{{$country->longitud}}"  name="longitud"  >
                             </div>
                             <div class="col">
                                <input type="number" class="form-control" value="{{$country->zoom}}"  name="zoom"  >
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

</div
@endsection
@section('js')
   <script>
    CKEDITOR.replace( 'description' );

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
