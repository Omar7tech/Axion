@extends('errors::layout')

@section('title', '403 - Forbidden')

@section('content')
    <div class="space-y-8">
        {{-- Error Code --}}
        <div class="relative">
            <h1 class="text-[12rem] md:text-[16rem] font-black uppercase leading-none tracking-tighter">
                <span class="text-transparent" style="-webkit-text-stroke: 2px rgba(230,177,46,0.3);">403</span>
            </h1>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-brand-yellow text-2xl md:text-4xl font-black uppercase tracking-wider">
                    Forbidden
                </div>
            </div>
        </div>

        {{-- Message --}}
        <div class="space-y-4 max-w-2xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-black uppercase tracking-tight text-white">
                Access Denied
            </h2>
            <p class="text-white/60 text-base md:text-lg leading-relaxed">
                {{ $exception->getMessage() ?: 'You don\'t have permission to access this resource. If you believe this is a mistake, please contact support.' }}
            </p>
        </div>

        {{-- Lock Icon --}}
        <div class="flex justify-center py-6">
            <div class="w-20 h-20 rounded-full bg-red-500/10 border border-red-500/20 flex items-center justify-center">
                <svg class="w-10 h-10 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                </svg>
            </div>
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
    </div>
@endsection
