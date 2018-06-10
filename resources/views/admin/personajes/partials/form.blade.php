<div class="form-row">
    <div class="form-group col-md-6 @if($errors->has('name')) is-invalid @endif">
        <label for="title" ><strong>Name</strong></label>
        <input class="form-control" type="text" name="nombre" id="nombre" value="{{ $personaje->nombre or old('nombre') }}">
        @if($errors->has('nombre'))
            <span>{{ $errors->first('nombre') }}</span>
        @endif
    </div>
    <div class="form-group col-md-6 @if($errors->has('imagen')) is-invalid @endif">
        <label for="title" ><strong>Image</strong></label>
        <input class="form-control" type="text" name="imagen" id="imagen" value="{{ $movie->imagen or old('imagen') }}">
        @if($errors->has('imagen'))
            <span>{{ $errors->first('imagen') }}</span>
        @endif
    </div>
</div>

<div class="form-group @if($errors->has('actor')) is-invalid @endif">
    <label for="name" ><strong>Actor</strong></label>
    <input class="form-control" type="text" name="actor" id="actor" value="{{ $personaje->actor or old('actor') }}">
    @if($errors->has('actor'))
        <span>{{ $errors->first('actor') }}</span>
    @endif
</div>

<div class="form-group @if($errors->has('details')) is-invalid @endif">
     <label for="title" ><strong>Details</strong></label>
     <textarea class="form-control" id="details" name="details" rows="3" value="{{ $personaje->details or old('details') }}"></textarea>
    @if($errors->has('details'))
        <span>{{ $errors->first('details') }}</span>
    @endif
</div>


