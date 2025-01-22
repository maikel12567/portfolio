<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Tag;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tags' => 'required|array',
            'tags.*' => 'exists:tags,id',
        ]);
    
        $project = new Project();
        $project->title = $validated['title'];
        $project->description = $validated['description'];
    
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('projects', 'public');
            $project->image_path = $path;
        }
    
        $project->save();
        $project->tags()->sync($validated['tags']);
    
        return redirect()->route('projects.index')->with('success', 'Project created successfully!');
    }

    public function edit(Project $project)
    {
        $tags = Tag::all();
        return view('admin.projects.edit', compact('project', 'tags'));
    }

    public function create()
    {
        $tags = Tag::all();
        return view('admin.projects.create', compact('tags'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tags' => 'required|array',
            'tags.*' => 'exists:tags,id',
        ]);
    
        $project->title = $validated['title'];
        $project->description = $validated['description'];
    
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('projects', 'public');
            $project->image_path = $path;
        }
    
        $project->save();
        $project->tags()->sync($validated['tags']); // Update tags
    
        return redirect()->route('projects.index')->with('success', 'Project updated successfully!');
    }

    public function destroy(Request $request, Project $project)
    {
        $request->validate([
            'project_name_confirmation' => ['required', 'string', 'in:' . $project->title],
        ]);
    
        $project->delete();
    
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully!');
    }
    
}
