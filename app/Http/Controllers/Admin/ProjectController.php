<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view('Admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $project = new Project();
        return view('Admin.projects.create', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:40'],
            'status' => ['required', 'boolean'],
            'author' => ['required', 'string', 'min:3', 'max:30'],
            'contributors' => ['required', 'string', 'min:3', 'max:150'],
            'project_start_date' => ['required', 'date'],
            'description' => ['required', 'string', 'min:3', 'max:2000']
        ]);

        $project = Project::create($data);
        return redirect()->route('Admin.projects.show', $project->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project = Project::findOrFail($id);
        return view('Admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        return view('Admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:40'],
            'status' => ['required', 'boolean'],
            'author' => ['required', 'string', 'min:3', 'max:30'],
            'contributors' => ['required', 'string', 'min:3', 'max:150'],
            'project_start_date' => ['required', 'date'],
            'description' => ['required', 'string', 'min:3', 'max:2000']
        ]);

        $project = Project::findOrFail($id);
        $project->update($data);

        return redirect()->route('Admin.projects.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('Admin.projects.index');
    }
}
