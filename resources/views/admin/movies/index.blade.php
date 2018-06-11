@extends('layouts.web')

@section('title', 'Marvel :: AdminMovies')

@section('slider')
@endsection

@section('content')
<div class="col-md-12">
    <div class="section_heading text-center">
        <h2>List Of Movies</h2>
    </div>

@if(Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Notification:</strong>  {{ Session::get('success') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif
@if(Session::get('warning'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Notification:</strong>  {{ Session::get('warning') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

    @if($movies->count() > 0)
        <table width="100vw" align="center" border="1" cellpadding="2" class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Director</th>
                    <th>Release Date</th>
                    <th>Create</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Director</th>
                    <th>Release Date</th>
                    <th>Create</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </tfoot>
            <tbody>
            @foreach($movies as $movie)
                <tr>
                    <td><a href="{{ route('movies.show', $movie->id) }}" class="btn btn-info">{{ $movie->id }}</a></td>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->descripcion }}</td>
                    <td>{{ $movie->director }}</td>
                    <td>{{ $movie->releaseDate }}</td>
                    <td><a href="{{ route('movies.create') }}" class="btn btn-success">Create</a></td>
                    <td><a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{ route('movies.destroy', $movie->id) }}" class="btn btn-danger"
                        onclick="event.preventDefault();
                        document.getElementById('form-delete-{{$movie->id}}').submit();">Delete</a>
                        <form id="form-delete-{{$movie->id}}" method="post" action="{{ route('movies.destroy', $movie->id) }}">
                            {!! method_field('DELETE') !!}
                            {!! csrf_field() !!}
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h3>Without Results</h3>
    @endif

    <!-- Pagination -->

    <div class="shop_pagination_area wow d-flex justify-content-center mb-4 fadeInUp" data-wow-delay="1.1s">
        <nav aria-label="Page navigation ">
            <ul class="pagination pagination-sm">
                <li class="page-item @if($movies->previousPageUrl() == null) disabled @endif">
                    <a class="page-link" href="{{ $movies->previousPageUrl() }}"> << </a>
                </li>
                <li class="page-item @if($movies->lastPage() == $movies->currentPage()) disabled @endif">
                    <a class="page-link" href="{{ $movies->nextPageUrl() }}"> >> </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
@endsection
