@extends('layouts.app')

@section('title', 'MREC - Ubah Password')

@section('content')

    <div class="relative overflow-hidden bg-[#f5f6f8] px-5 pb-20 pt-32 sm:px-8 lg:px-12">
        <div class="pointer-events-none absolute -right-24 top-24 h-72 w-72 rounded-full border-[28px] border-[#D21502]/10 sm:h-96 sm:w-96"></div>
        <div class="pointer-events-none absolute -bottom-32 -left-20 h-72 w-72 rounded-full bg-[#2D3748]/5"></div>

        <div class="relative mx-auto grid max-w-6xl overflow-hidden rounded-[2rem] bg-white shadow-[0_24px_70px_rgba(45,55,72,0.14)] lg:grid-cols-[0.9fr_1.1fr]">
            <div class="relative flex min-h-[560px] flex-col justify-between overflow-hidden bg-[#2D3748] p-8 text-white sm:p-12 lg:p-14">
                <div class="absolute -right-24 -top-24 h-72 w-72 rounded-full border-[34px] border-white/10"></div>
                <div class="absolute -bottom-20 -left-20 h-60 w-60 rounded-full border border-[#D21502]/50"></div>

                <div class="relative">
                    <p class="mt-16 max-w-sm font-poppins text-xs font-semibold uppercase tracking-[0.28em] text-[#ff8b7f]">Account settings</p>
                    <h1 class="mt-5 max-w-md font-sora text-4xl font-bold leading-tight sm:text-5xl">Keep your account secure.</h1>
                    <p class="mt-6 max-w-sm text-base leading-7 text-white/70">Perbarui password secara berkala untuk menjaga akses ke ruang kerja MREC tetap aman.</p>
                </div>

                <div class="relative mt-12 flex items-center gap-3 text-sm text-white/60">
                    <span class="h-px w-10 bg-[#D21502]"></span>
                    <span>Telkom University</span>
                </div>
            </div>

            <div class="p-8 sm:p-12 lg:p-16">
                <div class="mx-auto max-w-md">
                    <p class="font-poppins text-sm font-semibold uppercase tracking-[0.2em] text-[#D21502]">Security</p>
                    <h2 class="mt-3 font-sora text-3xl font-bold text-[#1f2937] sm:text-4xl">Ubah password</h2>
                    <p class="mt-4 text-sm leading-6 text-gray-500">Masukkan password lama dan password baru Anda.</p>

                    @if (session('status'))
                        <div class="mt-6 flex items-start gap-3 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
                            <i class="fa-solid fa-circle-check mt-0.5"></i>
                            <span>{{ session('status') }}</span>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.update') }}" class="mt-8 space-y-5">
                        @csrf
                        @method('PUT')

                        <div>
                            <label for="current_password" class="mb-2 block text-sm font-semibold text-gray-700">Password sekarang</label>
                            <div class="relative">
                                <i class="fa-solid fa-lock pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                <input type="password" id="current_password" name="current_password" class="w-full rounded-xl border bg-gray-50 py-3.5 pl-11 pr-4 text-sm text-gray-900 outline-none transition placeholder:text-gray-400 focus:border-[#D21502] focus:bg-white focus:ring-4 focus:ring-[#D21502]/10 @error('current_password') border-red-500 @else border-gray-200 @enderror" required autocomplete="current-password">
                            </div>
                            @error('current_password')
                                <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="password" class="mb-2 block text-sm font-semibold text-gray-700">Password baru</label>
                            <div class="relative">
                                <i class="fa-solid fa-key pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                <input type="password" id="password" name="password" class="w-full rounded-xl border bg-gray-50 py-3.5 pl-11 pr-4 text-sm text-gray-900 outline-none transition placeholder:text-gray-400 focus:border-[#D21502] focus:bg-white focus:ring-4 focus:ring-[#D21502]/10 @error('password') border-red-500 @else border-gray-200 @enderror" required autocomplete="new-password">
                            </div>
                            @error('password')
                                <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="password_confirmation" class="mb-2 block text-sm font-semibold text-gray-700">Konfirmasi password baru</label>
                            <div class="relative">
                                <i class="fa-solid fa-shield-halved pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full rounded-xl border bg-gray-50 py-3.5 pl-11 pr-4 text-sm text-gray-900 outline-none transition placeholder:text-gray-400 focus:border-[#D21502] focus:bg-white focus:ring-4 focus:ring-[#D21502]/10 @error('password_confirmation') border-red-500 @else border-gray-200 @enderror" required autocomplete="new-password">
                            </div>
                            @error('password_confirmation')
                                <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="group flex w-full items-center justify-center gap-3 rounded-xl bg-[#D21502] px-5 py-3.5 font-poppins text-sm font-semibold text-white shadow-lg shadow-[#D21502]/20 transition hover:bg-[#b71102] hover:shadow-xl hover:shadow-[#D21502]/25">
                            Simpan password
                            <i class="fa-solid fa-arrow-right text-xs transition-transform group-hover:translate-x-1"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection