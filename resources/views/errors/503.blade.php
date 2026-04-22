@extends('errors::layout')

@section('title', '503 - Service Unavailable')

@section('content')
    <div class="space-y-8">
        {{-- Error Code --}}
        <div class="relative">
            <h1 class="text-[12rem] md:text-[16rem] font-black uppercase leading-none tracking-tighter">
                <span class="text-transparent" style="-webkit-text-stroke: 2px rgba(230,177,46,0.3);">503</span>
            </h1>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-brand-yellow text-2xl md:text-4xl font-black uppercase tracking-wider">
                    Offline
                </div>
            </div>
        </div>

        {{-- Message --}}
        <div class="space-y-4 max-w-2xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-black uppercase tracking-tight text-white">
                Maintenance Mode
            </h2>
            <p class="text-white/60 text-base md:text-lg leading-relaxed">
                {{ $exception->getMessage() ?: 'We\'re currently performing scheduled maintenance to improve our services. We\'ll be back online shortly.' }}
            </p>
        </div>

        {{-- Maintenance Icon --}}
        <div class="flex justify-center py-6">
            <div class="w-20 h-20 rounded-full bg-brand-yellow/10 border border-brand-yellow/20 flex items-center justify-center">
                <svg class="w-10 h-10 text-brand-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
            </div>
        </div>

        {{-- Action --}}
        <div class="flex flex-col items-center justify-center gap-4 pt-8">
            <button onclick="window.location.reload()"
                class="inline-flex items-center justify-center gap-3 px-8 py-4 bg-brand-yellow text-black font-black uppercase text-sm tracking-wider hover:brightness-105 transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                </svg>
                Check Again
            </button>
            <p class="text-xs text-white/30 uppercase tracking-wider">
                Thank you for your patience
            </p>
        </div>
    </div>
@endsection
