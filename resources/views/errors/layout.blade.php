<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ config('app.name') }}</title>
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    @vite(['resources/css/app.css'])
</head>

<body class="bg-brand-black text-brand-white font-poppins antialiased selection:bg-brand-yellow selection:text-black overflow-x-hidden">
    <div class="min-h-screen flex items-center justify-center relative overflow-hidden">
        {{-- Geometric Background --}}
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:32px_32px]"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-brand-black/50 to-brand-black"></div>
            {{-- Accent Glow --}}
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full bg-[radial-gradient(circle_at_50%_50%,rgba(230,177,46,0.1)_0%,transparent_50%)]"></div>
        </div>

        {{-- Content --}}
        <div class="relative z-10 w-full max-w-4xl mx-auto px-6 py-20 text-center">
            @yield('content')
        </div>

        {{-- Decorative Elements --}}
        <div class="absolute top-8 left-8 w-20 h-20 border border-brand-yellow/10 rotate-45"></div>
        <div class="absolute bottom-8 right-8 w-32 h-32 border border-white/5 rounded-full"></div>
        <div class="absolute top-1/4 right-1/4 w-2 h-2 bg-brand-yellow/30 rounded-full"></div>
        <div class="absolute bottom-1/3 left-1/4 w-3 h-3 bg-white/10 rounded-full"></div>
    </div>
</body>
</html>
