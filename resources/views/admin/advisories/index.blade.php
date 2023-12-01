@extends('layouts.admin')
@section('title')
{{ __('Advisories') }}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">{{ __('All advisories') }}</div>

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
            <a href="{{ route('admin.advisories.create') }}" class="btn btn-success mt-5">
                <i class="bi bi-plus-square"></i>
            </a>
        </div>
    </div>

</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>Level</th>
                        <th>Legend</th>
                        <th>Color</th>


                        <th class="text-center">Acciones</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($advisories as $advisory)
                    <tr>
                        <td>{{$advisory->level}}</td>
                        <td>{{$advisory->legend}}</td>
                        <td>
                            <div style="width: 30px;height:30px;background-color:{{$advisory->color}};">

                            </div>
                        </td>
                        <td>
                            <a href="{{route('admin.advisories.show',$advisory)}}" class="btn btn-success btn-sm">
                                <i class="bi bi-eye"></i>
                            </a>
                        </td>
                        <td>
                            <a href="{{route('admin.advisories.edit',$advisory)}}" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td>
                            <form action="{{route('admin.advisories.destroy',$advisory)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm show_confirm">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </div>



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