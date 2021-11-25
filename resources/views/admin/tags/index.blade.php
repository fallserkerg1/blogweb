@extends('adminlte::page')

@section('title', 'Administrator')

@section('content_header')
<div class="container">
    <h1>List Tags</h1>
</div>
@stop

@section('content')
<div class="container-fluid">
    <div class="container">
        <!-- Button trigger modal -->
        <a href="" class="btn btn-primary" style="float: right; margin: 15px;">New Category</a>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col" style="text-align: center">Name</th>
                <th scope="col" style="text-align: center">Slug</th>
                <th scope="col" style="text-align: center">Color</th>
                <th scope="col" style="text-align: center">Actions</th>
                </tr>
            </thead>
            @foreach($dato as $tags)
            <tbody>
                <tr>
                <td style="text-align: center">{{ $tags->name }}</td>
                <td style="text-align: center">{{ $tags->slug }}</td>
                <td style="text-align: center">{{ $tags->color }}</td>
                <td style="text-align: center">
                    <a href="" class="btn btn-success" style="margin: 5px"><i class="fas fa-edit"></i></a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                    </button>
                </td>
                </tr>
            </tbody>
            @endforeach
            </table>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
