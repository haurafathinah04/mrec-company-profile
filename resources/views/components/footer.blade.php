{{-- One shared CTA + footer for every page using layouts.app; no missing storage image. --}}
<footer class="mrec-site-footer{{ request()->routeIs('home') ? ' mrec-home-footer' : '' }}" aria-label="MREC footer">
    <section class="mrec-footer-cta" aria-labelledby="mrec-footer-cta-title">
        <div class="mrec-footer-circle" aria-hidden="true"></div>
        <div class="mrec-footer-circle mrec-footer-circle-small" aria-hidden="true"></div>
        <div class="mrec-footer-lines" aria-hidden="true"></div>
        <div class="mrec-footer-diamond" aria-hidden="true"></div>
        <div class="mrec-footer-dots" aria-hidden="true">@for ($dot = 0; $dot < 9; $dot++)<span></span>@endfor</div>
        <div class="mrec-footer-dots mrec-footer-dots-second" aria-hidden="true">@for ($dot = 0; $dot < 9; $dot++)<span></span>@endfor</div>
        <div class="mrec-footer-inner mrec-footer-cta-content">
            <div>
                <h2 id="mrec-footer-cta-title">Have an Idea<br><span>Worth Exploring?</span></h2>
                <p>Let's research, experiment, and build the next experience together.</p>
                <a class="mrec-footer-collaborate" href="{{ route('contact.index') }}">Let's Collaborate <span aria-hidden="true">→</span></a>
            </div>
            <a href="{{ route('home') }}" aria-label="MREC Home"><img class="mrec-footer-cta-logo" src="{{ asset('images/509d17f950.png') }}" alt="MREC — Metaverse Research & Experience Center" width="1605" height="732"></a>
        </div>
        {{-- Inline paths make the wave available on every route, without storage:link. --}}
        <svg class="mrec-footer-wave" viewBox="0 0 1162 85" preserveAspectRatio="none" aria-hidden="true" focusable="false">
            <path class="mrec-footer-wave-back" d="M0 0 C175 33 252 45 384 38 C620 26 775 33 946 60 C1041 72 1113 79 1162 84 L1162 85 L0 85 Z"/>
            <path class="mrec-footer-wave-middle" d="M0 35 C122 40 216 67 321 85 L803 85 C914 53 1018 23 1162 16 L1162 85 L0 85 Z"/>
            <path class="mrec-footer-wave-front" d="M0 37 C126 39 216 67 321 85 L0 85 Z M804 85 C902 57 1028 60 1162 85 Z"/>
        </svg>
    </section>
    <div class="mrec-footer-inner mrec-footer-columns">
        <div class="mrec-footer-brand">
            <a href="{{ route('home') }}" aria-label="MREC Home"><img class="mrec-footer-brand-logo" src="{{ asset('images/509d17f950.png') }}" alt="MREC" width="1605" height="732" loading="lazy"></a>
            <div class="mrec-footer-rule" aria-hidden="true"></div>
            <p>MREC (Metaverse Research and Experience Center) is a Center of Excellence at Telkom University, focusing on research and the development of metaverse and virtual reality technologies.</p>
            <div class="mrec-footer-social">
                <a href="https://instagram.com/mrec.telu" target="_blank" rel="noopener noreferrer" aria-label="MREC Instagram" title="MREC Instagram"><svg class="mrec-footer-icon" viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r=".8"/></svg></a>
                <a href="{{ config('mrec.footer.youtube_url') }}" target="_blank" rel="noopener noreferrer" aria-label="MREC on YouTube" title="MREC on YouTube"><svg class="mrec-footer-icon" viewBox="0 0 24 24" aria-hidden="true"><rect x="2" y="5" width="20" height="14" rx="4"/><path d="m10 9 5 3-5 3Z"/></svg></a>
            </div>
        </div>
        <nav class="mrec-footer-column" aria-label="Footer navigation">
            <h3>Explore</h3>
            <ul class="mrec-footer-nav">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('projects.index') }}">Projects</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('our-members') }}">Our Members</a></li>
            </ul>
        </nav>
        <div class="mrec-footer-column mrec-footer-contact-column" id="contact">
            <h3>Contact Info</h3>
            <address class="mrec-footer-contact">
                <a href="https://www.google.com/maps?q=GSG+Telkom+University,+Jl.+Telekomunikasi+No.1,+Bandung" target="_blank" rel="noopener noreferrer"><svg class="mrec-footer-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 10c0 5-7 11-7 11S5 15 5 10a7 7 0 1 1 14 0Z"/><circle cx="12" cy="10" r="2.5"/></svg><span class="mrec-footer-contact-text">GSG, Jl. Telekomunikasi No.1 Lt. 2, Sukapura, Dayeuhkolot, Bandung Regency, West Java 40257</span></a>
                <a href="tel:+628111434331"><svg class="mrec-footer-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="m6 3 4 4-2 3c2 3 3 4 6 6l3-2 4 4c-1 3-3 4-6 3C8 19 5 16 3 9 2 6 3 4 6 3Z"/></svg><span class="mrec-footer-contact-text mrec-footer-contact-underlined">+62 811-1434-331</span></a>
                <a href="mailto:mrec.telu@gmail.com"><svg class="mrec-footer-icon" viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="5" width="18" height="14"/><path d="m3 5 9 8 9-8"/></svg><span class="mrec-footer-contact-text mrec-footer-contact-underlined">mrec.telu@gmail.com</span></a>
                <a href="https://mrec.center.telkomuniversity.ac.id" target="_blank" rel="noopener noreferrer"><svg class="mrec-footer-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"/><ellipse cx="12" cy="12" rx="4" ry="9"/><path d="M3 12h18M5 7h14M5 17h14"/></svg><span class="mrec-footer-contact-text mrec-footer-contact-underlined">mrec.center.telkomuniversity.ac.id</span></a>
            </address>
        </div>
    </div>
    <div class="mrec-footer-copyright"><p>© {{ date('Y') }} - Metaverse Research and Experience Center | Telkom University. All rights reserved.</p></div>
</footer>
