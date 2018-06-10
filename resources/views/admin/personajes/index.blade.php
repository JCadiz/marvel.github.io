@extends('layouts.web')

@section('title', 'Marvel :: AdminCharacters')

@section('slider')
@endsection

@section('content')
<div class="col-md-12">
    <div class="section_heading text-center">
        <h2>List Of Charcaters</h2>
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

    @if($personajes->count() > 0)
        <table width="100vw" align="center" border="1" cellpadding="2" class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Actor</th>
                    <th>Create</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Actor</th>
                    <th>Create</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </tfoot>
            <tbody>
            @foreach($personajes as $personaje)
                <tr>
                    <td><a href="{{ route('personajes.show', $personaje->id) }}" class="btn btn-info">{{ $personaje->id }}</a></td>
                    <td>{{ $personaje->nombre }}</td>
                    <td>{{ $personaje->details }}</td>
                    <td>{{ $personaje->actor }}</td>
                    <td><a href="{{ route('personajes.create') }}" class="btn btn-success">Create</a></td>
                    <td><a href="{{ route('personajes.edit', $personaje->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{ route('personajes.destroy', $personaje->id) }}" class="btn btn-danger"
                        onclick="event.preventDefault();
                        document.getElementById('form-delete-{{$personaje->id}}').submit();">Delete</a>
                        <form id="form-delete-{{$personaje->id}}" method="post" action="{{ route('personajes.destroy', $personaje->id) }}">
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
                <li class="page-item @if($personajes->previousPageUrl() == null) disabled @endif">
                    <a class="page-link" href="{{ $personajes->previousPageUrl() }}"> << </a>
                </li>
                <li class="page-item @if($personajes->lastPage() == $personajes->currentPage()) disabled @endif">
                    <a class="page-link" href="{{ $personajes->nextPageUrl() }}"> >> </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
@endsection
