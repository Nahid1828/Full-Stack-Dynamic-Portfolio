@extends('admin.layout')

@section('title', 'Admin - Skills')

@section('main-content')
    <h1>Skills List</h1>

    <a href="{{ route('admin.skills.create') }}" class="btn btn-add">Add New Skill</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Name</th>
                <th>Type</th>
                <th>Level</th>
                <th>Logo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($skills as $skill)
                <tr>
                    <td>{{ $skill->id }}</td>
                    <td>{{ $skill->user->name ?? 'N/A' }}</td>
                    <td>{{ $skill->name }}</td>
                    <td>{{ ucfirst($skill->type) }}</td>
                    <td>{{ ucfirst($skill->level) }}</td>
                    <td>
                        @if ($skill->logo)
                            <img src="{{ asset('storage/' . $skill->logo) }}" alt="Logo" class="skill-logo">
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('admin.skills.destroy', $skill->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this skill?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
@endsection
