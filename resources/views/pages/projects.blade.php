@extends('layouts.app')

@section('title', 'MREC - Projects')

@section('content')
<!-- Hero Section -->
<section class="pt-32 pb-12 bg-white text-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col items-center justify-between gap-6 text-left sm:flex-row sm:items-end">
            <div>
                <p class="font-poppins text-xs font-semibold uppercase tracking-[0.28em] text-[#D21502]">MREC portfolio</p>
                <h1 class="mt-3 text-4xl font-bold text-[#2D3748] md:text-5xl">Our Projects</h1>
                <p class="mt-4 max-w-2xl text-sm text-gray-500 md:text-base">
                    Take a closer look at the ideas and solutions we've brought to life through our projects.
                </p>
            </div>
            @auth
                <a href="{{ route('projects.create') }}" class="inline-flex shrink-0 items-center gap-2 rounded-xl bg-[#D21502] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#D21502]/20 transition hover:bg-[#b71102]">
                    <i class="fa-solid fa-plus text-xs"></i>
                    Add project
                </a>
            @endauth
        </div>

        <!-- Category Filters -->
        <div class="flex flex-wrap justify-center gap-2 mt-8">
            <a href="{{ route('projects.index') }}"
                class="rounded-full px-5 py-2 text-xs font-semibold {{ $selectedCategory === null ? 'bg-[#2D3748] text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">
                ALL
            </a>
            @foreach ($categories as $category)
                <a href="{{ route('projects.index', ['category' => $category]) }}"
                    class="rounded-full px-5 py-2 text-xs font-semibold uppercase {{ $selectedCategory === $category ? 'bg-[#2D3748] text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">
                    {{ $category }}
                </a>
            @endforeach
        </div>
    </div>
</section>

<!-- Projects Grid -->
<section class="pb-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            @forelse ($projects as $project)
            <article class="bg-white rounded-2xl border border-gray-100 overflow-hidden shadow-sm hover:shadow-lg transition">
                <div class="aspect-video w-full bg-gray-200 relative overflow-hidden">
                    <img src="{{ asset('storage/' . $project->url_image_project) }}" alt="{{ $project->project_name }}" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <span class="text-xs font-bold text-[#D21502] tracking-wider uppercase">{{ $project->category_project }}</span>
                    <h2 class="text-lg font-bold text-gray-900 mt-1 mb-2">
                        {{ $project->project_name }}
                    </h2>
                </div>
            </article>
            @empty
                <div class="col-span-full rounded-2xl border border-dashed border-gray-200 px-6 py-16 text-center">
                    <i class="fa-solid fa-cube text-2xl text-gray-300"></i>
                    <h2 class="mt-4 text-lg font-bold text-[#2D3748]">No projects yet</h2>
                    <p class="mt-2 text-sm text-gray-500">Project yang ditambahkan akan muncul di sini.</p>
                </div>
            @endforelse

        </div>

        @if ($projects->hasPages())
            <nav class="mt-12 flex items-center justify-center gap-2" aria-label="Projects pagination">
                @if ($projects->onFirstPage())
                    <span class="rounded-md bg-gray-100 px-3 py-2 text-xs font-semibold text-gray-400">Previous</span>
                @else
                    <a href="{{ $projects->previousPageUrl() }}" class="rounded-md bg-gray-100 px-3 py-2 text-xs font-semibold text-gray-600 transition hover:bg-gray-200">Previous</a>
                @endif

                @for ($page = 1; $page <= $projects->lastPage(); $page++)
                    @if ($page === $projects->currentPage())
                        <span class="h-8 min-w-8 rounded-md bg-[#2D3748] px-2 py-2 text-center text-xs font-bold text-white" aria-current="page">{{ $page }}</span>
                    @else
                        <a href="{{ $projects->url($page) }}" class="h-8 min-w-8 rounded-md bg-gray-100 px-2 py-2 text-center text-xs font-bold text-gray-600 transition hover:bg-gray-200">{{ $page }}</a>
                    @endif
                @endfor

                @if ($projects->hasMorePages())
                    <a href="{{ $projects->nextPageUrl() }}" class="rounded-md bg-gray-100 px-3 py-2 text-xs font-semibold text-gray-600 transition hover:bg-gray-200">Next</a>
                @else
                    <span class="rounded-md bg-gray-100 px-3 py-2 text-xs font-semibold text-gray-400">Next</span>
                @endif
            </nav>
        @endif

    </div>
</section>
@endsection