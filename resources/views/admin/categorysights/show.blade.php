@extends('layouts.admin')
@section('title')
{{ $categorysight->name }}
@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th class="">ID</th>
                        <th class="">Category Sight</th>



                    </tr>
                </thead>
                <tbody>
                   <tr>
                    <td>{{ $categorysight->id}}</td>
                    <td>{{ $categorysight->name}}</td>

                   </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
