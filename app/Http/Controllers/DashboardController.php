<?php
namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers    = User::count();
        $totalProjects = Project::count();
        $user          = Auth::user(); // লগইন করা ইউজার

        return view('admin.dashboard', compact('totalUsers', 'totalProjects', 'user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        // Validate form data
        $request->validate([
            'name'       => 'required|string|max:255',
            'email'      => "required|email|unique:users,email,{$user->id}",
            'phone'      => 'nullable|string|max:20',
            'student_id' => 'nullable|string|max:50',
            'password'   => 'nullable|confirmed|min:6',
        ]);

        // Update user data
        $user->name       = $request->name;
        $user->email      = $request->email;
        $user->phone      = $request->phone;
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

    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit-user', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'email'      => 'required|email|unique:users,email,' . $id,
            'phone'      => 'nullable|string|max:15',
            'student_id' => 'nullable|string|max:20',
        ]);

        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('admin.users')->with('success', 'User updated successfully!');
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.users')->with('success', 'User deleted successfully!');
    }
    public function createProject()
    {
        $users = \App\Models\User::all(); // user select করার জন্য
        return view('admin.projects-create', compact('users'));
    }

    public function storeProject(Request $request)
    {
        $request->validate([
            'user_id'     => 'required|exists:users,id',
            'name'        => 'required|string|max:255',
            'description' => 'required|string',
            'type'        => 'required|in:personal,client,academic',
            'status'      => 'required|in:active,inactive,in-progress',
        ]);

        \App\Models\Project::create([
            'user_id'     => $request->user_id,
            'name'        => $request->name,
            'description' => $request->description,
            'github_url'  => $request->github_url,
            'demo_url'    => $request->demo_url,
            'images'      => json_encode([]),
            'type'        => $request->type,
            'reference'   => $request->reference,
            'tools'       => json_encode([]),
            'keywords'    => json_encode([]),
            'status'      => $request->status,
        ]);

        return redirect()->route('admin.projects')->with('success', 'Project Added Successfully!');
    }
}
