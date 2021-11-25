@extends('adminlte::page')

@section('title', 'Administrator')

@section('content_header')
    <div class="container">
        <h1>Create Categories</h1>
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
            <form action="{{ route('admin.tags.edit', $tag) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label>Name Tag</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $tag->name }}">
                    @error('name')
                        <span style="color: red">*{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" value="{{ $tag->slug }}" readonly>
                    @error('name')
                    <span style="color: red">*{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Color Tag</label>
                    <select class="form-control" name="color">
                      <option value="blue">Blue</option>
                      <option value="red">Red</option>
                      <option value="yellow">Yellow</option>
                      <option value="violet">Violet</option>
                      <option value="brown">Brown</option>
                    </select>
                  </div>
                <button type="submit" class="btn btn-success" style="float: right;">Edit</button>
              </form>
              <a href="{{ route('admin.tags.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{ asset('vendor\jQuery-Plugin-stringToSlug-1.3\jquery.stringToSlug.min.js') }}"></script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@stop
