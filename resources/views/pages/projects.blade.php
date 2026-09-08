@extends('layouts.app')

@section('title', 'MREC - Projects')

@section('content')
<!-- Hero Section -->
<section class="pt-32 pb-12 bg-white text-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold text-[#D21502] mb-4">Our Projects</h1>
        <p class="text-gray-500 max-w-2xl mx-auto text-sm md:text-base">
            Take a closer look at the ideas and solutions we've brought to life through our projects.
        </p>

        <!-- Category Filters -->
        <div class="flex flex-wrap justify-center gap-2 mt-8">
            <button class="px-5 py-2 rounded-full text-xs font-semibold bg-[#2D3748] text-white">ALL</button>
            <button class="px-5 py-2 rounded-full text-xs font-semibold bg-gray-100 text-gray-600 hover:bg-gray-200">AR/VR</button>
            <button class="px-5 py-2 rounded-full text-xs font-semibold bg-gray-100 text-gray-600 hover:bg-gray-200">GAME</button>
            <button class="px-5 py-2 rounded-full text-xs font-semibold bg-gray-100 text-gray-600 hover:bg-gray-200">3D DESIGN</button>
            <button class="px-5 py-2 rounded-full text-xs font-semibold bg-gray-100 text-gray-600 hover:bg-gray-200">WEB/MOBILE</button>
        </div>
    </div>
</section>

<!-- Projects Grid -->
<section class="pb-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            @for ($i = 0; $i < 9; $i++)
            <article class="bg-white rounded-2xl border border-gray-100 overflow-hidden shadow-sm hover:shadow-lg transition">
                <div class="aspect-video w-full bg-gray-200 relative overflow-hidden">
                    <img src="{{ asset('storage/images/project-placeholder.jpg') }}" alt="Project Thumbnail" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <span class="text-xs font-bold text-[#D21502] tracking-wider uppercase">AR/VR</span>
                    <h2 class="text-lg font-bold text-gray-900 mt-1 mb-2">
                        AR Based Indoor Navigation (Geo Navigasi)
                    </h2>
                </div>
            </article>
            @endfor

        </div>

        <!-- Pagination -->
        <div class="flex justify-center items-center gap-2 mt-12">
            <button class="w-8 h-8 rounded-md bg-[#2D3748] text-white text-xs font-bold">1</button>
            <button class="w-8 h-8 rounded-md bg-gray-100 text-gray-600 text-xs font-bold hover:bg-gray-200">2</button>
            <button class="px-3 h-8 rounded-md bg-gray-100 text-gray-600 text-xs font-bold hover:bg-gray-200">Next</button>
        </div>
    </div>
</section>
@endsection