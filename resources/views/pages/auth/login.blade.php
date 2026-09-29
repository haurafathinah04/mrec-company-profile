@extends('layouts.app')

@section('title', 'MREC - Login')

@section('content')

    <div class="relative overflow-hidden bg-[#f5f6f8] px-5 pb-20 pt-32 sm:px-8 lg:px-12">
        <div class="pointer-events-none absolute -right-24 top-24 h-72 w-72 rounded-full border-[28px] border-[#D21502]/10 sm:h-96 sm:w-96"></div>
        <div class="pointer-events-none absolute -bottom-32 -left-20 h-72 w-72 rounded-full bg-[#2D3748]/5"></div>

        <div class="relative mx-auto grid max-w-6xl overflow-hidden rounded-[2rem] bg-white shadow-[0_24px_70px_rgba(45,55,72,0.14)] lg:grid-cols-[0.9fr_1.1fr]">
            <div class="relative flex min-h-[560px] flex-col justify-between overflow-hidden bg-[#2D3748] p-8 text-white sm:p-12 lg:p-14">
                <div class="absolute -right-24 -top-24 h-72 w-72 rounded-full border-[34px] border-white/10"></div>
                <div class="absolute -bottom-20 -left-20 h-60 w-60 rounded-full border border-[#D21502]/50"></div>

                <div class="relative">
                    <p class="mt-16 max-w-sm font-poppins text-xs font-semibold uppercase tracking-[0.28em] text-[#ff8b7f]">Metaverse Research &amp; Experience Center</p>
                    <h1 class="mt-5 max-w-md font-sora text-4xl font-bold leading-tight sm:text-5xl">Ideas become experiences.</h1>
                    <p class="mt-6 max-w-sm text-base leading-7 text-white/70">Masuk ke ruang kerja MREC dan lanjutkan perjalananmu dalam membangun inovasi digital.</p>
                </div>

                <div class="relative mt-12 flex items-center gap-3 text-sm text-white/60">
                    <span class="h-px w-10 bg-[#D21502]"></span>
                    <span>Telkom University</span>
                </div>
            </div>

            <div class="p-8 sm:p-12 lg:p-16">
                <div class="mx-auto max-w-md">
                    <p class="font-poppins text-sm font-semibold uppercase tracking-[0.2em] text-[#D21502]">Admin access</p>
                    <h2 class="mt-3 font-sora text-3xl font-bold text-[#1f2937] sm:text-4xl">Welcome back</h2>


                    <form method="POST" action="{{ url('/login') }}" class="mt-9 space-y-5">
                        @csrf

                        <div>
                            <label for="email" class="mb-2 block text-sm font-semibold text-gray-700">Email address</label>
                            <div class="relative">
                                <i class="fa-regular fa-envelope pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                <input id="email" type="email" name="email" placeholder="mail@example.com" value="{{ old('email') }}" class="w-full rounded-xl border bg-gray-50 py-3.5 pl-11 pr-4 text-sm text-gray-900 outline-none transition placeholder:text-gray-400 focus:border-[#D21502] focus:bg-white focus:ring-4 focus:ring-[#D21502]/10 @error('error_login') border-red-500 @else border-gray-200 @enderror" required autofocus>
                            </div>
                            @error('error_login')
                                <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <div class="mb-2 flex items-center justify-between">
                                <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
                            </div>
                            <div class="relative">
                                <i class="fa-solid fa-lock pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                <input id="password" type="password" name="password" placeholder="Enter your password" class="w-full rounded-xl border bg-gray-50 py-3.5 pl-11 pr-4 text-sm text-gray-900 outline-none transition placeholder:text-gray-400 focus:border-[#D21502] focus:bg-white focus:ring-4 focus:ring-[#D21502]/10 @error('password') border-red-500 @else border-gray-200 @enderror" required>
                            </div>
                        </div>

                        <label class="flex cursor-pointer items-center gap-3 pt-1 text-sm text-gray-600">
                            <input type="checkbox" name="remember" class="h-4 w-4 rounded border-gray-300 accent-[#D21502]">
                            <span>Remember me</span>
                        </label>

                        <button type="submit" class="group flex w-full items-center justify-center gap-3 rounded-xl bg-[#D21502] px-5 py-3.5 font-poppins text-sm font-semibold text-white shadow-lg shadow-[#D21502]/20 transition hover:bg-[#b71102] hover:shadow-xl hover:shadow-[#D21502]/25">
                            Sign in
                            <i class="fa-solid fa-arrow-right text-xs transition-transform group-hover:translate-x-1"></i>
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection