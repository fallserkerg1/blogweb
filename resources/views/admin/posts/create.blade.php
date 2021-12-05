@extends('adminlte::page')

@section('title', 'Administrator')

@section('content_header')
    <h1>New Post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.posts.store','autocomplete' => 'off', 'files' => true]) !!}

                    @include('admin.posts.partials.form')

                {!! Form::submit('Create Post', ['class' => 'btn btn-primary btn-lg btn-block', 'style' => 'float: right;']) !!}
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
