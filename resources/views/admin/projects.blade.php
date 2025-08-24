@extends('admin.layout')

@section('main-content')
    <h1>Projects List</h1>

    {{-- Add New Project Button --}}
    <div class="actions">
        <a href="{{ route('admin.projects.create') }}" class="btn btn-add">+ Add New Project</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Name</th>
                <th>Description</th>
                <th>Type</th>
                <th>Status</th>
                <th>GitHub URL</th>
                <th>Demo URL</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->user->name ?? 'N/A' }}</td>
                <td>{{ $project->name }}</td>
                <td>{{ Str::limit($project->description, 50) }}</td>
                <td>{{ ucfirst($project->type) }}</td>
                <td>{{ ucfirst($project->status) }}</td>
                <td>
                    @if($project->github_url)
                        <a href="{{ $project->github_url }}" target="_blank">View Repo</a>
                    @else
                        -
                    @endif
                </td>
                <td>
                    @if($project->demo_url)
                        <a href="{{ $project->demo_url }}" target="_blank">Live Demo</a>
                    @else
                        -
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
