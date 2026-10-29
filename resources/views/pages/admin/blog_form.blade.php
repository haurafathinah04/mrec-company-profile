@extends('layouts.app')

@php($isEdit = isset($blog) && $blog)

@section('title', $isEdit ? 'MREC - Edit Blog' : 'MREC - Add Blog')

@section('content')
<section class="relative min-h-screen overflow-hidden bg-[#f5f6f8] px-5 pb-20 pt-32 sm:px-8 lg:px-12">
    <div class="pointer-events-none absolute -right-24 top-28 h-72 w-72 rounded-full border-[28px] border-[#D21502]/10 sm:h-96 sm:w-96"></div>
    <div class="pointer-events-none absolute -bottom-24 -left-24 h-80 w-80 rounded-full border border-[#2D3748]/10"></div>

    <div class="relative mx-auto max-w-6xl">
        <div class="mb-8 flex flex-col justify-between gap-5 sm:flex-row sm:items-end">
            <div>
                <p class="font-poppins text-xs font-semibold uppercase tracking-[0.28em] text-[#D21502]">Blog management</p>
                <h1 class="mt-3 font-sora text-3xl font-bold leading-tight text-[#1f2937] sm:text-4xl">{{ $isEdit ? 'Edit blog' : 'Add a new blog' }}</h1>
            </div>
            <a href="{{ route('blog') }}" class="inline-flex items-center gap-2 self-start text-sm font-semibold text-[#2D3748] transition hover:text-[#D21502] sm:self-auto">
                <i class="fa-solid fa-arrow-left text-xs"></i>
                Back to blog
            </a>
        </div>

        <div class="grid overflow-hidden rounded-[2rem] bg-white shadow-[0_24px_70px_rgba(45,55,72,0.12)] lg:grid-cols-[0.72fr_1.28fr]">
            <div class="relative hidden min-h-[560px] overflow-hidden bg-[#2D3748] p-10 text-white lg:flex lg:flex-col lg:justify-between lg:p-12">
                <div class="absolute -right-28 -top-28 h-80 w-80 rounded-full border-[34px] border-white/10"></div>
                <div class="absolute -bottom-20 -left-20 h-64 w-64 rounded-full border border-[#D21502]/50"></div>

                <div class="relative">
                    <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#D21502] text-lg shadow-lg shadow-black/20">
                        <i class="fa-solid fa-newspaper"></i>
                    </span>
                    <p class="mt-16 font-poppins text-xs font-semibold uppercase tracking-[0.24em] text-[#ff8b7f]">MREC blog</p>
                    <h2 class="mt-5 max-w-xs font-sora text-3xl font-bold leading-tight">Share the stories.</h2>
                    <p class="mt-5 max-w-xs text-sm leading-7 text-white/65">Publikasikan artikel, berita, atau informasi menarik seputar kegiatan dan riset MREC.</p>
                </div>

                <div class="relative flex items-center gap-3 text-xs uppercase tracking-[0.2em] text-white/50">
                    <span class="h-px w-10 bg-[#D21502]"></span>
                    <span>{{ $isEdit ? 'Edit entry' : 'New entry' }}</span>
                </div>
            </div>

            <form action="{{ $isEdit ? route('blogs.update', $blog) : route('blogs.store') }}" method="POST" enctype="multipart/form-data" class="p-7 sm:p-10 lg:p-14">
                @csrf
                @if ($isEdit)
                    @method('PUT')
                @endif

                <div class="mb-8 border-b border-gray-100 pb-6">
                    <p class="font-poppins text-xs font-semibold uppercase tracking-[0.2em] text-gray-400">Blog details</p>
                    <p class="mt-2 text-sm text-gray-500">Fields marked with <span class="text-[#D21502]">*</span> are required.</p>
                </div>

                <div class="space-y-6">
                    <!-- Judul Blog -->
                    <div>
                        <label for="judul" class="mb-2 block text-sm font-semibold text-gray-700">Judul blog <span class="text-[#D21502]">*</span></label>
                        <input type="text" id="judul" name="judul" value="{{ old('judul', $blog?->judul) }}" placeholder="e.g. Inovasi Teknologi Imersif Terbaru" class="w-full rounded-xl border bg-gray-50 px-4 py-3.5 text-sm text-gray-900 outline-none transition placeholder:text-gray-400 focus:border-[#D21502] focus:bg-white focus:ring-4 focus:ring-[#D21502]/10 @error('judul') border-red-500 @else border-gray-200 @enderror" required>
                        @error('judul')
                        <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Highlight (Ringkasan Singkat) -->
                    <div>
                        <label for="highlight" class="mb-2 block text-sm font-semibold text-gray-700">Highlight / Ringkasan Singkat <span class="text-[#D21502]">*</span></label>
                        <input type="text" id="highlight" name="highlight" value="{{ old('highlight', $blog?->highlight) }}" placeholder="e.g. Ringkasan singkat artikel untuk preview card" class="w-full rounded-xl border bg-gray-50 px-4 py-3.5 text-sm text-gray-900 outline-none transition placeholder:text-gray-400 focus:border-[#D21502] focus:bg-white focus:ring-4 focus:ring-[#D21502]/10 @error('highlight') border-red-500 @else border-gray-200 @enderror" required>
                        @error('highlight')
                        <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Isi Lengkap Blog -->
                    <div>
                        <label for="isi" class="mb-2 block text-sm font-semibold text-gray-700">Isi / Konten Blog <span class="text-[#D21502]">*</span></label>
                        <textarea id="isi" name="isi" rows="6" placeholder="Tuliskan isi artikel secara lengkap di sini..." class="w-full rounded-xl border bg-gray-50 px-4 py-3.5 text-sm text-gray-900 outline-none transition placeholder:text-gray-400 focus:border-[#D21502] focus:bg-white focus:ring-4 focus:ring-[#D21502]/10 @error('isi') border-red-500 @else border-gray-200 @enderror" required>{{ old('isi', $blog?->isi) }}</textarea>
                        @error('isi')
                        <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Gambar Blog -->
                    <div>
                        <label for="gambar" class="mb-2 block text-sm font-semibold text-gray-700">Gambar blog @unless ($isEdit)<span class="text-[#D21502]">*</span>@endunless</label>
                        <div class="relative">
                            <input type="file" id="gambar" name="gambar" accept=".jpg,.jpeg,.png,image/jpeg,image/png" class="w-full rounded-xl border bg-gray-50 py-3 pl-4 pr-4 text-sm text-gray-900 outline-none transition file:mr-4 file:rounded-lg file:border-0 file:bg-[#2D3748] file:px-3 file:py-2 file:text-xs file:font-semibold file:text-white hover:file:bg-[#1A202C] focus:border-[#D21502] focus:bg-white focus:ring-4 focus:ring-[#D21502]/10 @error('gambar') border-red-500 @else border-gray-200 @enderror" {{ $isEdit ? '' : 'required' }}>
                        </div>
                        <p class="mt-2 text-xs text-gray-400">{{ $isEdit ? 'Biarkan kosong jika tidak ingin mengganti gambar.' : 'JPG atau PNG, maksimal 5 MB.' }}</p>
                        @if ($isEdit && $blog->url)
                            <img src="{{ asset('storage/' . $blog->url) }}" alt="{{ $blog->judul }}" class="mt-4 h-32 w-full rounded-xl object-cover">
                        @endif
                        @error('gambar')
                        <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mt-10 flex flex-col-reverse gap-3 border-t border-gray-100 pt-6 sm:flex-row sm:justify-end">
                    <a href="{{ route('blog') }}" class="inline-flex items-center justify-center rounded-xl border border-gray-200 px-5 py-3 text-sm font-semibold text-gray-600 transition hover:border-gray-300 hover:bg-gray-50">Cancel</a>
                    <button type="submit" class="group inline-flex items-center justify-center gap-3 rounded-xl bg-[#D21502] px-5 py-3 font-poppins text-sm font-semibold text-white shadow-lg shadow-[#D21502]/20 transition hover:bg-[#b71102] hover:shadow-xl hover:shadow-[#D21502]/25">
                        {{ $isEdit ? 'Update blog' : 'Save blog' }}
                        <i class="fa-solid fa-arrow-right text-xs transition-transform group-hover:translate-x-1"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection