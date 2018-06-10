<div class="form-row">
    <div class="form-group col-md-6 @if($errors->has('producto')) is-invalid @endif">
        <label for="producto" ><strong>Producto</strong></label>
        <input class="form-control" type="text" name="producto" id="producto" value="{{ $prueba->producto or old('producto') }}">
        @if($errors->has('producto'))
            <span>{{ $errors->first('producto') }}</span>
        @endif
    </div>
    <div class="form-group col-md-4 @if($errors->has('imagen')) is-invalid @endif">
        <label for="imagen" ><strong>Image</strong></label>
        <input class="form-control" type="text" name="imagen" id="imagen" value="{{ $prueba->imagen or old('imagen') }}">
        @if($errors->has('imagen'))
            <span>{{ $errors->first('imagen') }}</span>
        @endif
    </div>
    <div class="form-group col-md-2 @if($errors->has('precio')) is-invalid @endif">
        <label for="precio" ><strong>Price</strong></label>
        <input class="form-control" type="text" name="precio" id="precio" value="{{ $prueba->precio or old('precio') }}">
        @if($errors->has('precio'))
            <span>{{ $errors->first('precio') }}</span>
        @endif
</div>
</div>
<div class="form-group @if($errors->has('descripcion')) is-invalid @endif">
     <label for="descripcion" ><strong>Description</strong></label>
     <textarea class="form-control" id="descripcion" name="descripcion" rows="3" value="{{ $prueba->descripcion or old('descripcion') }}"></textarea>
    @if($errors->has('descripcion'))
        <span>{{ $errors->first('descripcion') }}</span>
    @endif
</div>
