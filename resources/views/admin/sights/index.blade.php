@extends('layouts.admin')
@section('title')
{{ __(' Sights') }}

@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">{{ __('All Sights') }}</div>

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
            <a href="{{ route('admin.sights.create')}}" class="btn btn-success mt-5">
             <i class="bi bi-plus-square"></i>
            </a>
         </div>
    </div>

</div>

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
