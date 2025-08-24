<?php
namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::with('user')->get();
        return view('admin.skills', compact('skills'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.create_skills', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'name'    => 'required|string|max:255',
            'type'    => 'required|in:technical,soft',
            'level'   => 'required|in:beginner,intermediate,expert',
            'logo'    => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Skill::create($data);

        return redirect()->route('admin.skills')->with('success', 'Skill added successfully!');
    }
    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);

        // Logo file delete
        if ($skill->logo && file_exists(storage_path('app/public/' . $skill->logo))) {
            unlink(storage_path('app/public/' . $skill->logo));
        }

        $skill->delete();

        return redirect()->route('admin.skills')->with('success', 'Skill deleted successfully!');
    }

}
