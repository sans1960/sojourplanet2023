@extends('layouts.admin')
@section('title')
    Edit {{ $blog->name }}
@endsection
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header bg-dark text-white text-center">
                        Edit Blog
                    </div>
                    <div class="card-body">

                        <form action="{{ route('admin.blogs.update', $blog) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $blog->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug"
                                    value="{{ $blog->slug }}">
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <select class="form-select " name="category_blog_id">
                                        <option selected>Choose Category Blog</option>
                                        @foreach ($categoryblogs as $categoryblog)
                                            <option value="{{ $categoryblog->id }}"
                                                @if ($blog->category_blog_id == $categoryblog->id) selected @endif>{{ $categoryblog->name }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col">
                                    <input id="" class="form-control" value="{{ $blog->date }}" type="date"
                                        name="date" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4 mx-auto">
                                    <img id="preview-image-before-upload" class="img-fluid d-block mx-auto"
                                        src="{{ Storage::url($blog->image) }}" alt="">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input class="form-control" type="file" id="image" name="image">
                            </div>
                            <div class="mb-3">
                                <label for="caption" class="form-label">Caption</label>
                                <input type="text" class="form-control" id="caption" name="caption"
                                    value="{{ $blog->caption }}">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" rows="3" name="description">
                                {!! $blog->description !!}
                            </textarea>
                            </div>

                            <div class="mb-3">
                                <label for="conclusion" class="form-label">Conclusion</label>
                                <textarea class="form-control" id="conclusion" rows="3" name="conclusion">
                                {!! $blog->conclusion !!}
                            </textarea>
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

    </div>
@endsection
@section('js')
    <script>
        CKEDITOR.replace('description');
        CKEDITOR.replace('conclusion');
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
    <script>
        $('#name').change(function(e) {
            $.get('{{ route('pages.check_slug') }}', {
                    'name': $(this).val()
                },
                function(data) {
                    $('#slug').val(data.slug);
                }
            );
        });
    </script>
@endsection
