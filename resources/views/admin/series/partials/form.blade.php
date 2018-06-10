<div class="form-row">
    <div class="form-group col-md-6 @if($errors->has('name')) is-invalid @endif">
        <label for="title" ><strong>Title</strong></label>
        <input class="form-control" type="text" name="title" id="title" value="{{ $serie->title or old('tilte') }}">
        @if($errors->has('title'))
            <span>{{ $errors->first('title') }}</span>
        @endif
    </div>
    <div class="form-group col-md-6 @if($errors->has('imagen')) is-invalid @endif">
        <label for="title" ><strong>Image</strong></label>
        <input class="form-control" type="text" name="imagen" id="imagen" value="{{ $serie->imagen or old('imagen') }}">
        @if($errors->has('imagen'))
            <span>{{ $errors->first('imagen') }}</span>
        @endif
    </div>
</div>

<div class="form-group @if($errors->has('rating')) is-invalid @endif">
    <label for="name" ><strong>Rating</strong></label>
    <input class="form-control" type="text" name="rating" id="rating" value="{{ $serie->rating or old('rating') }}">
    @if($errors->has('rating'))
        <span>{{ $errors->first('rating') }}</span>
    @endif
</div>

<div class="form-group @if($errors->has('descripcion')) is-invalid @endif">
     <label for="title" ><strong>Descripcion</strong></label>
     <textarea class="form-control" id="descripcion" name="descripcion" rows="3" value="{{ $serie->descripcion or old('descripcion') }}"></textarea>
    @if($errors->has('descripcion'))
        <span>{{ $errors->first('descripcion') }}</span>
    @endif
</div>
