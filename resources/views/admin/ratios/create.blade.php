@extends('layouts.admin')
@section('title')
    {{ __('Create Ratio') }}
@endsection
@section('content')
    <div class="container">
        @if ($errors->has('name'))
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif
        <div class="row ">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header bg-dark text-center text-white">
                        Create Ratio
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.ratios.store') }}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Name" name="name"
                                        autofocus required>
                                </div>
                                <div class="col">
                                    <label for="value" class="form-label">Value</label>
                                    <input type="text" class="form-control" id="value" placeholder="Value" name="value"
                                         required>
                                </div>
                                <div class="col">
                                    <label for="ratio" class="form-label">Value</label>
                                    <input type="number" class="form-control" id="ratio" placeholder="Ratio" name="ratio"
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