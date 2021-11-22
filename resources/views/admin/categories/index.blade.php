@extends('adminlte::page')

@section('title', 'Administrator')

@section('content_header')
    <div class="container">
        <a class="btn btn-primary btn-lg" style="float: right" href="{{ route('admin.categories.create') }}">Create Category</a>
        <h1>List Categories</h1>
        <br>
    </div>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-danger">
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
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>
                                    <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-success btn-lg"><i class="fas fa-edit"></i></a>
                                </td>
                                <td>
                                    <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
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

