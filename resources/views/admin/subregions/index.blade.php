@extends('layouts.admin')
@section('title')
{{ __('Subregions') }}

@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">{{ __('All Subregions') }}</div>

                @if(Session::has('notif.success'))
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
            <a href="{{ route('admin.subregions.create')}}" class="btn btn-success mt-5">
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

                        <th class="">Nombre</th>
                        <th class="">Destination</th>


                        <th colspan="3" class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subregions as $subregion)
                    <tr>
                     <td>{{ $subregion->name}}</td>
                     <td>{{ $subregion->destination->name}}</td>
                     <td>
                         <a href="{{ route('admin.subregions.show',$subregion)}}" class="btn btn-success btn-sm">
                             <i class="bi bi-eye"></i>
                             </a>
                     </td>
                     <td>
                         <a href="{{ route('admin.subregions.edit',$subregion)}}" class="btn btn-warning btn-sm">
                             <i class="bi bi-pencil-square"></i>
                         </a>
                     </td>
                     <td>
                         <form action="{{ route('admin.subregions.destroy',$subregion)}}" method="post">
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
    <div class="row">
        <div class="col-md-8 mx-auto d-flex justify-content-end">

        </div>
    </div>
</div
@endsection
@section('js')
<script type="text/javascript">
    $('.show_confirm').click(function(event) {
         var form =  $(this).closest("form");
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
