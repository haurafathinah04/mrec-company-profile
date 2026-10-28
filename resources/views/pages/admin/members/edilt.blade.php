@extends('layouts.app')

@section('title', 'Edit Member - MREC')

@section('content')
<div class="min-h-screen bg-[#FBFBFC] pt-28 pb-16">
    <div class="max-w-2xl mx-auto px-6">
        
        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-8">
            <div class="mb-8 border-b border-gray-100 pb-4">
                <h1 class="font-poppins font-semibold text-2xl text-gray-900">Edit Member</h1>
                <p class="font-hanken text-sm text-gray-500 mt-1">Perbarui data anggota tim MREC.</p>
            </div>

            <form action="{{ route('admin.members.update', $member->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- Kategori -->
                <div>
                    <label for="category" class="block font-poppins font-medium text-sm text-gray-700 mb-2">
                        Kategori <span class="text-[#D21502]">*</span>
                    </label>
                    <select name="category" id="category" required 
                            class="w-full h-11 px-4 rounded-xl border border-gray-300 focus:border-[#D21502] focus:ring-1 focus:ring-[#D21502] font-hanken text-gray-800 transition-all outline-none bg-white">
                        <option value="leader" {{ $member->category === 'leader' ? 'selected' : '' }}>Leader</option>
                        <option value="project_manager" {{ $member->category === 'project_manager' ? 'selected' : '' }}>Project Management</option>
                        <option value="lecturer" {{ $member->category === 'lecturer' ? 'selected' : '' }}>Lecturers</option>
                        <option value="developer" {{ $member->category === 'developer' ? 'selected' : '' }}>Development & Engineering</option>
                        <option value="designer" {{ $member->category === 'designer' ? 'selected' : '' }}>Design & Generalist</option>
                        <option value="alumni" {{ $member->category === 'alumni' ? 'selected' : '' }}>Alumni</option>
                    </select>
                </div>

                <!-- Nama Lengkap -->
                <div>
                    <label for="name" class="block font-poppins font-medium text-sm text-gray-700 mb-2">
                        Nama Lengkap <span class="text-[#D21502]">*</span>
                    </label>
                    <input type="text" name="name" id="name" value="{{ old('name', $member->name) }}" required
                           class="w-full h-11 px-4 rounded-xl border border-gray-300 focus:border-[#D21502] focus:ring-1 focus:ring-[#D21502] font-hanken text-gray-800 transition-all outline-none">
                </div>

                <!-- Role / Title -->
                <div id="role-field" class="{{ $member->category === 'alumni' ? 'hidden' : '' }}">
                    <label for="role" id="role-label" class="block font-poppins font-medium text-sm text-gray-700 mb-2">
                        Role / Title <span class="text-[#D21502]">*</span>
                    </label>
                    <input type="text" name="role" id="role" value="{{ old('role', $member->role) }}"
                           class="w-full h-11 px-4 rounded-xl border border-gray-300 focus:border-[#D21502] focus:ring-1 focus:ring-[#D21502] font-hanken text-gray-800 transition-all outline-none">
                </div>

                <!-- Foto Profil -->
                <div id="image-field" class="{{ $member->category === 'alumni' ? 'hidden' : '' }}">
                    <label for="image" class="block font-poppins font-medium text-sm text-gray-700 mb-2">
                        Foto Profil (Opsional)
                    </label>
                    @if($member->image)
                        <div class="mb-3 flex items-center gap-3">
                            <img src="{{ asset('storage/' . $member->image) }}" class="w-12 h-12 rounded-full object-cover border">
                            <span class="text-xs text-gray-500">Foto saat ini</span>
                        </div>
                    @endif
                    <input type="file" name="image" id="image" accept="image/*"
                           class="w-full text-sm text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-poppins file:font-semibold file:bg-[#FFF5F5] file:text-[#D21502] hover:file:bg-[#fee2e2] cursor-pointer transition-all border border-gray-300 rounded-xl p-1">
                </div>

                <div class="flex items-center justify-end gap-3 pt-4 border-t border-gray-100">
                    <a href="{{ route('admin.members.index') }}" 
                       class="px-5 h-11 inline-flex items-center justify-center font-poppins font-medium text-sm text-gray-600 bg-gray-100 hover:bg-gray-200 rounded-xl transition-all">
                        Batal
                    </a>
                    <button type="submit" 
                            class="px-6 h-11 inline-flex items-center justify-center font-poppins font-semibold text-sm text-white bg-[#D21502] hover:bg-[#b01101] rounded-xl shadow-sm transition-all">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const categorySelect = document.getElementById('category');
        const roleField = document.getElementById('role-field');
        const imageField = document.getElementById('image-field');
        const roleInput = document.getElementById('role');

        categorySelect.addEventListener('change', function () {
            if (this.value === 'alumni') {
                roleField.classList.add('hidden');
                imageField.classList.add('hidden');
                roleInput.removeAttribute('required');
            } else {
                roleField.classList.remove('hidden');
                imageField.classList.remove('hidden');
                roleInput.setAttribute('required', 'required');
            }
        });
    });
</script>
@endsection