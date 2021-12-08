@extends('adminlte::page')

@section('title', 'Administrator')

@section('content_header')
    <h1>Admin Users</h1>
    <br>
@stop

@section('content')

    @if(session('info'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('info') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @livewire('admin.users-index')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
