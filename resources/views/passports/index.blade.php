@extends('app')

@section('content')

<table class="table table-bordered border-primary">
    <tr class="table-dark">
        <th>Id</th>
        <th>Model type</th>
        <th>Exparation date</th>
        <th>Issue date</th>
        <th>Police administration id </th>
        <th>Actions<th>
    </tr>

    @foreach($passports as $passport)
        <tr>
            <td>{{ $passport->id}}</td>
            <td>{{ $passport->model_type}}</td>
            <td>{{ $passport->exparation_date}}</td>
            <td>{{ $passport->issue_date}}</td>
            <td>{{ $passport->police_administration_id}}</td>
            <td>
                <a href="javascript:alert('not implemented yet')" class="btn btn-outline-primary">Edit</a>
                <a class="btn btn-outline-danger" href="{{ route('passports.destroy', ['passport' => $passport->id]) }}">Delete</a>
            </td>
        </tr>
    @endforeach
    <tr></tr>
</table>
@endsection