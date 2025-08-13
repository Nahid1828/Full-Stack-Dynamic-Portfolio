@extends('admin.layout')

@section('main-content')
    <h1>Projects List</h1>
    <table border="1" cellpadding="10" cellspacing="0" style="width:100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Name</th>
                <th>Description</th>
                <th>Type</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->user->name ?? 'N/A' }}</td>  {{-- relation ব্যাবহার করবে --}}
                <td>{{ $project->name }}</td>
                <td>{{ Str::limit($project->description, 50) }}</td>
                <td>{{ ucfirst($project->type) }}</td>
                <td>{{ ucfirst($project->status) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
