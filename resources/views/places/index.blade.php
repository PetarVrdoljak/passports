@extends('app')

@section('content')

<table class="table table-bordered border-primary">
    <tr class="table-dark">
        <th>ID</th>
        <th>Place</th>
        <th>Municipality ID</th>
        <th>Actions</th>
    </tr>

    @foreach($places as $place)
        <tr>
            <td>{{ $place->id}}</td>
            <td>{{ $place->place_name}}</td>
            <td>{{ $place->municipality->municipality_name}}</td>
            <td>
                <a href="javascript:alert('not implemented yet')" class="btn btn-outline-primary">Edit</a>
                <a class="btn btn-outline-danger" href="{{ route('places.destroy', ['place' => $place->id]) }}">Delete</a>
            </td>
        </tr>
    @endforeach
    <tr></tr>
</table>
@endsection