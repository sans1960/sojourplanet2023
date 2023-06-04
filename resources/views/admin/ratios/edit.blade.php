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
                        <form action="{{ route('admin.ratios.update',$ratio) }}" method="post" >
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" value="{{$ratio->name}}" name="name"
                                         required>
                                </div>
                                <div class="col">
                                    <label for="value" class="form-label">Value</label>
                                    <input type="text" class="form-control" id="value" value="{{$ratio->value}}" name="value"
                                         required>
                                </div>
                                <div class="col">
                                    <label for="ratio" class="form-label">Value</label>
                                    <input type="number" class="form-control" id="ratio" value="{{$ratio->ratio}}" name="ratio"
                                         required min="0" max="5">
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


@endsection