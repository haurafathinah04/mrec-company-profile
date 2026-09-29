@extends('layouts.app')

@section('title', 'MREC - Our Members')

@php
    $members  = config('members');
    $avatar   = asset('storage/images/default-avatar.jpg');
    $photoUrl = fn ($m) => !empty($m['photo']) ? asset($m['photo']) : $avatar;
@endphp

@section('content')

<!-- HERO -->
<section class="bg-white pt-32 pb-14 text-center">
    <div class="mx-auto max-w-4xl px-6">
        <h1 class="font-sora text-4xl font-bold text-[#D21502] md:text-5xl">Active Members</h1>
        <p class="mx-auto mt-4 max-w-2xl text-sm leading-7 text-slate-500 md:text-base">
            Meet the multidisciplinary team of researchers, developers, and designers
            driving the future of spatial computing and the metaverse at MREC.
        </p>
    </div>
</section>

<section class="bg-slate-50/70 pb-24">
    <div class="mx-auto max-w-[1180px] space-y-16 px-4 sm:px-6 lg:px-8">

        <!-- LEADER -->
        <div>
            <h2 class="mb-2 flex items-center gap-2.5 font-poppins text-xl font-bold text-slate-800">
                <i class="fa-solid fa-circle-dot text-base text-[#D21502]"></i> Leader
            </h2>
            <div class="mb-7 h-px w-40 bg-gradient-to-r from-[#D21502]/50 to-transparent"></div>
            <div class="grid gap-6 sm:grid-cols-2">
                @foreach($members['leaders'] as $m)
                    <div class="rounded-2xl border border-slate-100 bg-white p-8 text-center shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg">
                        <img src="{{ $photoUrl($m) }}" alt="{{ $m['name'] }}" loading="lazy"
                             class="mx-auto mb-4 h-24 w-24 rounded-full object-cover ring-4 ring-slate-100">
                        <h3 class="font-poppins text-sm font-bold text-slate-900">{{ $m['name'] }}</h3>
                        <p class="mt-1 text-xs font-semibold text-[#D21502]">{{ $m['role'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- PROJECT MANAGEMENT -->
        <div>
            <h2 class="mb-2 flex items-center gap-2.5 font-poppins text-xl font-bold text-slate-800">
                <i class="fa-solid fa-clipboard-list text-base text-[#D21502]"></i> Project Management
            </h2>
            <div class="mb-7 h-px w-40 bg-gradient-to-r from-[#D21502]/50 to-transparent"></div>
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($members['project_management'] as $m)
                    <div class="rounded-2xl border border-slate-100 bg-white p-8 text-center shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg">
                        <img src="{{ $photoUrl($m) }}" alt="{{ $m['name'] }}" loading="lazy"
                             class="mx-auto mb-4 h-24 w-24 rounded-full object-cover ring-4 ring-slate-100">
                        <h3 class="font-poppins text-sm font-bold text-slate-900">{{ $m['name'] }}</h3>
                        <p class="mt-1 text-xs font-semibold text-[#D21502]">{{ $m['role'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- LECTURERS -->
        <div>
            <h2 class="mb-2 flex items-center gap-2.5 font-poppins text-xl font-bold text-slate-800">
                <i class="fa-solid fa-chalkboard-user text-base text-[#D21502]"></i> Lecturers
            </h2>
            <div class="mb-7 h-px w-40 bg-gradient-to-r from-[#D21502]/50 to-transparent"></div>
            <div class="grid gap-4 md:grid-cols-2">
                @foreach($members['lecturers'] as $m)
                    <div class="flex items-center gap-4 rounded-xl border border-slate-100 bg-white px-5 py-4 shadow-sm transition hover:border-[#D21502]/30 hover:shadow-md">
                        <img src="{{ $photoUrl($m) }}" alt="{{ $m['name'] }}" loading="lazy"
                             class="h-12 w-12 shrink-0 rounded-full object-cover ring-2 ring-slate-100">
                        <div class="min-w-0">
                            <h3 class="font-poppins text-sm font-semibold leading-snug text-slate-900">{{ $m['name'] }}</h3>
                            <p class="mt-0.5 text-[11px] font-medium leading-snug text-[#D21502]">{{ $m['role'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- DEVELOPMENT & ENGINEERING -->
        <div>
            <h2 class="mb-2 flex items-center gap-2.5 font-poppins text-xl font-bold text-slate-800">
                <i class="fa-solid fa-code text-base text-[#D21502]"></i> Development &amp; Engineering
            </h2>
            <div class="mb-7 h-px w-40 bg-gradient-to-r from-[#D21502]/50 to-transparent"></div>
            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($members['developers'] as $m)
                    <div class="flex items-center gap-4 rounded-xl border border-slate-100 bg-white px-5 py-4 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                        <img src="{{ $photoUrl($m) }}" alt="{{ $m['name'] }}" loading="lazy"
                             class="h-14 w-14 shrink-0 rounded-full object-cover ring-2 ring-slate-100">
                        <div class="min-w-0">
                            <h3 class="font-poppins text-sm font-semibold leading-snug text-slate-900">{{ $m['name'] }}</h3>
                            <p class="mt-0.5 text-[11px] font-semibold text-[#D21502]">{{ $m['role'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- DESIGN & GENERALIST -->
        <div>
            <h2 class="mb-2 flex items-center gap-2.5 font-poppins text-xl font-bold text-slate-800">
                <i class="fa-solid fa-pen-nib text-base text-[#D21502]"></i> Design &amp; Generalist
            </h2>
            <div class="mb-7 h-px w-40 bg-gradient-to-r from-[#D21502]/50 to-transparent"></div>
            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($members['designers'] as $m)
                    <div class="flex items-center gap-4 rounded-xl border border-slate-100 bg-white px-5 py-4 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                        <img src="{{ $photoUrl($m) }}" alt="{{ $m['name'] }}" loading="lazy"
                             class="h-14 w-14 shrink-0 rounded-full object-cover ring-2 ring-slate-100">
                        <div class="min-w-0">
                            <h3 class="font-poppins text-sm font-semibold leading-snug text-slate-900">{{ $m['name'] }}</h3>
                            <p class="mt-0.5 text-[11px] font-semibold text-[#D21502]">{{ $m['role'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- ALUMNI -->
        <div>
            <h2 class="mb-2 flex items-center gap-2.5 font-poppins text-xl font-bold text-slate-800">
                <i class="fa-solid fa-user-graduate text-base text-[#D21502]"></i> Alumni
            </h2>
            <div class="mb-7 h-px w-40 bg-gradient-to-r from-[#D21502]/50 to-transparent"></div>
            <ul class="grid gap-x-8 gap-y-3 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($members['alumni'] as $name)
                    <li class="flex items-start gap-2.5 text-sm font-medium text-slate-700">
                        <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-[#D21502]"></span>
                        <span>{{ $name }}</span>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>
</section>

<!-- MEMBER OF MREC -->
<section class="relative overflow-hidden bg-red-50 py-16">
    <div class="mx-auto grid max-w-[1180px] items-center gap-10 px-6 lg:grid-cols-2 lg:px-8">
        <div>
            <h2 class="font-poppins text-3xl font-bold text-slate-800 sm:text-4xl">Member of MREC?</h2>
            <p class="mt-3 text-slate-600">Scan your ID card here and check your membership status.</p>
            <a href="{{ route('contact.index') }}"
               class="mt-6 inline-flex items-center gap-2 rounded-lg bg-[#D21502] px-6 py-3 font-poppins text-sm font-semibold text-white transition hover:bg-[#AD1203]">
                <i class="fa-solid fa-id-card"></i> Go to website
            </a>
        </div>
        <img src="{{ asset('storage/images/LogoMrecBig.png') }}" alt="MREC member card"
             class="mx-auto w-full max-w-md object-contain" loading="lazy">
    </div>
</section>

@endsection
