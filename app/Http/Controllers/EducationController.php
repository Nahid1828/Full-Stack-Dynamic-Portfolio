<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\User;

class EducationController extends Controller
{
    // List all educations
    public function index()
    {
        $educations = Education::with('user')->get();
        return view('admin.educations', compact('educations'));
    }

    // Show form to add new education
    public function create()
    {
        $users = User::all();
        return view('admin.create_educations', compact('users'));
    }

    // Store new education
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'type' => 'required|string',
            'name' => 'required|string|max:255',
            'institute' => 'required|string|max:255',
            'enrolled_year' => 'required|digits:4|integer',
            'passing_year' => 'required|digits:4|integer',
            'grade' => 'required|string|max:10',
        ]);

        Education::create($request->all());

        return redirect()->route('admin.educations')->with('success', 'Education added successfully!');
    }

    // Delete education
    public function destroy($id)
    {
        $education = Education::findOrFail($id);
        $education->delete();

        return redirect()->route('admin.educations')->with('success', 'Education deleted successfully!');
    }
}
