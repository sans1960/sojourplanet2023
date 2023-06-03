@extends('layouts.admin')
@section('title')
    {{ __('Edit Ratio') }}
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
                        Edit Ratio
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.ratios.update',$ratio) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" value="{{$ratio->name}}" name="name"
                                     required>
                            </div>
                            <div class="mb-3">
                                <label for="value" class="form-label">Value</label>
                                <input type="text" class="form-control" id="value" value="{{$ratio->value}}" name="value"
                                     required>
                            </div>
                      
                            <div class="row mb-3">
                                <div class="col-sm-8">
                                    <label for="formFile" class="form-label">Icon</label>
                                    <input class="form-control" name="icon" type="file" id="formFile">
                                </div>
                                <div class="col-sm-4">
                                    <img id="preview-image-before-upload" class="img-fluid d-block mx-auto"
                                        src="{{ Storage::url($ratio->icon) }}" alt="">
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
     
        });
    </script>

@endsection