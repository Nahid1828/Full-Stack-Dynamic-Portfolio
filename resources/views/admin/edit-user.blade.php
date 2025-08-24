@extends('admin.layout')

@section('main-content')
    <h1>Edit User</h1>

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="form">
        @csrf
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}" required>

        <label>Email</label>
        <input type="email" name="email" value="{{ old('email', $user->email) }}" required>

        <label>Phone</label>
        <input type="text" name="phone" value="{{ old('phone', $user->phone) }}">

        <label>Student ID</label>
        <input type="text" name="student_id" value="{{ old('student_id', $user->student_id) }}">

        <button type="submit" class="btn btn-save">Update</button>
    </form>
@endsection
