@extends('layouts.app')

@section('title', 'About MREC')

@section('content')
<section class="relative overflow-hidden bg-slate-50 pt-24">
    <div class="absolute inset-0 opacity-30" style="background-image:linear-gradient(#dce1e7 1px,transparent 1px),linear-gradient(90deg,#dce1e7 1px,transparent 1px);background-size:48px 48px"></div>
    <div class="relative mx-auto grid min-h-[590px] max-w-[1280px] items-center gap-12 px-6 py-20 lg:grid-cols-2 lg:px-12">
        <div>
            <p class="mb-4 font-poppins text-sm font-semibold uppercase text-[#D21502]">About Us</p>
            <h1 class="mb-6 font-sora text-5xl font-bold text-slate-950 sm:text-6xl">MREC</h1>
            <p class="max-w-xl text-base leading-7 text-slate-600">Metaverse Research and Experience Center (MREC) at Telkom University is a leading global hub dedicated to advancing innovation, research, and experiential learning in immersive technologies.</p>
            <a href="{{ url('/projects') }}" class="mt-8 inline-flex rounded-full bg-[#D21502] px-7 py-3 font-poppins text-sm font-semibold text-white transition hover:bg-[#AD1203]">Explore Our Projects</a>
        </div>
        <figure class="mx-auto w-full max-w-[560px] overflow-hidden rounded-2xl bg-white shadow-2xl shadow-slate-400/30">
            <img src="{{ asset('storage/images/HeroAbout.jpg') }}"
                 alt="Metaverse Research and Experience Center"
                 width="1809" height="1719" decoding="async"
                 class="aspect-[4/3] w-full object-cover object-center" style="image-rendering:auto">
        </figure>
    </div>
</section>

<section class="relative overflow-hidden bg-[#F2F4F6] py-16 lg:py-20">
    <div class="pointer-events-none absolute inset-0 opacity-80" style="background:linear-gradient(145deg,transparent 0 18%,rgba(255,255,255,.9) 18% 39%,transparent 39% 68%,rgba(255,255,255,.72) 68%)"></div>
    <div class="pointer-events-none absolute -left-20 top-24 h-64 w-64 rotate-45 bg-white/80"></div>
    <div class="pointer-events-none absolute left-0 top-0 flex gap-1 opacity-45" aria-hidden="true">@for($i = 0; $i < 8; $i++)<span class="block h-8 w-4 rotate-45 rounded-full border-[6px] {{ $i % 2 === 0 ? 'border-[#D21502]' : 'border-gray-400' }}"></span>@endfor</div>
    <div class="pointer-events-none absolute bottom-3 right-0 flex gap-1 opacity-40" aria-hidden="true">@for($i = 0; $i < 8; $i++)<span class="block h-8 w-4 rotate-45 rounded-full border-[6px] {{ $i % 2 === 0 ? 'border-[#D21502]' : 'border-gray-400' }}"></span>@endfor</div>
    <div class="relative mx-auto min-h-[530px] max-w-[1440px] px-6 lg:px-12">
        <div class="mb-10 ml-0 inline-block min-w-[270px] bg-[#A90000] px-10 py-2 text-center text-white shadow-lg lg:ml-20 lg:min-w-[425px]"><h2 class="font-poppins text-3xl font-semibold uppercase sm:text-4xl">Our Start</h2></div>
        <div class="grid gap-14 lg:grid-cols-2 lg:gap-8">
            <figure class="relative mx-auto h-[335px] w-full max-w-[510px] lg:ml-10">
                <div class="absolute left-[10%] top-0 h-[250px] w-[78%] -rotate-2 border-[12px] border-white bg-white shadow-lg"></div><div class="absolute left-[5%] top-7 h-[250px] w-[82%] rotate-2 border-[12px] border-white bg-white shadow-lg"></div>
                <div class="absolute left-0 top-12 h-[255px] w-[88%] border-[12px] border-white bg-white shadow-xl"><img src="{{ asset('storage/images/OurStartLeft.jpg') }}" alt="MREC launch at MWC Barcelona 2023" width="1593" height="1206" loading="lazy" decoding="async" class="h-full w-full object-cover"></div>
                <figcaption class="absolute bottom-0 left-0 z-10 w-[82%] max-w-[315px] bg-[#303B4F] px-5 py-3 font-hanken text-xs leading-5 text-white shadow-lg sm:px-8 sm:text-sm"><span class="font-poppins font-semibold">MREC Launched by KOMINFO</span><br>on MWC Barcelona 2023</figcaption>
            </figure>
            <figure class="relative mx-auto h-[385px] w-full max-w-[620px] lg:-mt-10">
                <div class="absolute left-0 top-0 h-[205px] w-[70%] border-[12px] border-white bg-white shadow-lg"><img src="{{ asset('storage/images/OurStartLeft.jpg') }}" alt="MREC group at MWC Barcelona" width="1593" height="1206" loading="lazy" decoding="async" class="h-full w-full object-cover object-top"></div>
                <div class="absolute right-0 top-10 h-[255px] w-[34%] border-[12px] border-white bg-white shadow-lg"><img src="{{ asset('storage/images/OurStartRight.jpg') }}" alt="MREC showcase demonstration" width="2106" height="1746" loading="lazy" decoding="async" class="h-full w-full object-cover object-right"></div>
                <div class="absolute bottom-9 left-[9%] h-[205px] w-[72%] border-[12px] border-white bg-white shadow-xl"><img src="{{ asset('storage/images/OurStartRight.jpg') }}" alt="MREC immersive technology showcase" width="2106" height="1746" loading="lazy" decoding="async" class="h-full w-full object-cover object-left"></div>
                <figcaption class="absolute bottom-0 left-0 z-10 w-[92%] max-w-[400px] bg-[#303B4F] px-5 py-3 font-hanken text-xs leading-5 text-white shadow-lg sm:px-8 sm:text-sm"><span class="font-poppins font-semibold">MREC Showcase Launched by KOMINFO</span><br>on MWC Barcelona 2024</figcaption>
            </figure>
        </div>
    </div>
</section>
<section class="bg-white py-24 text-center lg:py-28">
    <div class="mx-auto max-w-4xl px-6">
        <i class="fa-solid fa-eye mb-5 text-3xl text-[#D21502]"></i>
        <h2 class="mb-5 font-poppins text-4xl font-semibold text-slate-700">Our Vision</h2>
        <p class="text-lg leading-8 text-slate-600">“To become a leading global hub for innovation, research, and experiential learning in the metaverse, driving the next generation of digital interactions, virtual realities, and immersive technologies.”</p>
    </div>
</section>

@php
    $missions = [
        ['fa-microscope', 'Innovative Research', 'Conduct cutting-edge research to advance the development and understanding of metaverse technologies, including Virtual Reality (VR), Augmented Reality (AR), Mixed Reality (MR), and 3D Website.'],
        ['fa-graduation-cap', 'Educational Excellence', 'Provide top-tier educational programs and workshops that equip students, researchers, and professionals with the skills and knowledge necessary to excel in the metaverse industry.'],
        ['fa-diagram-project', 'Collaborative Environment', 'Foster a collaborative environment that brings together academia, industry partners, and government bodies to explore, develop, and implement metaverse solutions.'],
        ['fa-users', 'Community Engagement', 'Engage with the wider community through outreach programs, public lectures, and immersive experiences that showcase the potential of the metaverse to transform various sectors.'],
        ['fa-leaf', 'Sustainable Development', 'Promote sustainable and ethical development within the metaverse, ensuring that advancements contribute positively to society and adhere to principles of inclusivity and digital well-being.'],
        ['fa-rocket', 'Innovative Applications', 'Explore and develop innovative applications of metaverse technologies across different industries, driving forward new business models and opportunities for economic growth.'],
    ];
@endphp
<section class="bg-slate-50 py-16 lg:py-20">
    <div class="mx-auto max-w-[1280px] px-6 lg:px-12">
        <div class="mb-10 flex flex-col justify-between gap-4 md:flex-row md:items-end">
            <h2 class="font-poppins text-4xl font-semibold text-slate-700">Our Mission</h2>
            <p class="max-w-lg text-slate-600 md:text-right">We are committed to pushing the boundaries of spatial computing through six core pillars of excellence.</p>
        </div>
        <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">
            @foreach($missions as [$icon, $title, $description])
                <article class="rounded-lg border border-slate-200 bg-white p-7 shadow-sm">
                    <span class="mb-5 flex h-10 w-10 items-center justify-center rounded-full bg-red-50 text-[#D21502]"><i class="fa-solid {{ $icon }}"></i></span>
                    <h3 class="mb-3 font-poppins text-lg font-semibold text-slate-800">{{ $title }}</h3>
                    <p class="text-sm leading-6 text-slate-600">{{ $description }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-red-50 py-16 lg:py-20">
    <div class="mx-auto max-w-[1180px] px-6 text-center">
        <h2 class="mb-3 font-poppins text-4xl font-semibold text-slate-700">MREC Video Profile</h2>
        <p class="mb-8 text-slate-600">Discover our journey, research breakthroughs, and immersive technology at Telkom University.</p>
        <div class="relative aspect-video w-full overflow-hidden rounded-2xl bg-slate-950 shadow-2xl ring-1 ring-slate-900/10">
            <iframe
                src="https://drive.google.com/file/d/1rp5EgWFC41NB-eZCHk6WXBYTWv9GuM17/preview?vq=hd720"
                title="MREC Video Profile"
                width="1280" height="720"
                class="absolute inset-0 h-full w-full border-0"
                allow="autoplay; fullscreen; encrypted-media; picture-in-picture"
                allowfullscreen
                loading="lazy">
            </iframe>
        </div>
        <p class="mx-auto mt-8 max-w-5xl text-sm leading-6 text-slate-700">MREC aims to become a center of excellence in research and experience related to the metaverse. Embracing a blend of virtual reality and the real world, this research center will be a forum for students, researchers, practitioners, and related industry collaborations to explore, analyze, and develop metaverse-related technologies and applications.</p>
    </div>
</section>

@include('components.cta')
@endsection