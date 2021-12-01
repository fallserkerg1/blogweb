@extends('adminlte::page')

@section('title', 'Administrator')

@section('content_header')
    <h1>New Post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.posts.store','autocomplete' => 'off']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name Post:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name Post']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('slug', 'Slug:') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control','placeholder' => 'Slug', 'readonly']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('category', 'Category:') !!}
                    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    <p class="font-weight-bold">Tags:</p>
                    @foreach($tags as $tag)
                        <label class="mr-2">
                            {!! Form::checkbox('tags[]', $tag->id, null) !!}
                            {{ $tag->name }}
                        </label>
                    @endforeach
                </div>
                <div class="form-group">
                    {!! Form::label('extract', 'Extract:') !!}
                    {!! Form::textarea('extract', null, ['class' => 'form-control', 'rows' => '4']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('body', 'Content Post:') !!}
                    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('Create', ['class' => 'btn btn-primary', 'style' => 'float: right;']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{ asset('vendor\jQuery-Plugin-stringToSlug-1.3\jquery.stringToSlug.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor\ckeditor\ckeditor.js')}}"></script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
    <script>

    CKEDITOR.config.height = 400;
    CKEDITOR.config.width = 'auto';

    CKEDITOR.replace('body');

    </script>
@stop
