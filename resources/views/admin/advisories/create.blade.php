@extends('layouts.admin')
@section('title')
{{ __('Create Advisory') }}
@endsection
@section('content')
<div class="container">

    <div class="row ">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header bg-dark text-center text-white">
                    Create Advisory
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.advisories.store') }}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <div class="col">
                                <label for="level" class="form-label">Level</label>
                                <input type="number" class="form-control" id="level" placeholder="Level" name="level"
                                    autofocus required min="1" max="4">
                            </div>
                            <div class="col">
                                <label for="legend" class="form-label">Legend</label>
                                <input type="text" class="form-control" id="legend" placeholder="Legend" name="legend"
                                    required>
                            </div>

                        </div>
                        <label class="" for="">Color</label>
                        <div class="form-check form-check-inline ms-5">
                            <input class="form-check-input" type="radio" id="inlineRadio1" value="green" name="color"
                                required>
                            <label class="form-check-label" for="inlineRadio1">Green</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="inlineRadio2" value="blue" name="color">
                            <label class="form-check-label" for="inlineRadio2">Blue</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="inlineRadio3" value="brown" name="color">
                            <label class="form-check-label" for="inlineRadio3">Brown</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="inlineRadio4" value="red" name="color">
                            <label class="form-check-label" for="inlineRadio4">Red</label>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="coment" class="form-label">Coment</label>
                            <textarea class="form-control" id="coment" name="coment" rows="3"></textarea>
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
    CKEDITOR.replace( 'coment' );



</script>
@endsection