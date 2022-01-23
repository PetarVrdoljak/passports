@extends('app')

@section('content')

<table class="table table-bordered border-primary">
    <tr class="table-dark">
        <th>Id</th>
        <th>Municipality name</th>
        <th>County</th>
        <th>Actions</th>
    </tr>

    @foreach($municipalities as $municipality)
        <tr>
            <td>{{ $municipality->id}}</td>
            <td>{{ $municipality->municipality_name}}</td>
            <td>{{ $municipality->county->county_name}}</td>
            <td>
                <a href="javascript:alert('not implemented yet')" class="btn btn-outline-primary">Edit</a>
                <a class="btn btn-outline-danger" href="{{ route('municipalities.destroy', ['municipality' => $municipality->id]) }}">Delete</a>
            </td>
        </tr>
    @endforeach
    <tr></tr>
</table>
@endsection