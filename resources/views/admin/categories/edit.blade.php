@extends('adminlte::page')

@section('title', 'Administrator')

@section('content_header')
    <h1>Edit Category</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{ session('info') }}</strong>
    </div>

@endif

<div class="card">
    <div class="card-body">
        {!! Form::model($category, ['route' => ['admin.categories.update', $category], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name Category') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name Category']) !!}
                @error('name')
                    <span class="text-danger">*{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Name Slug', 'readonly']) !!}
                @error('slug')
                    <span class="text-danger">*{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::submit('Edit Category', ['class' => 'btn btn-success btn-lg', 'style' => 'float: right;']) !!}
            </div>
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('js')

    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>

@endsection


