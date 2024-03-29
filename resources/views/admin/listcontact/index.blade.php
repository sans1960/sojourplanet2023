@extends('layouts.admin')
@section('title')
{{ __('Contactos Lista') }}
@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">{{ __('All Contactos Lista') }}</div>

           

                   
                
            </div>
        </div>
      
    </div>

    
</div> 
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        
                        <th class="">Fecha</th>
                       
                        <th class="">Email</th>
                        <th class="">IP</th>
                        
                       
                        <th  class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($listcontacts as $listcontact)
                       <tr>
                        <td>{{ $listcontact->created_at}}</td>
                      
                        <td>{{ $listcontact->email}}</td>
                        <td>{{ $listcontact->ipadress}}</td>
                     
                      
                        <td>
                            <form action="{{route('contactos.list.destroy',$listcontact->id)}}" method="post">
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