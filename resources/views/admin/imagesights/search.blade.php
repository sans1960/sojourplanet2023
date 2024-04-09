@extends('layouts.admin')
@section('title')
{{ __(' Search Image Sights') }}

@endsection
@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <form action="" method="post">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Enter Sight ID" name="search"
                        aria-describedby="basic-addon1">

                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-search"></i>
                    </button>


                </div>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>Title Image</th>
                        <th>Title Sight</th>

                        <th>Acciones</th>


                    </tr>
                </thead>
                <tbody>
                    @if (isset($imagesights))
                    @foreach ($imagesights as $imagesight)
                    <tr>

                        <td>{{ $imagesight->title}}</td>
                        <td>{{ $imagesight->sight->title}}</td>

                        <td>
                            <a href="" class="btn btn-success btn-sm">
                                <i class="bi bi-eye"></i>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('admin.imagesights.edit',$imagesight)}}" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td>
                            <form action="" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm show_confirm">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                    @endif


                </tbody>
            </table>


        </div>
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