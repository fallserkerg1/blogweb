@extends('adminlte::page')

@section('title', 'Administrator')

@section('content_header')
    <h1>Edit Post</h1>
@stop

@section('content')

    @if(session('info'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('info') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
