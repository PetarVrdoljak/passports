@extends('app')

@section('content')

<table class="table table-bordered border-primary">
    <tr class="table-dark">
        <th>Id</th>
        <th>Name</th>
        <th>Surname</th>
        <th>date_of_birth</th>
        <th>gender</th>
        <th>place_id</th>
        <th>passport_id</th>
        <th>Actions</th>
    </tr>

    @foreach($users as $user)
        <tr>
            <td>{{ $user->id}}</td>
            <td>{{ $user->name}}</td>
            <td>{{ $user->surname}}</td>
            <td>{{ $user->date_of_birth}}</td>
            <td>{{ $user->gender}}</td>
            <td>{{ $user->place_id}}</td>
            <td>{{ $user->passport_id}}</td>
            <td>
                <a href="javascript:alert('not implemented yet')" class="btn btn-outline-primary">Edit</a>
                <a class="btn btn-outline-danger" href="{{ route('users.destroy', ['user' => $user->id]) }}">Delete</a>
            </td>
        </tr>
    @endforeach
    <tr></tr>
</table>
@endsection