@extends('layouts.admin')
@section('title')
    Edit {{ $imagedestination->title }}
@endsection
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header bg-dark text-white text-center">
                        Edit Image Destination
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.imagedestinations.update', $imagedestination) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ $imagedestination->title }}">
                            </div>
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug"
                                    value="{{ $imagedestination->slug }}">
                            </div>
                            <div class="mb-3">
                                <select class="form-select" required name="destination_id"
                                    aria-label=".form-select-lg example">
                                    <option selected>Escoje Destino</option>
                                    @foreach ($destinations as $destination)
                                        <option value="{{ $destination->id }}"
                                            @if ($imagedestination->destination_id == $destination->id) selected @endif>

                                            {{ $destination->name }}</option>
                                    @endforeach


                                </select>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4 mx-auto">
                                    <img id="preview-image-before-upload" class="img-fluid d-block mx-auto"
                                        src="{{ Storage::url($imagedestination->image) }}" alt="">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input class="form-control" type="file" id="image" name="image">
                            </div>
                            <div class="mb-3">
                                <label for="caption" class="form-label">Caption</label>
                                <input type="text" class="form-control" id="caption" name="caption"
                                    value="{{ $imagedestination->caption }}">
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
        $('#title').change(function(e) {
            $.get('{{ route('pages.check_slug_title') }}', {
                    'title': $(this).val()
                },
                function(data) {
                    $('#slug').val(data.slug);
                }
            );
        });
    </script>
    <script>
        $(document).ready(function(e) {
            $('#image').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#preview-image-before-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>
@endsection
