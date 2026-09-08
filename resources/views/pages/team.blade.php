@extends('layouts.app')

@section('title', 'MREC - Team')

@section('content')
<!-- Hero Section -->
<section class="pt-32 pb-12 bg-white text-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold text-[#D21502] mb-4">Active Members</h1>
        <p class="text-gray-500 max-w-2xl mx-auto text-sm md:text-base">
            MREC team consists of cross-functional talents including researchers, developers, designers, and engineers.
        </p>
    </div>
</section>

<!-- Members Section -->
<section class="pb-24 bg-gray-50/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">

        <!-- Leader -->
        <div>
            <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                <span class="text-[#D21502]">&rsaquo;</span> Leader
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-2xl shadow-sm text-center border border-gray-100 hover:shadow-md transition">
                    <img src="{{ asset('storage/images/default-avatar.jpg') }}" alt="Director" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                    <h3 class="font-bold text-gray-900 text-sm">Dharma Aryani, S.T., M.T.</h3>
                    <p class="text-xs text-[#D21502] font-semibold mt-1">Director/Leader</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm text-center border border-gray-100 hover:shadow-md transition">
                    <img src="{{ asset('storage/images/default-avatar.jpg') }}" alt="Deputy Leader" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                    <h3 class="font-bold text-gray-900 text-sm">Rafi'i A. M., S.T., M.T.</h3>
                    <p class="text-xs text-[#D21502] font-semibold mt-1">Deputy Leader</p>
                </div>
            </div>
        </div>

        <!-- Project Management -->
        <div>
            <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                <span class="text-[#D21502]">&rsaquo;</span> Project Management
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-2xl shadow-sm text-center border border-gray-100 hover:shadow-md transition">
                    <img src="{{ asset('storage/images/default-avatar.jpg') }}" alt="Project Manager" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                    <h3 class="font-bold text-gray-900 text-sm">A. Bima W.P. A.Md.Kom.</h3>
                    <p class="text-xs text-[#D21502] font-semibold mt-1">PROJECT MANAGER</p>
                </div>
            </div>
        </div>

        <!-- Engineering & Development -->
        <div>
            <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                <span class="text-[#D21502]">&lt;&gt;</span> Engineering & Development
            </h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
                @for ($i = 0; $i < 10; $i++)
                <div class="bg-white p-4 rounded-xl shadow-sm text-center border border-gray-100 hover:shadow-md transition">
                    <img src="{{ asset('storage/images/default-avatar.jpg') }}" alt="Engineer" class="w-20 h-20 rounded-full mx-auto mb-3 object-cover">
                    <h3 class="font-semibold text-gray-800 text-xs line-clamp-1">Developer Name</h3>
                    <p class="text-[10px] text-gray-500 mt-0.5">Software Engineer</p>
                </div>
                @endfor
            </div>
        </div>

        <!-- Design & Generalists -->
        <div>
            <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                <span class="text-[#D21502]">&frasl;</span> Design & Generalists
            </h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
                @for ($i = 0; $i < 10; $i++)
                <div class="bg-white p-4 rounded-xl shadow-sm text-center border border-gray-100 hover:shadow-md transition">
                    <img src="{{ asset('storage/images/default-avatar.jpg') }}" alt="Designer" class="w-20 h-20 rounded-full mx-auto mb-3 object-cover">
                    <h3 class="font-semibold text-gray-800 text-xs line-clamp-1">Designer Name</h3>
                    <p class="text-[10px] text-gray-500 mt-0.5">UI/UX Designer</p>
                </div>
                @endfor
            </div>
        </div>

    </div>
</section>
@endsection