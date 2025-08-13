<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalProjects = Project::count();
        $user = Auth::user(); // লগইন করা ইউজার
        
        return view('admin.dashboard', compact('totalUsers', 'totalProjects', 'user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        // Validate form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => "required|email|unique:users,email,{$user->id}",
            'phone' => 'nullable|string|max:20',
            'student_id' => 'nullable|string|max:50',
            'password' => 'nullable|confirmed|min:6', 
        ]);

        // Update user data
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->student_id = $request->student_id;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('admin.dashboard')->with('success', 'Profile updated successfully!');
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function projects()
    {
        $projects = Project::all();
        return view('admin.projects', compact('projects'));
    }

    // অন্য ফাংশন যেমন skills, education, achievements, experiences ইত্যাদি এখানেই যোগ করবে
}
