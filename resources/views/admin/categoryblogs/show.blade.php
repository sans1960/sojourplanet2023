@extends('layouts.admin')
@section('title')
{{ $categoryblog->name }}
@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th class="">ID</th>
                        <th class="">Category Blog</th>



                    </tr>
                </thead>
                <tbody>
                   <tr>
                    <td>{{ $categoryblog->id}}</td>
                    <td>{{ $categoryblog->name}}</td>

                   </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
