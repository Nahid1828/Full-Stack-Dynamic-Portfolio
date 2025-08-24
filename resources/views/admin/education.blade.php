@extends('admin.layout')

@section('main-content')
    <h1>Educations List</h1>
    <a href="{{ route('admin.educations.create') }}" class="btn btn-primary">Add New Education</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Type</th>
                <th>Name</th>
                <th>Institute</th>
                <th>Enrolled Year</th>
                <th>Passing Year</th>
                <th>Grade</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($educations as $edu)
            <tr>
                <td>{{ $edu->id }}</td>
                <td>{{ $edu->user->name ?? 'N/A' }}</td>
                <td>{{ $edu->type }}</td>
                <td>{{ $edu->name }}</td>
                <td>{{ $edu->institute }}</td>
                <td>{{ $edu->enrolled_year }}</td>
                <td>{{ $edu->passing_year }}</td>
                <td>{{ $edu->grade }}</td>
                <td>
                    <form action="{{ route('admin.educations.destroy', $edu->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
