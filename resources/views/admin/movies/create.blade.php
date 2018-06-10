@extends('layouts.web')

@section('slider')
@endsection

@section('content')
<div class="col-md-12">
    <div class="section_heading text-center">
        <h2>Create a Movie</h2>
    </div>

        <form action="{{ route('movies.store') }}" method="POST">
            {!! csrf_field() !!} {{-- Token de Seguridad --}}
            @include('admin.movies.partials.form')
            <button type="submit" class="btn btn-primary my-3">Send</button>
        </form>


</div>
@endsection
