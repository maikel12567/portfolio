<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Tag;

class HomeController extends Controller
{
   public function index(Request $request)
{
    $tags = Tag::all(); 
    $projectsQuery = Project::query();

    if ($request->has('search') && $request->search != '') {
        $projectsQuery->where('title', 'like', '%' . $request->search . '%');
    }

    if ($request->has('tag') && $request->tag != '') {
        $projectsQuery->whereHas('tags', function ($query) use ($request) {
            $query->where('tags.id', $request->tag);
        });
    }

    $projects = $projectsQuery->get();

    return view('index', compact('projects', 'tags'));
}

}
