@extends('errors::layout')

@section('title', '404 - Page Not Found')

@section('content')
    <div class="space-y-8">
        {{-- Error Code --}}
        <div class="relative">
            <h1 class="text-[12rem] md:text-[16rem] font-black uppercase leading-none tracking-tighter">
                <span class="text-transparent" style="-webkit-text-stroke: 2px rgba(230,177,46,0.3);">404</span>
            </h1>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-brand-yellow text-2xl md:text-4xl font-black uppercase tracking-wider">
                    Not Found
                </div>
            </div>
        </div>

        {{-- Message --}}
        <div class="space-y-4 max-w-2xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-black uppercase tracking-tight text-white">
                Page Does Not Exist
            </h2>
            <p class="text-white/60 text-base md:text-lg leading-relaxed">
                The page you're looking for seems to have vanished into the digital void.
                It might have been moved, deleted, or never existed in the first place.
            </p>
        </div>

        {{-- Actions --}}
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-8">
            <a href="{{ route('home') }}"
                class="inline-flex items-center justify-center gap-3 px-8 py-4 bg-brand-yellow text-black font-black uppercase text-sm tracking-wider hover:brightness-105 transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="m11 17-5-5m0 0 5-5m-5 5h12"/>
                </svg>
                Back to Home
            </a>
            <a href="{{ route('contact-us') }}"
                class="inline-flex items-center justify-center gap-3 px-8 py-4 border-2 border-white/20 text-white font-black uppercase text-sm tracking-wider hover:border-brand-yellow/40 hover:text-brand-yellow transition-all">
                Contact Support
            </a>
        </div>

        {{-- Suggested Links --}}
        <div class="pt-12 border-t border-white/5 max-w-lg mx-auto">
            <p class="text-xs uppercase tracking-widest text-white/30 mb-4">You might be looking for:</p>
            <div class="flex flex-wrap items-center justify-center gap-3">
                @foreach([
                    ['Home', route('home')],
                    ['Businesses', route('business.index')],
                    ['Investments', route('investments')],
                    ['About Us', route('about-us')],
                ] as [$label, $href])
                <a href="{{ $href }}"
                    class="px-4 py-2 border border-white/10 text-white/70 hover:text-brand-yellow hover:border-brand-yellow/30 text-xs font-bold uppercase tracking-wider transition-all">
                    {{ $label }}
                </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
