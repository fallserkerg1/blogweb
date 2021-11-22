@extends('adminlte::page')

@section('title', 'Administrator')

@section('content_header')
<div class="container">
    <a class="btn btn-primary btn-lg" style="float: right" href="{{ route('admin.tags.create') }}">Create Category</a>
    <h1>List Tags</h1>
    <br>
</div>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{ session('info') }}</strong>
    </div>

@endif

<div class="container-fluid">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <table class="table table.striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Color</th>
                            <th colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dato as $tags)
                        <tr>
                            <td>{{ $tags->name }}</td>
                            <td>{{ $tags->slug }}</td>
                            <td>{{ $tags->color }}</td>
                            <td>
                                <a href="{{ route('admin.tags.edit', $tags)}}" class="btn btn-success btn-lg"><i class="fas fa-edit"></i></a>
                            </td>
                            <td>
                                <form action="{{ route('admin.tags.delete', $tags)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-lg"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

