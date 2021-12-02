@extends('adminlte::page')

@section('title', 'Administrator')

@section('content_header')
    <h1>New Post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.posts.store','autocomplete' => 'off', 'files' => true]) !!}

                {!! Form::hidden('user_id', auth()->user()->id) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Name Post:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name Post']) !!}
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('slug', 'Slug:') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control','placeholder' => 'Slug', 'readonly']) !!}
                    @error('slug')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('category', 'Category:') !!}
                    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
                    @error('category_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <p class="font-weight-bold">Tags:</p>
                    @foreach($tags as $tag)
                        <label class="mr-2">
                            {!! Form::checkbox('tags[]', $tag->id, null) !!}
                            {{ $tag->name }}
                        </label>
                    @endforeach
                        <br>
                    @error('tags')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <p class="font-weight-bold">Status:</p>
                    <label>
                        {!! Form::radio('status', 1, true) !!}
                        Borrador
                    </label>
                    <label>
                        {!! Form::radio('status', 2) !!}
                        Published
                    </label>
                        <br>
                    @error('status')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <!-- Cargar Imagen -->
                <div class="row mb-3">
                    <div class="col">
                        <div class="image-wrapper">
                            <img src="https://cdn.pixabay.com/photo/2021/11/11/09/12/lighthouse-6785763__340.jpg" id="picture" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            {!! Form::label('file', 'Image') !!}
                            {!! Form::file('file', ['class' => 'form-control-file' ]) !!}
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ipsum possimus architecto adipisci corporis ratione pariatur fugiat voluptatibus eligendi quis.</p>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('extract', 'Extract:') !!}
                    {!! Form::textarea('extract', null, ['class' => 'form-control', 'rows' => '3']) !!}
                    @error('extract')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('body', 'Content Post:') !!}
                    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                    @error('body')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                {!! Form::submit('Create', ['class' => 'btn btn-primary', 'style' => 'float: right;']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%;
        }

        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;

        }
    </style>
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

    //Codigo JS de las imagenes
    document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }

    </script>
@stop
