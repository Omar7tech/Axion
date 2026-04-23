<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ 'AXION - ' . ($title ?? config('app.name')) }}</title>
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Axion" />
    <link rel="manifest" href="/site.webmanifest" />
   <!--  <link rel="stylesheet" href="https://unpkg.com/kursor/dist/kursor.css"> -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>



<body
    class="bg-brand-black text-brand-white font-poppins  selection:bg-brand-yellow selection:text-black overflow-x-hidden">
    @persist('navigation')
        <x-nav />
    @endpersist

    <main class="pt-[66px]">
        {{ $slot }}
    </main>

    @persist('footer')
        <x-footer />
    @endpersist

    @livewireScripts
    <!-- <script src="https://cdn.jsdelivr.net/gh/SH20RAJ/ScrollProgressJS@main/ScrollProgress.js"></script> -->
</body>
<!-- <script src="https://unpkg.com/kursor"></script>
<script>
    new kursor({
        removeDefaultCursor: true,
        type: 1,
        color: '#ffffff'
    })
</script> -->

</html>