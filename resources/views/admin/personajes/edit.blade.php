@extends('layouts.web')

@section('slider')
@endsection

@section('content')
<div class="col-md-12">
    <div class="section_heading text-center">
        <h2>Modify Character</h2>
    </div>

    <form action="{{ route('personajes.update', $personaje->id) }}" method="POST">
        {!! method_field('PUT') !!}
        {!! csrf_field() !!} {{-- Token de Seguridad --}}
        @include('admin.personajes.partials.form')
        <button type="submit" class="btn btn-primary my-3">Send</button>
    </form>
</div>
@endsection
