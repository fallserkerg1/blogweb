@extends('adminlte::page')

@section('title', 'Administrator')

@section('content_header')
    <div class="container">
        <a href="{{ route('admin.posts.create') }}" class="btn btn-primary" style="float: right;">New Post</a>
    </div>
    <h1>List Post</h1>
    <br>
@stop

@section('content')

    <div class="container">
        @if(session('info'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('info') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @livewire('admin.post-index')
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
