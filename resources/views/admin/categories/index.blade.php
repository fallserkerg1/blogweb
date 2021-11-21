@extends('adminlte::page')

@section('title', 'Administrator')

@section('content_header')
    <h1>List Categories</h1>
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
                                <th>ID</th>
                                <th>Name</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
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
                    <div style="float: right" class="card-footer">
                        <a class="btn btn-primary btn-lg" href="{{ route('admin.categories.create') }}">Create</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

