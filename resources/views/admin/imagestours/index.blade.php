@extends('layouts.admin')
@section('title')
    {{ __('Images Tours') }}
@endsection
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">{{ __('All Images Tours') }}</div>

                    @if (Session::has('notif.success'))
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <strong>{{ Session::get('notif.success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif



                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12 d-flex justify-content-end">
                <a href="{{ route('admin.imagestours.create') }}" class="btn btn-success mt-5">
                    <i class="bi bi-plus-square"></i>
                </a>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row">
            @foreach ($imagestours as $imagestour)
                <div class="col-md-3 mt-3">
                    <div class="card">
                        <img src="{{ Storage::url($imagestour->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $imagestour->title }}</h5>
                            <div class="d-flex flex-row justify-content-around align.items-center">
                                <a href="{{ route('admin.imagestours.show', $imagestour) }}" class="btn btn-success btn-sm">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('admin.imagestours.edit', $imagestour) }}" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="{{ route('admin.imagestours.destroy', $imagestour) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm show_confirm">
                                        <i class="bi bi-trash3"></i>
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {!! $imagestours->links() !!}

    </div>
@endsection
@section('js')
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete this record?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
@endsection
