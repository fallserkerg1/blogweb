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
            @isset($post->image)
                <img src="{{ Storage::url($post->image->url) }}" id="picture">
            @else
                <img src="https://cdn.pixabay.com/photo/2021/11/11/09/12/lighthouse-6785763__340.jpg" id="picture">
            @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Image') !!}
            {!! Form::file('file', ['class' => 'form-control-file' ]) !!}
        </div>
        <p>Debes cargar una imagen PNG o JPG, en caso de no cargarla, se tomará una imagen por defecto ya seleccionada por el sistema, recuerda cargar la imagen que será la cabecera para tu Post.</p>
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
