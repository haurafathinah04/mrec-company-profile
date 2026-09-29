@extends('layouts.app')

@section('title', 'MREC - Our Members')

@section('content')
<!-- SweetAlert2 CDN untuk Pop-up Cantik -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- CSS Custom Animasi Floating Card ID & Chevron Rotate -->
<style>
    @keyframes floatCard {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-12px); }
    }
    .animate-float-card {
        animation: floatCard 4s ease-in-out infinite;
    }
    .accordion-arrow {
        transition: transform 0.3s ease;
    }
    .accordion-content.hidden {
        display: none;
    }
    .member-card-transition {
        transition: all 0.4s ease-in-out;
    }
</style>

<!-- ========================================= -->
<!-- 1. HERO SECTION (ACTIVE MEMBERS - FULL 1 LAYAR) -->
<!-- ========================================= -->
<section class="min-h-[calc(100vh-80px)] flex flex-col justify-center items-center bg-[#FBFBFC] text-center px-4 pt-52 pb-32">
    <div class="max-w-4xl mx-auto flex flex-col items-center">
        <!-- Judul Hero (Ukuran Besar & Bold, Jarak Atas Diperbesar Lagi) -->
        <h1 class="font-sora font-bold text-[60px] sm:text-[72px] md:text-[80px] text-[#D21502] leading-none tracking-tight">
            Active Members
        </h1>
        
        <!-- Garis Pemisah -->
        <div class="w-[600px] max-w-full h-[1px] bg-[#D21502] my-0 mt-[28px] mb-[28px]"></div>
        
        <!-- Subtitle Teks 2 Baris -->
        <p class="font-hanken font-normal text-[16px] sm:text-[18px] text-gray-600 max-w-2xl mx-auto leading-relaxed">
            Meet the multidisciplinary team of visionaries, developers, and designers <br class="hidden sm:inline">
            driving the future of spatial computing and the metaverse at MREC.
        </p>

        <!-- FITUR ADMIN (Dekat dengan Subtitle, Jarak ke Bawah Luas) -->
        @auth
        <div class="mt-5 mb-10 flex items-center justify-center gap-5 w-full">
            <a href="{{ route('admin.members.create') }}" 
               class="px-8 h-10 min-w-[130px] bg-[#D21502] hover:bg-[#b01101] text-white font-poppins font-semibold text-xs sm:text-sm rounded-xl transition-all shadow-sm flex items-center justify-center gap-2 shrink-0">
                <i class="fa-solid fa-plus text-xs"></i>
                <span>Tambah</span>
            </a>

            <a href="{{ route('admin.members.index') }}" 
               class="px-8 h-10 min-w-[130px] bg-gray-800 hover:bg-black text-white font-poppins font-semibold text-xs sm:text-sm rounded-xl transition-all shadow-sm flex items-center justify-center gap-2 shrink-0">
                <i class="fa-solid fa-pen-to-square text-xs"></i>
                <span>Edit</span>
            </a>
        </div>
        @endauth
    </div>
</section>

<!-- ========================================= -->
<!-- 2. MAIN MEMBERS LIST SECTION (DROPDOWN / ACCORDION) -->
<!-- ========================================= -->
<section class="pb-16 bg-[#FBFBFC]">
    <div class="max-w-[1280px] mx-auto px-6 space-y-8">

        <!-- A. LEADER SECTION -->
        <div class="border-b border-gray-200 pb-6">
            <button onclick="toggleAccordion('leader-content', 'leader-arrow')" 
                    class="w-full flex items-center justify-between gap-3 mb-2 text-left focus:outline-none group">
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-crown text-[#D21502] text-xl"></i>
                    <h2 class="font-poppins font-semibold text-[24px] text-gray-900 group-hover:text-[#D21502] transition-colors">Leader</h2>
                </div>
                <i id="leader-arrow" class="fa-solid fa-chevron-down accordion-arrow text-gray-500 text-lg"></i>
            </button>
            <div class="w-full h-[1px] bg-gradient-to-r from-gray-300 via-gray-200 to-transparent mb-6"></div>

            <div id="leader-content" class="accordion-content">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @forelse($leaders ?? [] as $leader)
                        <div class="w-[583px] h-[271.59px] max-w-full bg-white rounded-2xl border border-gray-200 p-6 shadow-sm flex flex-col items-center justify-center text-center shrink-0">
                            <img src="{{ asset('storage/' . $leader->image) }}" 
                                 alt="{{ $leader->name }}" 
                                 class="w-[150px] h-[150px] rounded-full object-cover mb-4 shrink-0 border border-gray-100">
                            <h3 class="font-poppins font-semibold text-[20px] text-gray-900 leading-snug">{{ $leader->name }}</h3>
                            <p class="font-poppins font-semibold text-[16px] text-[#D21502] mt-[8px]">{{ $leader->role }}</p>
                        </div>
                    @empty
                        <div class="col-span-full py-8 text-center text-gray-400 font-hanken text-sm bg-white rounded-2xl border border-dashed border-gray-200">
                            Belum ada data Leader yang ditambahkan.
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- B. PROJECT MANAGEMENT SECTION -->
        <div class="border-b border-gray-200 pb-6">
            <button onclick="toggleAccordion('pm-content', 'pm-arrow')" 
                    class="w-full flex items-center justify-between gap-3 mb-2 text-left focus:outline-none group">
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-list-check text-[#D21502] text-xl"></i>
                    <h2 class="font-poppins font-semibold text-[24px] text-gray-900 group-hover:text-[#D21502] transition-colors">Project Management</h2>
                </div>
                <i id="pm-arrow" class="fa-solid fa-chevron-down accordion-arrow text-gray-500 text-lg"></i>
            </button>
            <div class="w-full h-[1px] bg-gradient-to-r from-gray-300 via-gray-200 to-transparent mb-6"></div>

            <div id="pm-content" class="accordion-content">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @forelse($projectManagers ?? [] as $pm)
                        <div class="w-[583px] h-[271.59px] max-w-full bg-white rounded-2xl border border-gray-200 p-6 shadow-sm flex flex-col items-center justify-center text-center shrink-0">
                            <img src="{{ asset('storage/' . $pm->image) }}" 
                                 alt="{{ $pm->name }}" 
                                 class="w-[150px] h-[150px] rounded-full object-cover mb-4 shrink-0 border border-gray-100">
                            <h3 class="font-poppins font-semibold text-[20px] text-gray-900 leading-snug">{{ $pm->name }}</h3>
                            <p class="font-poppins font-semibold text-[16px] text-[#D21502] mt-[8px]">{{ $pm->role }}</p>
                        </div>
                    @empty
                        <div class="col-span-full py-8 text-center text-gray-400 font-hanken text-sm bg-white rounded-2xl border border-dashed border-gray-200">
                            Belum ada data Project Manager yang ditambahkan.
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- C. LECTURERS SECTION -->
        <div class="border-b border-gray-200 pb-6">
            <button onclick="toggleAccordion('lecturer-content', 'lecturer-arrow')" 
                    class="w-full flex items-center justify-between gap-3 mb-2 text-left focus:outline-none group">
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-chalkboard-user text-[#D21502] text-xl"></i>
                    <h2 class="font-poppins font-semibold text-[24px] text-gray-900 group-hover:text-[#D21502] transition-colors">Lecturers</h2>
                </div>
                <i id="lecturer-arrow" class="fa-solid fa-chevron-down accordion-arrow text-gray-500 text-lg"></i>
            </button>
            <div class="w-full h-[1px] bg-gradient-to-r from-gray-300 via-gray-200 to-transparent mb-6"></div>

            <div id="lecturer-content" class="accordion-content">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    @forelse($lecturers ?? [] as $lecturer)
                        <div class="w-[588px] h-[88px] max-w-full bg-white rounded-2xl border border-gray-200 px-5 flex items-center gap-4 shadow-sm shrink-0">
                            <img src="{{ asset('storage/' . $lecturer->image) }}" 
                                 alt="{{ $lecturer->name }}" 
                                 class="w-12 h-12 rounded-full object-cover shrink-0 border border-gray-200">
                            <div class="overflow-hidden">
                                <h3 class="font-poppins font-semibold text-[16px] text-gray-900 leading-tight truncate">{{ $lecturer->name }}</h3>
                                <p class="font-poppins font-semibold text-[14px] text-[#D21502] mt-[4px] truncate">{{ $lecturer->role ?? $lecturer->department }}</p>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full py-8 text-center text-gray-400 font-hanken text-sm bg-white rounded-2xl border border-dashed border-gray-200">
                            Belum ada data Lecturer yang ditambahkan.
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- D. DEVELOPMENT & ENGINEERING SECTION -->
        <div class="border-b border-gray-200 pb-6">
            <button onclick="toggleAccordion('dev-content', 'dev-arrow')" 
                    class="w-full flex items-center justify-between gap-3 mb-2 text-left focus:outline-none group">
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-code text-[#D21502] text-xl"></i>
                    <h2 class="font-poppins font-semibold text-[24px] text-gray-900 group-hover:text-[#D21502] transition-colors">Development & Engineering</h2>
                </div>
                <i id="dev-arrow" class="fa-solid fa-chevron-down accordion-arrow text-gray-500 text-lg"></i>
            </button>
            <div class="w-full h-[1px] bg-gradient-to-r from-gray-300 via-gray-200 to-transparent mb-6"></div>

            <div id="dev-content" class="accordion-content">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse($developers ?? [] as $dev)
                        <div id="member-card-{{ $dev->id }}" class="member-card-transition relative group w-[384px] h-[120px] max-w-full bg-white rounded-2xl border border-gray-200 px-5 flex items-center gap-4 shadow-sm shrink-0 overflow-hidden">
                            <img src="{{ asset('storage/' . $dev->image) }}" 
                                 alt="{{ $dev->name }}" 
                                 class="w-[80px] h-[80px] rounded-full object-cover shrink-0 border border-gray-100">
                            <div class="overflow-hidden">
                                <h3 class="font-poppins font-semibold text-[16px] text-gray-900 leading-tight truncate">{{ $dev->name }}</h3>
                                <p class="font-poppins font-semibold text-[14px] text-[#D21502] mt-[4px] truncate">{{ $dev->role }}</p>
                            </div>

                            <!-- OVERLAY HOVER ADMIN (AJAX FETCH) -->
                            @auth
                            <div class="absolute inset-0 bg-black/60 backdrop-blur-[2px] opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center p-2 z-10">
                                <button type="button" 
                                        onclick="moveToAlumniAjax({{ $dev->id }}, '{{ addslashes($dev->name) }}')"
                                        class="px-4 h-9 bg-amber-500 hover:bg-amber-600 text-white font-poppins font-semibold text-xs rounded-xl shadow-md transition-all flex items-center gap-2 transform translate-y-2 group-hover:translate-y-0">
                                    <i class="fa-solid fa-user-graduate"></i>
                                    <span>Move to Alumni</span>
                                </button>
                            </div>
                            @endauth
                        </div>
                    @empty
                        <div class="col-span-full py-8 text-center text-gray-400 font-hanken text-sm bg-white rounded-2xl border border-dashed border-gray-200">
                            Belum ada data Developer yang ditambahkan.
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- E. DESIGN & GENERALIST SECTION -->
        <div class="border-b border-gray-200 pb-6">
            <button onclick="toggleAccordion('design-content', 'design-arrow')" 
                    class="w-full flex items-center justify-between gap-3 mb-2 text-left focus:outline-none group">
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-palette text-[#D21502] text-xl"></i>
                    <h2 class="font-poppins font-semibold text-[24px] text-gray-900 group-hover:text-[#D21502] transition-colors">Design & Generalist</h2>
                </div>
                <i id="design-arrow" class="fa-solid fa-chevron-down accordion-arrow text-gray-500 text-lg"></i>
            </button>
            <div class="w-full h-[1px] bg-gradient-to-r from-gray-300 via-gray-200 to-transparent mb-6"></div>

            <div id="design-content" class="accordion-content">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse($designers ?? [] as $des)
                        <div id="member-card-{{ $des->id }}" class="member-card-transition relative group w-[384px] h-[120px] max-w-full bg-white rounded-2xl border border-gray-200 px-5 flex items-center gap-4 shadow-sm shrink-0 overflow-hidden">
                            <img src="{{ asset('storage/' . $des->image) }}" 
                                 alt="{{ $des->name }}" 
                                 class="w-[80px] h-[80px] rounded-full object-cover shrink-0 border border-gray-100">
                            <div class="overflow-hidden">
                                <h3 class="font-poppins font-semibold text-[16px] text-gray-900 leading-tight truncate">{{ $des->name }}</h3>
                                <p class="font-poppins font-semibold text-[14px] text-[#D21502] mt-[4px] truncate">{{ $des->role }}</p>
                            </div>

                            <!-- OVERLAY HOVER ADMIN (AJAX FETCH) -->
                            @auth
                            <div class="absolute inset-0 bg-black/60 backdrop-blur-[2px] opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center p-2 z-10">
                                <button type="button" 
                                        onclick="moveToAlumniAjax({{ $des->id }}, '{{ addslashes($des->name) }}')"
                                        class="px-4 h-9 bg-amber-500 hover:bg-amber-600 text-white font-poppins font-semibold text-xs rounded-xl shadow-md transition-all flex items-center gap-2 transform translate-y-2 group-hover:translate-y-0">
                                    <i class="fa-solid fa-user-graduate"></i>
                                    <span>Move to Alumni</span>
                                </button>
                            </div>
                            @endauth
                        </div>
                    @empty
                        <div class="col-span-full py-8 text-center text-gray-400 font-hanken text-sm bg-white rounded-2xl border border-dashed border-gray-200">
                            Belum ada data Designer yang ditambahkan.
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- F. ALUMNI SECTION -->
        <div class="border-b border-gray-200 pb-6">
            <button onclick="toggleAccordion('alumni-content', 'alumni-arrow')" 
                    class="w-full flex items-center justify-between gap-3 mb-2 text-left focus:outline-none group">
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-user-graduate text-[#D21502] text-xl"></i>
                    <h2 class="font-poppins font-semibold text-[24px] text-gray-900 group-hover:text-[#D21502] transition-colors">Alumni</h2>
                </div>
                <i id="alumni-arrow" class="fa-solid fa-chevron-down accordion-arrow text-gray-500 text-lg"></i>
            </button>
            <div class="w-full h-[1px] bg-gradient-to-r from-gray-300 via-gray-200 to-transparent mb-6"></div>

            <div id="alumni-content" class="accordion-content">
                <div class="bg-white p-8 rounded-2xl border border-gray-200 shadow-sm">
                    <div id="alumni-grid" class="grid grid-cols-1 md:grid-cols-3 gap-y-4 gap-x-8">
                        @forelse($alumnis ?? [] as $alumni)
                            <div class="flex items-center gap-3">
                                <span class="w-2 h-2 rounded-full bg-[#D21502] shrink-0"></span>
                                <span class="font-poppins font-semibold text-[20px] text-gray-800 leading-snug truncate">
                                    {{ is_object($alumni) ? $alumni->name :$alumni }}
                                </span>
                            </div>
                        @empty
                            <div id="alumni-empty-msg" class="col-span-full py-4 text-center text-gray-400 font-hanken text-sm">
                                Belum ada data Alumni yang ditambahkan.
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ========================================= -->
<!-- 3. MEMBER OF MREC? CARD SECTION -->
<!-- ========================================= -->
<section class="pb-20 bg-[#FBFBFC]">
    <div class="max-w-[1280px] mx-auto px-6">
        <div class="w-full bg-[#FFF5F5] rounded-3xl border border-gray-200 shadow-sm relative overflow-hidden flex items-center justify-between min-h-[460px]">
            <div class="px-6 sm:px-12 lg:px-16 py-10 z-10 flex flex-col items-start max-w-[580px]">
                <h2 class="font-poppins font-semibold text-[36px] sm:text-[48px] text-[#D21502] leading-tight">
                    Member of MREC?
                </h2>

                <p class="font-hanken font-normal text-[16px] text-gray-700 mt-2 sm:mt-3 ml-1 flex items-center gap-2">
                    <span>Scan ID Card Here</span>
                    <i class="fa-solid fa-arrow-down text-[#D21502]"></i>
                </p>

                <a href="https://wa.me/628111434331" target="_blank" 
                   class="mt-4 sm:mt-5 px-5 h-[44px] bg-[#D21502] hover:bg-[#b01101] text-white font-poppins font-semibold text-[14px] rounded-lg transition-all shadow-sm flex items-center justify-center gap-2.5 shrink-0">
                    <span>Go to Website</span>
                    <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                </a>
            </div>

            <div class="pr-6 sm:pr-12 lg:pr-16 py-6 z-10 hidden lg:flex justify-end shrink-0">
                <img src="{{ asset('storage/images/CardID.png') }}" alt="Card ID MREC" 
                     class="w-[532.4px] h-[422.43px] object-contain animate-float-card">
            </div>
        </div>
    </div>
</section>

<!-- ========================================= -->
<!-- 4. CALL TO ACTION (CTA) SECTION -->
<!-- ========================================= -->
<section class="relative w-full bg-[#F8F9FA] overflow-hidden min-h-[450px]">
    <div class="absolute -top-[105px] right-[60px] w-[290px] h-[290px] rounded-full border-[1.5px] border-[#D21502]/40 pointer-events-none z-10"></div>
    <div class="absolute -bottom-[125px] -right-[55px] w-[270px] h-[270px] rounded-full border-[1.5px] border-[#D21502]/40 pointer-events-none z-20"></div>
    <div class="absolute left-[4%] top-[42px] w-[20px] h-[20px] rotate-45 rounded-[2px] bg-[#D21502]/35 pointer-events-none z-10"></div>

    <div class="absolute left-[11%] top-[45px] w-[32%] rotate-6 origin-left pointer-events-none z-10">
        <div class="h-[1.5px] w-full bg-[#D21502]/35"></div>
        <div class="h-[1.5px] w-[82%] mt-[14px] ml-[10%] bg-[#D21502]/35"></div>
    </div>

    <div class="relative z-30 w-full min-h-[450px] flex items-center">
        <div class="w-full max-w-[1280px] mx-auto px-6 sm:px-12 lg:px-16 flex flex-col lg:flex-row items-center justify-between gap-8 py-16">
            <div class="w-full lg:w-1/2 flex flex-col items-start z-30">
                <h2 class="font-poppins font-semibold text-[36px] sm:text-[48px] leading-[1.1] tracking-tight mb-4 text-[#303B4F]">
                    Have an Idea <br>
                    <span class="text-[#D21502]">Worth Exploring?</span>
                </h2>

                <p class="font-hanken font-normal text-[16px] text-[#3F4A5A] leading-[1.65] max-w-[360px] mb-6">
                    Let's research, experiment, and build the next experience together.
                </p>

                <a href="{{ route('contact.index') }}"
                   class="px-6 h-[44px] inline-flex items-center justify-center gap-2 bg-[#D21502] hover:bg-[#b01101] text-white font-poppins font-semibold text-[14px] rounded-lg transition-all duration-200 shadow-sm shrink-0">
                    <span>Let's Collaborate</span>
                    <span class="text-[15px]">&rarr;</span>
                </a>
            </div>

            <div class="hidden lg:flex lg:w-1/2 justify-end z-20">
                <img src="{{ asset('storage/images/LogoMrecBig.png') }}"
                     alt="Logo MREC Big"
                     class="w-[480px] h-auto object-contain">
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 left-0 w-full h-[78px] sm:h-[88px] lg:h-[98px] pointer-events-none overflow-hidden z-40">
        <img src="{{ asset('storage/images/Gelombang.png') }}"
             alt="Gelombang"
             class="w-full h-full object-fill">
    </div>

    <div class="absolute bottom-0 left-0 w-full h-[3px] bg-[#D21502] z-50"></div>
</section>

<!-- JAVASCRIPT LOGIC ACCORDION & AJAX MOVE TO ALUMNI -->
<script>
    function toggleAccordion(contentId, arrowId) {
        const content = document.getElementById(contentId);
        const arrow = document.getElementById(arrowId);
        
        content.classList.toggle('hidden');
        if (content.classList.contains('hidden')) {
            arrow.style.transform = 'rotate(0deg)';
        } else {
            arrow.style.transform = 'rotate(180deg)';
        }
    }

    function moveToAlumniAjax(memberId, memberName) {
        Swal.fire({
            title: 'Pindahkan ke Alumni?',
            text: `Apakah Anda yakin ingin memindahkan ${memberName} ke daftar Alumni?`,
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#D21502',
            cancelButtonColor: '#6B7280',
            confirmButtonText: 'Ya, Pindahkan!',
            cancelButtonText: 'Batal',
            customClass: {
                popup: 'rounded-2xl font-poppins',
                confirmButton: 'rounded-xl font-semibold',
                cancelButton: 'rounded-xl font-semibold'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                // Kirim request AJAX PATCH
                fetch(`/admin/members/${memberId}/move-to-alumni`, {
                    method: 'PATCH',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Gagal memperbarui status member.');
                    }
                    return response.json();
                })
                .then(data => {
                    // 1. Hilangkan Card Member dengan Animasi Fade Out
                    const cardElement = document.getElementById(`member-card-${memberId}`);
                    if (cardElement) {
                        cardElement.style.opacity = '0';
                        cardElement.style.transform = 'scale(0.9)';
                        setTimeout(() => {
                            cardElement.remove();
                        }, 400);
                    }

                    // 2. Tambahkan Nama ke Section Alumni secara Otomatis
                    const alumniGrid = document.getElementById('alumni-grid');
                    const emptyMsg = document.getElementById('alumni-empty-msg');
                    if (emptyMsg) {
                        emptyMsg.remove();
                    }

                    const newAlumniItem = document.createElement('div');
                    newAlumniItem.className = 'flex items-center gap-3 animate-fade-in';
                    newAlumniItem.innerHTML = `
                        <span class="w-2 h-2 rounded-full bg-[#D21502] shrink-0"></span>
                        <span class="font-poppins font-semibold text-[20px] text-gray-800 leading-snug truncate">
                            ${memberName}
                        </span>
                    `;
                    alumniGrid.appendChild(newAlumniItem);

                    // 3. Tampilkan Pop-Up Toast Sukses
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil Dipindahkan!',
                        text: `${memberName} telah resmi masuk ke daftar Alumni MREC.`,
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true
                    });
                })
                .catch(error => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Terjadi Kesalahan',
                        text: error.message || 'Gagal memproses data.',
                        confirmButtonColor: '#D21502'
                    });
                });
            }
        });
    }
</script>
@endsection