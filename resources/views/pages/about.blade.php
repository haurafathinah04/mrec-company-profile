@extends('layouts.app')

@section('title', 'MREC - About Us')

@section('content')
<link rel="stylesheet" href="{{ asset('css/mrec-about.css') }}">
<div class="mrec-about-page">
    <section class="mrec-about-intro mrec-about-grid" aria-labelledby="mrec-about-title">
        <div class="mrec-about-container mrec-about-intro-inner">
            <div>
                <p class="mrec-about-label">ABOUT US</p>
                <h1 id="mrec-about-title">MREC</h1>
                <p class="mrec-about-intro-copy">Metaverse Research and Experience Center (MREC) at Telkom University is a leading global hub dedicated to advancing innovation, research, and experiential learning in immersive technologies.</p>
                <a href="{{ route('projects.index') }}" class="mrec-about-project-link">Explore Our Projects</a>
            </div>
            <img src="{{ asset('images/about/mrec-office.jpg') }}" alt="Metaverse Research &amp; Experience Center office glass sign" class="mrec-about-office" width="720" height="1280" fetchpriority="high">
        </div>
    </section>

    <section class="mrec-about-start" aria-labelledby="mrec-about-start-title">
        <img class="mrec-about-motif mrec-about-motif-top" src="{{ asset('images/about/our-start-motif-top-reference.png') }}" alt="" aria-hidden="true" width="248" height="54">
        <div class="mrec-about-container mrec-about-history">
            <figure class="mrec-about-launch">
                <h2 id="mrec-about-start-title">OUR START</h2>
                <img src="{{ asset('images/about/our-start-launch-2023-hd.jpg') }}" alt="MREC launch by KOMINFO at MWC Barcelona 2023" width="1145" height="768" loading="lazy">
                <figcaption class="mrec-about-caption">MREC Launched by KOMINFO<br>on MWC Barcelona 2023</figcaption>
            </figure>
            <figure class="mrec-about-showcase">
                <img class="mrec-about-showcase-group" src="{{ asset('images/about/our-start-showcase-group-2024-hd.jpg') }}" alt="MREC and KOMINFO delegation at MWC Barcelona 2024" width="1376" height="768" loading="lazy">
                <img class="mrec-about-showcase-meeting" src="{{ asset('images/about/our-start-showcase-meeting-2024-hd.jpg') }}" alt="KOMINFO meeting at the MREC showcase in Barcelona 2024" width="768" height="1376" loading="lazy">
                <img class="mrec-about-showcase-demo" src="{{ asset('images/about/our-start-showcase-demo-2024-hd.jpg') }}" alt="MREC technology demonstration at MWC Barcelona 2024" width="1145" height="768" loading="lazy">
                <figcaption class="mrec-about-caption">MREC Showcase Launched by KOMINFO<br>on MWC Barcelona 2024</figcaption>
            </figure>
        </div>
        <img class="mrec-about-motif mrec-about-motif-bottom" src="{{ asset('images/about/our-start-motif-bottom-reference.png') }}" alt="" aria-hidden="true" width="248" height="54">
    </section>

    <section class="mrec-about-vision" aria-labelledby="mrec-about-vision-title">
        <div class="mrec-about-vision-inner">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-8a3 3 0 1 0 0 6 3 3 0 0 0 0-6z"/></svg>
            <h2 id="mrec-about-vision-title" class="mrec-about-heading">Our Vision</h2>
            <p>“To become a leading global hub for innovation, research, and experiential learning in the metaverse, driving the next generation of digital interactions, virtual realities, and immersive technologies.”</p>
        </div>
    </section>

    <section class="mrec-about-mission mrec-about-grid" aria-labelledby="mrec-about-mission-title">
        <div class="mrec-about-container">
            <div class="mrec-about-mission-header">
                <h2 id="mrec-about-mission-title" class="mrec-about-heading">Our Mission</h2>
                <p>We are committed to pushing the boundaries of spatial computing through six core pillars of excellence.</p>
            </div>
            <div class="mrec-about-mission-grid">
            <article class="mrec-about-mission-card">
                <div class="mrec-about-mission-icon" aria-hidden="true"><i class="fa-solid fa-microscope"></i></div>
                <h3>Innovative Research</h3>
                <p>Conduct cutting-edge research to advance the development and understanding of metaverse technologies, including Virtual Reality (VR), Augmented Reality (AR), Mixed Reality (MR), and 3D Website.</p>
            </article>
            <article class="mrec-about-mission-card">
                <div class="mrec-about-mission-icon" aria-hidden="true"><i class="fa-solid fa-graduation-cap"></i></div>
                <h3>Educational Excellence</h3>
                <p>Provide top-tier educational programs and workshops that equip students, researchers, and professionals with the skills and knowledge necessary to excel in the metaverse industry.</p>
            </article>
            <article class="mrec-about-mission-card">
                <div class="mrec-about-mission-icon" aria-hidden="true"><i class="fa-solid fa-diagram-project"></i></div>
                <h3>Collaborative Environment</h3>
                <p>Foster a collaborative environment that brings together academia, industry partners, and government bodies to explore, develop, and implement metaverse solutions.</p>
            </article>
            <article class="mrec-about-mission-card">
                <div class="mrec-about-mission-icon" aria-hidden="true"><i class="fa-solid fa-users"></i></div>
                <h3>Community Engagement</h3>
                <p>Engage with the wider community through outreach programs, public lectures, and immersive experiences that showcase the potential of the metaverse to transform various sectors, including entertainment, education, healthcare, and commerce.</p>
            </article>
            <article class="mrec-about-mission-card">
                <div class="mrec-about-mission-icon" aria-hidden="true"><i class="fa-solid fa-compass"></i></div>
                <h3>Sustainable Development</h3>
                <p>Promote sustainable and ethical development within the metaverse, ensuring that advancements contribute positively to society and adhere to principles of inclusivity, accessibility, and digital well-being.</p>
            </article>
            <article class="mrec-about-mission-card">
                <div class="mrec-about-mission-icon" aria-hidden="true"><i class="fa-solid fa-rocket"></i></div>
                <h3>Innovative Applications</h3>
                <p>Explore and develop innovative applications of metaverse technologies across different industries, driving forward new business models and opportunities for economic growth.</p>
            </article>
            </div>
        </div>
    </section>

    <section class="mrec-about-video" aria-labelledby="mrec-about-video-title">
        <div class="mrec-about-container">
            <h2 id="mrec-about-video-title" class="mrec-about-heading">MREC Video Profile</h2>
            <p class="mrec-about-video-subtitle">Discover our journey, research breakthroughs, &amp; how we empower innovation through spatial computing and immersive technology at Telkom University.</p>
            <div class="mrec-about-video-frame">
                <iframe src="https://drive.google.com/file/d/1rp5EgWFC41NB-eZCHk6WXBYTWv9GuM17/preview" title="MREC Video Profile" allow="autoplay; fullscreen; encrypted-media" allowfullscreen loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
            </div>
            <p class="mrec-about-video-description">MREC aims to become a center of excellence in research and experience related to the metaverse. Embracing a blend of virtual reality and the real world, this research center will be a forum for students, researchers, practitioners, and related industry collaborations to explore, analyze, and develop metaverse-related technologies and applications. MREC is supported by Kominfo, where Telkom University was appointed as the host. Launching on March 1, 2023 at MWC Barcelona.</p>
        </div>
    </section>
</div>
{{-- The existing collaboration section and footer remain in layouts.app. --}}
@endsection
