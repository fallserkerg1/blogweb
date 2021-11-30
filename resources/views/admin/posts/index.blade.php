@extends('adminlte::page')

@section('title', 'Administrator')

@section('content_header')
    <h1>List Post</h1>
@stop

@section('content')
    @livewire('admin.post-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
