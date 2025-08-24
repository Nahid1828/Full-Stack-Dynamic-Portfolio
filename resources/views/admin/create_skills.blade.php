@extends('admin.layout')

@section('title', 'Add New Skill')

@section('main-content')
    <h1>Add New Skill</h1>

    <form action="{{ route('admin.skills.store') }}" method="POST" enctype="multipart/form-data" class="form">
        @csrf

        <label for="user_id">Select User</label>
        <select name="user_id" required>
            <option value="">-- Select User --</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>

        <label for="name">Skill Name</label>
        <input type="text" name="name" required>

        <label for="type">Skill Type</label>
        <select name="type" required>
            <option value="technical">Technical</option>
            <option value="soft">Soft</option>
        </select>

        <label for="level">Skill Level</label>
        <select name="level" required>
            <option value="beginner">Beginner</option>
            <option value="intermediate">Intermediate</option>
            <option value="expert">Expert</option>
        </select>

        <label for="logo">Skill Logo (Optional)</label>
        <input type="file" name="logo">

        <button type="submit" class="btn btn-save">Save Skill</button>
    </form>
@endsection
