@extends('adminlte::page')

@section('title', 'Administrator')

@section('content_header')
<div>
    <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary btn-lg float-right">Back</a>
    <h1>Edit Post</h1>
    <br>
</div>

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

    <div class="card">
        <div class="card-body">
            {!! Form::model($post, ['route' => ['admin.posts.update', $post],'autocomplete' => 'off', 'files' => true, 'method' => 'put']) !!}

                    @include('admin.posts.partials.form')

                {!! Form::submit('Edit Post', ['class' => 'btn btn-success btn-lg btn-block', 'style' => 'float: right;']) !!}
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
