@extends('admin.layout')

@section('main-content')
    <h1>Add New Project</h1>

    <form action="{{ route('admin.projects.store') }}" method="POST" class="form">
        @csrf

        <label for="user_id">Select User</label>
        <select name="user_id" required>
            <option value="">-- Select User --</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>

        <label for="name">Project Name</label>
        <input type="text" name="name" required>

        <label for="description">Description</label>
        <textarea name="description" rows="4" required></textarea>

        <label for="github_url">Github URL</label>
        <input type="url" name="github_url">

        <label for="demo_url">Demo URL</label>
        <input type="url" name="demo_url">

        <label for="type">Project Type</label>
        <select name="type" required>
            <option value="personal">Personal</option>
            <option value="client">Client</option>
            <option value="academic">Academic</option>
        </select>

        <label for="status">Status</label>
        <select name="status" required>
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
            <option value="in-progress">In Progress</option>
        </select>

        <label for="reference">Reference</label>
        <input type="text" name="reference">

        <button type="submit" class="btn btn-save">Save Project</button>
    </form>
@endsection
