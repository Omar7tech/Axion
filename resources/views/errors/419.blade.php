@extends('errors::layout')

@section('title', '419 - Page Expired')

@section('content')
    <div class="space-y-8">
        {{-- Error Code --}}
        <div class="relative">
            <h1 class="text-[12rem] md:text-[16rem] font-black uppercase leading-none tracking-tighter">
                <span class="text-transparent" style="-webkit-text-stroke: 2px rgba(230,177,46,0.3);">419</span>
            </h1>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-brand-yellow text-2xl md:text-4xl font-black uppercase tracking-wider">
                    Expired
                </div>
            </div>
        </div>

        {{-- Message --}}
        <div class="space-y-4 max-w-2xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-black uppercase tracking-tight text-white">
                Page Expired
            </h2>
            <p class="text-white/60 text-base md:text-lg leading-relaxed">
                Your session has expired. This usually happens when the page has been open for too long.
                Please refresh and try again.
            </p>
        </div>

        {{-- Clock Icon --}}
        <div class="flex justify-center py-6">
            <div class="w-20 h-20 rounded-full bg-orange-500/10 border border-orange-500/20 flex items-center justify-center">
                <svg class="w-10 h-10 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
        </div>

        {{-- Actions --}}
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-8">
            <button onclick="window.location.reload()"
                class="inline-flex items-center justify-center gap-3 px-8 py-4 bg-brand-yellow text-black font-black uppercase text-sm tracking-wider hover:brightness-105 transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                </svg>
                Refresh Page
            </button>
            <a href="{{ route('home') }}"
                class="inline-flex items-center justify-center gap-3 px-8 py-4 border-2 border-white/20 text-white font-black uppercase text-sm tracking-wider hover:border-brand-yellow/40 hover:text-brand-yellow transition-all">
                Back to Home
            </a>
        </div>
    </div>
@endsection
