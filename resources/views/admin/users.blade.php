@extends('admin.layout')

@push('title')
    Users List
@endpush

@section('main-content')
    <h1>All Users</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Student ID</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone ?? '-' }}</td>
                    <td>{{ $user->student_id ?? '-' }}</td>
                    <td>{{ $user->created_at->format('d M, Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
