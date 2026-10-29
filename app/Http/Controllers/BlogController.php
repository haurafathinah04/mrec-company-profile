<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::query()->latest()->paginate(6);
        return view('pages.blog', compact('blogs'));
    }

    public function create()
    {
        return view('pages.admin.blog_form', ['blog' => null]);
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'judul' => ['required', 'string', 'max:255'],
        'highlight' => ['required', 'string', 'max:255'],
        'isi' => ['required', 'string'],
        'link' => ['nullable', 'url', 'max:255'],
        'gambar' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:5120'],
    ]);

        // Tambahkan baris ini agar kolom 'deskripsi' di database terisi otomatis dan tidak error
        $validated['deskripsi'] = $validated['highlight']; 

        $validated['url'] = $request->file('gambar')->store('blogs', 'public');
        unset($validated['gambar']);

        Blog::create($validated);

        return redirect()->route('blog')->with('success', 'Blog berhasil ditambahkan.');
    }

    public function show(Blog $blog)
    {
        // Jika ingin menampilkan halaman detail internal (bukan redirect eksternal):
        // return view('pages.blog_detail', compact('blog'));
        
        // Atau tetap redirect ke link jika ada:
        if ($blog->link) {
            return redirect()->away($blog->link);
        }
        
        return view('pages.blog_detail', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('pages.admin.blog_form', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'highlight' => ['required', 'string', 'max:255'],
            'isi' => ['required', 'string'],
            'link' => ['nullable', 'url', 'max:255'],
            'gambar' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:5120'],
        ]);

        if ($request->hasFile('gambar')) {
            $newImagePath = $request->file('gambar')->store('blogs', 'public');
            Storage::disk('public')->delete($blog->url);
            $validated['url'] = $newImagePath;
        }

        unset($validated['gambar']);
        $blog->update($validated);

        return redirect()->route('blog')->with('success', 'Blog berhasil diperbarui.');
    }

    public function destroy(Blog $blog)
    {
        Storage::disk('public')->delete($blog->url);
        $blog->delete();

        return redirect()->route('blog')->with('success', 'Blog berhasil dihapus.');
    }
}