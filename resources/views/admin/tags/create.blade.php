@extends('adminlte::page')

@section('title', 'Administrator')

@section('content_header')
    <h1>Create new Tag</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{ session('info') }}</strong>
    </div>

@endif

<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.tags.store') }}" method="POST">
        @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Name Tag</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Name Tag">
                @error('name')
                    <span class="text-danger">*{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Slug</label>
              <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" readonly>
                @error('slug')
                    <span class="text-danger">*{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Color</label>
              <input type="text" class="form-control" id="color" name="color" placeholder="Color">
                @error('color')
                    <span class="text-danger">*{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary float-right">Create Tag</button>
              </div>
          </form>
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

