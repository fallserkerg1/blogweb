@extends('adminlte::page')

@section('title', 'Administrator')

@section('content_header')
    <h1>Edit Tags</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{ session('info') }}</strong>
    </div>

@endif
    <div class="card">
    <div class="card-body">
        <form action="{{ route('admin.tags.update', $tags) }}" method="POST">
        @csrf
        @method('put')
            <div class="form-group">
              <label for="exampleFormControlInput1">Name Tag</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ $tags->name }}">
                @error('name')
                    <span class="text-danger">*{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Slug</label>
              <input type="text" class="form-control" id="slug" name="slug" value="{{ $tags->slug }}" readonly>
                @error('slug')
                    <span class="text-danger">*{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Color</label>
              <input type="text" class="form-control" id="color" name="color" value="{{ $tags->color }}">
                @error('color')
                    <span class="text-danger">*{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success float-right">Edit Tag</button>
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

