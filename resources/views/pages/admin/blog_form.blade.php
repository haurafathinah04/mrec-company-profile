@extends('layouts.app')

@section('title', $blog ? 'MREC - Edit Blog' : 'MREC - Tambah Blog')

@section('content')
<section class="relative min-h-screen overflow-hidden bg-[#f5f6f8] px-5 pb-20 pt-32 sm:px-8 lg:px-12">
    <div class="pointer-events-none absolute -right-24 top-28 h-72 w-72 rounded-full border-[28px] border-[#D21502]/10 sm:h-96 sm:w-96"></div>
    <div class="pointer-events-none absolute -bottom-24 -left-24 h-80 w-80 rounded-full border border-[#2D3748]/10"></div>

    <div class="relative mx-auto max-w-6xl">
        <div class="mb-8 flex flex-col justify-between gap-5 sm:flex-row sm:items-end">
            <div>
                <p class="font-poppins text-xs font-semibold uppercase tracking-[0.28em] text-[#D21502]">Blog management</p>
                <h1 class="mt-3 font-sora text-3xl font-bold leading-tight text-[#1f2937] sm:text-4xl">{{ $blog ? 'Edit blog' : 'Add a new blog' }}</h1>
            </div>
            <a href="{{ route('blog') }}" class="inline-flex items-center gap-2 self-start text-sm font-semibold text-[#2D3748] transition hover:text-[#D21502] sm:self-auto">
                <i class="fa-solid fa-arrow-left text-xs"></i>
                Back to blog
            </a>
        </div>

        <div class="grid overflow-hidden rounded-[2rem] bg-white shadow-[0_24px_70px_rgba(45,55,72,0.12)] lg:grid-cols-[0.72fr_1.28fr]">
            <div class="relative hidden min-h-[620px] overflow-hidden bg-[#2D3748] p-10 text-white lg:flex lg:flex-col lg:justify-between lg:p-12">
                <div class="absolute -right-28 -top-28 h-80 w-80 rounded-full border-[34px] border-white/10"></div>
                <div class="absolute -bottom-20 -left-20 h-64 w-64 rounded-full border border-[#D21502]/50"></div>

                <div class="relative">
                    <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#D21502] text-lg shadow-lg shadow-black/20">
                        <i class="fa-solid fa-pen-nib"></i>
                    </span>
                    <p class="mt-16 font-poppins text-xs font-semibold uppercase tracking-[0.24em] text-[#ff8b7f]">MREC stories</p>
                    <h2 class="mt-5 max-w-xs font-sora text-3xl font-bold leading-tight">{{ $blog ? 'Refine the story.' : 'Give every idea a place to live.' }}</h2>
                    <p class="mt-5 max-w-xs text-sm leading-7 text-white/65">Bagikan insight, proses, dan cerita di balik karya yang kami bangun.</p>
                </div>

                <div class="relative flex items-center gap-3 text-xs uppercase tracking-[0.2em] text-white/50">
                    <span class="h-px w-10 bg-[#D21502]"></span>
                    <span>{{ $blog ? 'Edit entry' : 'New entry' }}</span>
                </div>
            </div>

            <form action="{{ $blog ? route('blogs.update', $blog) : route('blogs.store') }}" method="POST" enctype="multipart/form-data" class="p-7 sm:p-10 lg:p-14">
            @csrf
            @if ($blog)
                @method('PUT')
            @endif

            <div class="mb-8 border-b border-gray-100 pb-6">
                <p class="font-poppins text-xs font-semibold uppercase tracking-[0.2em] text-gray-400">Blog details</p>
                @if (session('success'))
                <div class="mt-8 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-left text-sm text-green-700" role="status">
                    {{ session('success') }}
                </div>
                @else
                <p class="mt-2 text-sm text-gray-500">Fields marked with <span class="text-[#D21502]">*</span> are required.</p>
                @endif
                @if ($errors->any())
                <p class="mt-2 text-sm text-red-600">Please check the highlighted fields below.</p>
                @endif
            </div>

            <div class="space-y-6">
                <div>
                    <label for="judul" class="mb-2 block text-sm font-semibold text-gray-700">Blog title <span class="text-[#D21502]">*</span></label>
                    <input type="text" id="judul" name="judul" value="{{ old('judul', $blog?->judul) }}" placeholder="e.g. Exploring immersive technology" maxlength="255" class="w-full rounded-xl border bg-gray-50 px-4 py-3.5 text-sm text-gray-900 outline-none transition placeholder:text-gray-400 focus:border-[#D21502] focus:bg-white focus:ring-4 focus:ring-[#D21502]/10 @error('judul') border-red-500 @else border-gray-200 @enderror" required>
                    @error('judul')
                    <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="gambar" class="mb-2 block text-sm font-semibold text-gray-700">Blog image @if (!$blog)<span class="text-[#D21502]">*</span>@endif</label>
                    @if ($blog)
                        <div class="mb-3 flex items-center gap-4 rounded-xl border border-gray-100 bg-gray-50 p-3">
                            <img src="{{ asset('storage/' . $blog->url) }}" alt="{{ $blog->judul }}" class="h-16 w-24 rounded-lg object-cover">
                            <p class="text-xs text-gray-500">Gambar saat ini. Pilih gambar baru jika ingin menggantinya.</p>
                        </div>
                    @endif
                    <div class="relative">
                        <i class="fa-regular fa-image pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <input type="file" id="gambar" name="gambar" accept=".jpg,.jpeg,.png,image/jpeg,image/png" @required(!$blog) class="w-full rounded-xl border bg-gray-50 py-3 pl-11 pr-4 text-sm text-gray-900 outline-none transition file:mr-4 file:rounded-lg file:border-0 file:bg-[#2D3748] file:px-3 file:py-2 file:text-xs file:font-semibold file:text-white hover:file:bg-[#1A202C] focus:border-[#D21502] focus:bg-white focus:ring-4 focus:ring-[#D21502]/10 @error('gambar') border-red-500 @else border-gray-200 @enderror">
                    </div>
                    <p class="mt-2 text-xs text-gray-400">JPG atau PNG, maksimal 5 MB.</p>
                    @error('gambar')
                    <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="deskripsi" class="mb-2 block text-sm font-semibold text-gray-700">Blog description <span class="text-[#D21502]">*</span></label>
                    <div class="relative">
                        <i class="fa-solid fa-align-left pointer-events-none absolute left-4 top-5 text-gray-400"></i>
                        <textarea id="deskripsi" name="deskripsi" rows="8" required placeholder="Write the story behind this blog post" class="w-full rounded-xl border bg-gray-50 py-3.5 pl-11 pr-4 text-sm text-gray-900 outline-none transition placeholder:text-gray-400 focus:border-[#D21502] focus:bg-white focus:ring-4 focus:ring-[#D21502]/10 @error('deskripsi') border-red-500 @else border-gray-200 @enderror">{{ old('deskripsi', $blog?->deskripsi) }}</textarea>
                    </div>
                    @error('deskripsi')
                    <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="mt-10 flex flex-col-reverse gap-3 border-t border-gray-100 pt-6 sm:flex-row sm:justify-end">
                <a href="{{ route('blog') }}" class="inline-flex items-center justify-center rounded-xl border border-gray-200 px-5 py-3 text-sm font-semibold text-gray-600 transition hover:border-gray-300 hover:bg-gray-50">Cancel</a>
                <button type="submit" class="group inline-flex items-center justify-center gap-3 rounded-xl bg-[#D21502] px-5 py-3 font-poppins text-sm font-semibold text-white shadow-lg shadow-[#D21502]/20 transition hover:bg-[#b71102] hover:shadow-xl hover:shadow-[#D21502]/25">
                    {{ $blog ? 'Update blog' : 'Save blog' }}
                    <i class="fa-solid fa-arrow-right text-xs transition-transform group-hover:translate-x-1"></i>
                </button>
            </div>
            </form>
        </div>
    </div>
</section>
@endsection