@extends('layouts.admin')

@section('title')
Edit {{ $tour->name }}

@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                   Edit Tour
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.tours.update',$tour)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                          <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" value="{{$tour->name}}" class="form-control" id="name" name="name">
                          </div>
                          <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slug" value="{{$tour->slug}}" name="slug" >
                          </div>
                          <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" value="{{$tour->title}}"
                                name="title">
                        </div>
                        <div class="mb-3">
                            <label for="subtitle" class="form-label">Subtitle</label>
                            <input type="text" class="form-control" id="subtitle" value="{{$tour->subtitle}}"
                                name="subtitle">
                        </div>

                            <div class="row mb-3">

                                <label for="countries" class="form-label">Countries</label>
                            <input type="text" name="countries" class="form-control mt-2" id="countries" value="{{$tour->countries}}">

                               </div>
                               <div class=" row mb-3">
                                <div class="col">

                                    <input type="text" class="form-control" value="{{$tour->city_first}}" name="city_first">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" value="{{$tour->city_last}}" name="city_last">

                                </div>

                            </div>
                           <div class="row mb-3">
                            <h6>Destinations</h6>

                            @foreach ($tour->destinations as $destination)
                            <div class="col-md-4 mt-2">
                             <div class="form-check">
                                 <input class="form-check-input" checked name="destinations[]" type="checkbox" value="{{$destination->id}}" id="flexCheckDefault">
                                 <label class="form-check-label" for="flexCheckDefault">
                                   {{$destination->name}}
                                 </label>
                               </div>
                            </div>

                            @endforeach
                            @foreach ($diffdestinations as $destination)
                            <div class="col-md-4 mt-2">
                             <div class="form-check">
                                 <input class="form-check-input"  name="destinations[]" type="checkbox" value="{{$destination->id}}" id="flexCheckDefault">
                                 <label class="form-check-label" for="flexCheckDefault">
                                   {{$destination->name}}
                                 </label>
                               </div>
                            </div>

                            @endforeach

                           </div>
                          
                           <div class=" row mb-3">
                            <div class="col">

                                <input type="number" class="form-control"  value="{{$tour->duration}}" name="duration" >
                            </div>
                            <div class="col">
                                <input type="text" class="form-control"  value="{{$tour->caption}}" name="caption" >

                            </div>
                            <div class="mb-3">
                              <label for="acomodation" class="form-label">Acomodation</label>
                              <textarea class="form-control" id="acomodation" rows="3" name="accommodation">
                                {!! $tour->accommodation!!}
                              </textarea>
                          </div>
                          <div class="mb-3">
                              <label for="meals" class="form-label">Meals</label>
                              <textarea class="form-control" id="meals" rows="3" name="meals">
                                {!! $tour->meals!!}
                              </textarea>
                          </div>
                          </div>
                          <div class="row mb-3">
                            <div class="col">
                                <input type="number" step="any" class="form-control"  name="price" value="{{$tour->price}}" >

                            </div>

                             <div class="col">
                                <input type="date" class="form-control"  name="date" value="{{$tour->date}}" >

                            </div>

                          </div>
                          <div class="row mb-3">
                            <div class="col-md-4 mx-auto">
                                <img  id="preview-image-before-upload" class="img-fluid d-block mx-auto" src="{{Storage::url($tour->image)}}" alt="">
                            </div>
                        </div>
                          <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input class="form-control" type="file" id="image" name="image">
                          </div>
                          <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" rows="3"  name="description">
                                {!! $tour->description!!}
                            </textarea>
                          </div>
                          <div class="mb-3">
                            <label for="conclusion" class="form-label">Conclusion</label>
                            <textarea class="form-control" id="conclusion" rows="3"  name="conclusion">
                                {!! $tour->conclusion !!}
                            </textarea>
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
      CKEDITOR.replace( 'description' );
      CKEDITOR.replace( 'conclusion' );

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
    var wrapper = $(".input_wrap>div");
    var add_button = $(".add_field_button");

     var counter = 1;
     $(add_button).click(function (e) {
    e.preventDefault();

    var newAdd = '<div id=div-'+counter+'><input type="text" name="countries[]" class="form-control mt-2"></div>';


    var el = $('.input_wrap div:last');
    $(el).after(newAdd);


    counter++;
}   );
  </script>

@endsection
