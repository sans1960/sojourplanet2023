@extends('layouts.admin')
@section('title')
{{ __(' Search Country') }}

@endsection
@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
           <form action="{{route('searchcountry')}}" method="post">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">
                    <i class="bi bi-search"></i>
                </span>
                <input type="text" required class="form-control" placeholder="Enter text" name="search" aria-describedby="basic-addon1">
                
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
            @if (isset($countries))
            @if (count($countries))
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th class="">Subregion</th>
                        <th class="">Destino</th>
                        <th>Acciones</th>


                    </tr>
                </thead>
                <tbody>
                 
                   @foreach ($countries as $country)
                   <tr>
                   <td>{{ $country->id}}</td>
                    <td>{{ $country->name}}</td>
                    <td>{{ $country->subregion->name}}</td>
                    <td>{{ $country->destination->name}}</td>

                    <td>
                        <a href="{{ route('admin.countries.show',$country)}}" class="btn btn-success btn-sm">
                            <i class="bi bi-eye"></i>
                            </a>
                    </td>
                    <td>
                        <a href="{{ route('admin.countries.edit',$country)}}" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('admin.countries.destroy',$country)}}" method="post">
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
            @else
            <h5 class="text-center mt-5">No results for {{$search}}</h5> 
            @endif
            @else
            <h6 class="text-center mt-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-watch text-danger" viewBox="0 0 16 16">
                    <path d="M8.5 5a.5.5 0 0 0-1 0v2.5H6a.5.5 0 0 0 0 1h2a.5.5 0 0 0 .5-.5V5z"/>
                    <path d="M5.667 16C4.747 16 4 15.254 4 14.333v-1.86A5.985 5.985 0 0 1 2 8c0-1.777.772-3.374 2-4.472V1.667C4 .747 4.746 0 5.667 0h4.666C11.253 0 12 .746 12 1.667v1.86a5.99 5.99 0 0 1 1.918 3.48.502.502 0 0 1 .582.493v1a.5.5 0 0 1-.582.493A5.99 5.99 0 0 1 12 12.473v1.86c0 .92-.746 1.667-1.667 1.667H5.667zM13 8A5 5 0 1 0 3 8a5 5 0 0 0 10 0z"/>
                  </svg>
            </h6>
            @endif

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