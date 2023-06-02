@extends('layouts.admin')
@section('title')
    Edit {{ $day->name }}
@endsection
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header bg-dark text-white text-center">
                        Edit Post
                    </div>
                    <div class="card-body">

                        <form action="{{ route('admin.days.update', $day) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $day->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug"
                                    value="{{ $day->slug }}">
                            </div>
                            <div class="mb-3">
                                <label for="introduction" class="form-label">Introduction</label>
                                <input type="text" class="form-control" id="introduction" name="introduction"
                                    value="{{ $day->introduction }}">
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <select class="form-select " name="tour_id" id="dest">
                                        <option selected>Choose Tour</option>
                                        @foreach ($tours as $tour)
                                            <option value="{{ $tour->id }}"
                                                @if ($day->tour_id == $tour->id) selected @endif>{{ $tour->name }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col">
                                    <input id="order" class="form-control" type="number" name="order"
                                        value="{{ $day->order }}" />
                                </div>

                            </div>


                            <div class="mb-3">
                                <label for="body" class="form-label">Body</label>
                                <textarea class="form-control" id="body" rows="3" name="body">
                                {!! $day->body !!}
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
        CKEDITOR.replace('body');
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
