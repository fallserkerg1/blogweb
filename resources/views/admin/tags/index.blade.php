@extends('adminlte::page')

@section('title', 'Administrator')

@section('content_header')
<div class="container">
    <h1>List Tags</h1>
</div>
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

@if(session('info1'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('info1') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

<div class="container-fluid">
    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" style="float: right; margin: 15px;" data-toggle="modal" data-target="#modalForm">
            Create Tag
        </button>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col" style="text-align: center">Name</th>
                <th scope="col" style="text-align: center">Slug</th>
                <th scope="col" style="text-align: center">Color</th>
                <th scope="col" style="text-align: center">Actions</th>
                </tr>
            </thead>
            @foreach($dato as $tags)
            <tbody>
                <tr>
                <td style="text-align: center">{{ $tags->name }}</td>
                <td style="text-align: center">{{ $tags->slug }}</td>
                <td style="text-align: center">{{ $tags->color }}</td>
                <td style="text-align: center">
                    <a href="{{ route('admin.tags.edit', $tags) }}" class="btn btn-success" style="margin: 5px"><i class="fas fa-edit"></i></a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                    </button>
                </td>
                </tr>
            </tbody>
            @endforeach
            </table>
    </div>
</div>

<!-- Modal  form-->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Tag</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('admin.tags.store',) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Name Tag</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name Tag">
                    @error('name')
                        <span style="color: red">*{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Name Slug" readonly>
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
                      <option value="green">Green</option>
                    </select>
                  </div>
                <button type="submit" class="btn btn-primary" style="float: right;">Create</button>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<!-- Modal Delete-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Tag</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this Tag?
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <form action="{{ route('admin.tags.destroy',$tags) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">
                    Delete
                </button>
            </form>
            </div>
        </div>
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
