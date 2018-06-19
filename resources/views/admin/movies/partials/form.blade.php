<div class="form-row">
    <div class="form-group col-md-6 @if($errors->has('name')) is-invalid @endif">
        <label for="title" ><strong>Title</strong></label>
        <input class="form-control" type="text" name="title" id="title" value="{{ $movie->title or old('title') }}">
        @if($errors->has('title'))
            <span>{{ $errors->first('title') }}</span>
        @endif
    </div>
    <div class="form-group col-md-6 @if($errors->has('imagen')) is-invalid @endif">
        <label for="imagen" ><strong>Image</strong></label>
        <input class="form-control" type="text" name="imagen" id="imagen" value="{{ old('imagen') }}">
        @if($errors->has('imagen'))
            <span>{{ $errors->first('imagen') }}</span>
        @endif
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6 @if($errors->has('director')) is-invalid @endif">
        <label for="name" ><strong>Director</strong></label>
        <input class="form-control" type="text" name="director" id="director" value="{{ $movie->director or old('director') }}">
        @if($errors->has('director'))
            <span>{{ $errors->first('director') }}</span>
        @endif
    </div>
    <div class="form-group col-md-4 @if($errors->has('releaseDate')) is-invalid @endif">
        <label for="name" ><strong>Release Date</strong></label>
        <input class="form-control" type="text" name="releaseDate" id="releaseDate" value="{{ $movie->releaseDate or old('director') }}">
        @if($errors->has('releaseDate'))
            <span>{{ $errors->first('releaseDate') }}</span>
        @endif
    </div>
    <div class="form-group col-md-2 @if($errors->has('rating')) is-invalid @endif">
        <label for="name" ><strong>Rating</strong></label>
        <input class="form-control" type="text" name="rating" id="rating" value="{{ $movie->rating or old('director') }}">
        @if($errors->has('rating'))
            <span>{{ $errors->first('rating') }}</span>
        @endif
</div>
</div>
<div class="form-group @if($errors->has('descripcion')) is-invalid @endif">
     <label for="title" ><strong>Description</strong></label>
     <textarea class="form-control" id="descripcion" name="descripcion" rows="3" value="{{ $movie->descripcion or old('descripcion') }}"></textarea>
    @if($errors->has('descripcion'))
        <span>{{ $errors->first('descripcion') }}</span>
    @endif
</div>


