<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = ['ar/vr', 'game', '3d design', 'web/mobile'];
        $selectedCategory = $request->query('category');

        if (! in_array($selectedCategory, $categories, true)) {
            $selectedCategory = null;
        }

        $projects = Project::query()
            ->when($selectedCategory, fn ($query) => $query->where('category_project', $selectedCategory))
            ->paginate(9)
            ->withQueryString();

        return view('pages.projects', [
            'projects' => $projects,
            'categories' => $categories,
            'selectedCategory' => $selectedCategory,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.project_form', ['project' => null]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'project_name' => ['required', 'string', 'max:255'],
            'url_image_project' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:5120'],
            'category_project' => ['required', 'in:ar/vr,game,web/mobile,3d design'],
        ]);

        $validated['url_image_project'] = $request->file('url_image_project')->store('projects', 'public');

        Project::create($validated);

        return back()->with('success', 'Project berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('pages.admin.project_form', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'project_name' => ['required', 'string', 'max:255'],
            'url_image_project' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:5120'],
            'category_project' => ['required', 'in:ar/vr,game,web/mobile,3d design'],
        ]);

        if ($request->hasFile('url_image_project')) {
            $newImagePath = $request->file('url_image_project')->store('projects', 'public');
            Storage::disk('public')->delete($project->url_image_project);
            $validated['url_image_project'] = $newImagePath;
        } else {
            unset($validated['url_image_project']);
        }

        $project->update($validated);

        return redirect()
            ->route('projects.index')
            ->with('success', 'Project berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()
            ->route('projects.index')
            ->with('success', 'Project berhasil dihapus.');
    }
}
