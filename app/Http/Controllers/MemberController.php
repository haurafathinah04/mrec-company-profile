<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    /**
     * Tampilkan halaman publik Our Members
     */
    public function showTeam()
    {
        $leaders          = Member::where('category', 'leader')->get();
        $projectManagers  = Member::where('category', 'project_manager')->get();
        
        $lecturers        = Member::where('category', 'lecturer')->get()->map(function($m) {
                                $m->department = $m->role;
                                return $m;
                            });

        $developers       = Member::where('category', 'developer')->get();
        $designers        = Member::where('category', 'designer')->get();
        $alumnis          = Member::where('category', 'alumni')->get();

        return view('pages.team', compact(
            'leaders',
            'projectManagers',
            'lecturers',
            'developers',
            'designers',
            'alumnis'
        ));
    }

    /**
     * Tampilkan halaman admin kelola member
     */
    public function index()
    {
        $members = Member::latest()->get();
        return view('pages.admin.members.index', compact('members'));
    }

    /**
     * Form Tambah
     */
    public function create()
    {
        return view('pages.admin.members.create');
    }

    /**
     * Simpan Data Baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string',
            'name'     => 'required|string|max:255',
            'role'     => 'nullable|string|max:255',
            'image'    => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image') && $request->category !== 'alumni') {
            $imagePath = $request->file('image')->store('members', 'public');
        }

        Member::create([
            'name'     => $request->name,
            'category' => $request->category,
            'role'     => $request->category === 'alumni' ? null : $request->role,
            'image'    => $imagePath,
        ]);

        return redirect()->route('our-members')->with('success', 'Member berhasil ditambahkan!');
    }

    /**
     * Form Edit
     */
    public function edit($id)
    {
        $member = Member::findOrFail($id);
        return view('pages.admin.members.edit', compact('member'));
    }

    /**
     * Update Data
     */
    public function update(Request $request, $id)
    {
        $member = Member::findOrFail($id);

        $request->validate([
            'category' => 'required|string',
            'name'     => 'required|string|max:255',
            'role'     => 'nullable|string|max:255',
            'image'    => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $imagePath = $member->image;
        if ($request->hasFile('image') && $request->category !== 'alumni') {
            if ($member->image) {
                Storage::disk('public')->delete($member->image);
            }
            $imagePath = $request->file('image')->store('members', 'public');
        }

        $member->update([
            'name'     => $request->name,
            'category' => $request->category,
            'role'     => $request->category === 'alumni' ? null : $request->role,
            'image'    => $request->category === 'alumni' ? null : $imagePath,
        ]);

        return redirect()->route('our-members')->with('success', 'Member berhasil diperbarui!');
    }

    /**
     * Hapus Data (Mendukung AJAX JSON & Direct Redirect)
     */
    public function destroy(Request $request, $id)
    {
        $member = Member::findOrFail($id);
        
        if ($member->image) {
            Storage::disk('public')->delete($member->image);
        }
        
        $member->delete();

        // Jika request dipanggil via AJAX (Fetch)
        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'status'  => 'success',
                'message' => 'Member ' . $member->name . ' berhasil dihapus!'
            ], 200);
        }

        return redirect()->route('admin.members.index')->with('success', 'Member berhasil dihapus!');
    }

    /**
     * Pindahkan member ke Alumni (AJAX)
     */
    public function moveToAlumni(Request $request, $id)
    {
        $member = Member::findOrFail($id);

        if ($member->image) {
            Storage::disk('public')->delete($member->image);
        }

        $member->update([
            'category' => 'alumni',
            'role'     => null,
            'image'    => null,
        ]);

        return response()->json([
            'status'  => 'success',
            'message' => 'Member ' . $member->name . ' berhasil dipindahkan ke Alumni!'
        ], 200);
    }
}