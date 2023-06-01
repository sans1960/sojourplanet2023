@extends('layouts.admin')
@section('title')
    {{ __('Create Type') }}
@endsection
@section('content')
    <div class="container">
        @if ($errors->has('name'))
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif
        <div class="row ">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header bg-dark text-center text-white">
                        Create Type
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.types.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Name" name="name"
                                    autofocus required>
                            </div>
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug">
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-8">
                                    <label for="formFile" class="form-label">Icon</label>
                                    <input class="form-control" name="icon" type="file" id="formFile">
                                </div>
                                <div class="col-sm-4">
                                    <img id="preview-image-before-upload" class="img-fluid d-block mx-auto"
                                        src="{{ asset('img/emoji.png') }}" alt="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-8">
                                    <label for="formFile2" class="form-label">Ratio</label>
                                    <input class="form-control" name="ratio" type="file" id="formFile2">
                                </div>
                                <div class="col-sm-4">
                                    <img id="preview-image-before-upload2" class="img-fluid d-block mx-auto"
                                        src="{{ asset('img/emoji.png') }}" alt="">
                                </div>
                            </div>

                            <div class="mb-3 d-flex justify-content-center">
                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-check-circle"></i>
                                </button>
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
        $(document).ready(function(e) {
            $('#formFile').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#preview-image-before-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
            $('#formFile2').change(function() {
                let readero = new FileReader();
                readero.onload = (e) => {
                    $('#preview-image-before-upload2').attr('src', e.target.result);
                }
                readero.readAsDataURL(this.files[0]);
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
