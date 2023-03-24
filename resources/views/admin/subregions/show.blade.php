@extends('layouts.admin')
@section('title')
{{ $subregion->name }}
@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th class="">ID</th>
                        <th class="">Subregion</th>
                        <th class="">Destino</th>


                    </tr>
                </thead>
                <tbody>
                   <tr>
                    <td>{{ $subregion->id}}</td>
                    <td>{{ $subregion->name}}</td>
                    <td>{{ $subregion->destination->name}}</td>
                   </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
