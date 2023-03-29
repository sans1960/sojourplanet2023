@extends('layouts.admin')

@section('title')
{{ __('Tour-create') }}

@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                   Create Tour
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.tours.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                          <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                          </div>
                          <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slug"  name="slug" >
                          </div>
                           <div class=" mb-3">

                            <label for="countries" class="form-label">Countries</label>
                        <input type="text" name="countries" class="form-control mt-2" id="countries" placeholder="Countries">

                           </div>
                           <div class="row mb-3">
                            <h6>Destinations</h6>
                            @foreach ($destinations as $destination)
                            <div class="col-md-4 mt-2">
                             <div class="form-check">
                                 <input class="form-check-input" name="destinations[]" type="checkbox" value="{{$destination->id}}" id="flexCheckDefault">
                                 <label class="form-check-label" for="flexCheckDefault">
                                   {{$destination->name}}
                                 </label>
                               </div>
                            </div>

                            @endforeach
                           </div>
                           <div class="row mb-3  ">
                                <h6>Types</h6>
                               @foreach ($types as $type)
                               <div class="col-md-4 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" name="types[]" type="checkbox" value="{{$type->id}}" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                      {{$type->name}}
                                    </label>
                                  </div>
                               </div>

                               @endforeach
                           </div>
                           <div class=" row mb-3">
                            <div class="col">

                                <input type="number" class="form-control"  placeholder="Duration" name="duration" >
                            </div>
                            <div class="col">
                                <input type="text" class="form-control"  placeholder="Caption" name="caption" >

                            </div>

                          </div>
                          <div class="row mb-3">
                            <div class="col">
                                <input type="number" step="any" class="form-control"  name="price" placeholder="Price" >

                            </div>

                             <div class="col">
                                <input type="date" class="form-control"  name="date" >

                            </div>

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
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" rows="3"  name="description"></textarea>
                          </div>
                          <div class="mb-3">
                            <label for="conclusion" class="form-label">Conclusion</label>
                            <textarea class="form-control" id="conclusion" rows="3"  name="conclusion"></textarea>
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


@endsection
