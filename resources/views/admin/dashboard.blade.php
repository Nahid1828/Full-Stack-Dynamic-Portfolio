@extends('admin.layout')

@section('main-content')
    <h1>Dashboard Overview</h1>
    <div class="overview-cards">
        <div class="card">
            <h3>Total Users</h3>
            <p>{{ $totalUsers }}</p>
        </div>
        <div class="card">
            <h3>Total Projects</h3>
            <p>{{ $totalProjects }}</p>
        </div>
    </div>

    {{-- Success message --}}
    @if(session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="update-profile-form">
        <h2>Update Your Profile</h2>
        <form method="POST" action="{{ route('admin.dashboard.updateProfile') }}">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" required>

            <label for="email">Email</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" required>

            <label for="phone">Phone</label>
            <input type="text" name="phone" value="{{ old('phone', $user->phone) }}">

            <label for="student_id">Student ID</label>
            <input type="text" name="student_id" value="{{ old('student_id', $user->student_id) }}">

            <label for="password">Password (leave blank to keep current)</label>
            <input type="password" name="password">

            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation">

            <button type="submit">Update Profile</button>
        </form>
    </div>
@endsection
