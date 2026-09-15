<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::query()
            ->latest()
            ->paginate(6);

        return view('pages.blog', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.blog_form', ['blog' => null]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'gambar' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:5120'],
            'deskripsi' => ['required', 'string'],
        ]);

        $validated['url'] = $request->file('gambar')->store('blogs', 'public');
        unset($validated['gambar']);

        Blog::create($validated);

        return redirect()
            ->route('blogs.create')
            ->with('success', 'Blog berhasil ditambahkan.');
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
    public function edit(Blog $blog)
    {
        return view('pages.admin.blog_form', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'gambar' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:5120'],
            'deskripsi' => ['required', 'string'],
        ]);

        if ($request->hasFile('gambar')) {
            $newImagePath = $request->file('gambar')->store('blogs', 'public');
            Storage::disk('public')->delete($blog->url);
            $validated['url'] = $newImagePath;
        }

        unset($validated['gambar']);
        $blog->update($validated);

        return redirect()
            ->route('blog')
            ->with('success', 'Blog berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        Storage::disk('public')->delete($blog->url);
        $blog->delete();

        return redirect()
            ->route('blog')
            ->with('success', 'Blog berhasil dihapus.');
    }
}
