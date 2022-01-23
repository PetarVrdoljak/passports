@extends('app')

@section('content')

<table class="table table-bordered border-primary">
    <tr class="table-dark">
        <th>Id</th>
        <th>County name</th>
        <th>Actions</th>
    </tr>

    @foreach($counties as $county)
        <tr>
            <td>{{ $county->id}}</td>
            <td>{{ $county->county_name}}</td>
            <td>
                <a href="javascript:alert('not implemented yet')" class="btn btn-outline-primary">Edit</a>
                <a class="btn btn-outline-danger" href="{{ route('counties.destroy', ['county' => $county->id]) }}">Delete</a>
            </td>
        </tr>
    @endforeach
    <tr></tr>
</table>
@endsection
