@extends('app')

@section('content')

<table class="table table-bordered border-primary">
    <tr class="table-dark">
        <th>Id</th>
        <th>Name</th>
        <th>Actions</th>
    </tr>

    @foreach($police_administrations as $PoliceAdministration)
        <tr>
            <td>{{ $PoliceAdministration->id}}</td>
            <td>{{ $PoliceAdministration->pa_name}}</td>
            <td>
                <a href="javascript:alert('not implemented yet')" class="btn btn-outline-primary">Edit</a>
                <a class="btn btn-outline-danger" href="{{ route('police_administrations.destroy', ['PoliceAdministration' => $PoliceAdministration->id]) }}">Delete</a>
            </td>
        </tr>
    @endforeach
    <tr></tr>
</table>
@endsection