<footer
    class="relative pt-12 pb-8 px-4 sm:px-6 lg:px-16 overflow-hidden bg-[#020202] border-t border-white/10 font-sans">

    <div class="absolute inset-0 pointer-events-none opacity-[0.04]"
        style="background-image: linear-gradient(#fff 1px, transparent 1px), linear-gradient(90deg, #fff 1px, transparent 1px); background-size: 50px 50px;">
    </div>
    <div class="absolute inset-0 bg-gradient-to-t from-[#020202] via-transparent to-transparent"></div>

    @php
        $settings = app(\App\Settings\GeneralSettings::class);
        $icons = [
            'facebook' => '<path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>',
            'instagram' => '<rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/>',
            'x' => '<path d="M4 4l11.733 16h4.267l-11.733 -16z"/><path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"/>',
            'linkedin' => '<path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/>',
            'youtube' => '<path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.3 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/>',
            'tiktok' => '<path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"/>',
            'pinterest' => '<line x1="12" x2="12" y1="8" y2="16"/><path d="M8 10a4 4 0 1 0 8 0c0-2.206-1.794-4-4-4s-4 1.794-4 4c0 .307.035.604.1.886"/><path d="M12 12c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2Z"/>',
            'snapchat' => '<path d="M12 3c4.418 0 6 3 6 5c0 .7-.133 1.266-.4 1.7c-.267.434-.6 1.3-.6 2.3c0 1 .333 1.866.6 2.3c.267.434.4 1 .4 1.7c0 2-1.582 5-6 5s-6-3-6-5c0-.7.133-1.266.4-1.7c.267-.434.6-1.3.6-2.3c0-1-.333-1.866-.6-2.3c-.267-.434-.4-1-.4-1.7c0-2 1.582-5 6-5z"/><path d="M5 14c-2 0-3 1-3 2s1 1 2 1h1m11 0h1c1 0 2 0 2-1s-1-2-3-2"/>',
            'whatsapp' => '<path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>',
            'telegram' => '<path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/>',
        ];
    @endphp

    <div class="container mx-auto max-w-7xl relative z-10">

        <div class="flex flex-col lg:flex-row justify-between items-start gap-8 lg:gap-12 mb-10">

            <div class="space-y-3">
                <h2
                    class="text-4xl sm:text-5xl lg:text-6xl font-black uppercase tracking-tighter italic text-white leading-none">
                    Axion<span class="text-brand-yellow">.</span>
                </h2>
                <p class="text-sm sm:text-base text-white/40 uppercase tracking-[0.3em] leading-tight">
                    Industrial <br class="hidden sm:block" /> Excellence.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row gap-8 lg:gap-16 w-full lg:w-auto">
                {{-- 2x2 Links Grid --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-5 gap-y-2">
                    <a href="{{ route('home') }}" wire:navigate class="text-base font-light uppercase tracking-[0.1em] text-white/50 hover:text-white transition-colors">Home</a>
                    <a href="{{ route('business.index') }}" wire:navigate class="text-base font-light uppercase tracking-[0.1em] text-white/50 hover:text-white transition-colors">Businesses</a>
                    <a href="{{ route('about-us') }}" wire:navigate class="text-base font-light uppercase tracking-[0.1em] text-white/50 hover:text-white transition-colors">About Us</a>
                    <a href="{{ route('investments') }}" wire:navigate class="text-base font-light uppercase tracking-[0.1em] text-white/50 hover:text-white transition-colors">Investments</a>
                    <a href="{{ route('global-partnerships') }}" wire:navigate class="text-base font-light uppercase tracking-[0.1em] text-white/50 hover:text-white transition-colors">Partnerships</a>
                    <a href="{{ route('contact-us') }}" wire:navigate class="text-base font-light uppercase tracking-[0.1em] text-white/50 hover:text-white transition-colors">Contact Us</a>
                    <a href="{{ route('careers.index') }}" wire:navigate class="text-base font-light uppercase tracking-[0.1em] text-white/50 hover:text-white transition-colors">Careers</a>
                </div>

                {{-- Inquiries Section --}}
                <div class="space-y-4">
                    <h6 class="text-sm font-black uppercase tracking-[0.2em] text-brand-yellow">Inquiries</h6>
                    <div class="space-y-4">
                        {{-- Phone Numbers --}}
                        @if(!empty($settings->contact_phones))
                            <div class="space-y-1">
                                @foreach($settings->contact_phones as $phone)
                                    <a href="tel:{{ $phone['phone'] }}" 
                                       class="flex items-center gap-2 text-sm text-white/60 hover:text-white transition-colors">
                                        <svg class="w-4 h-4 text-brand-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                        </svg>
                                        <span>{{ $phone['label'] }}:</span>
                                        <span class="font-medium">{{ $phone['phone'] }}</span>
                                    </a>
                                @endforeach
                            </div>
                        @endif

                        {{-- Email Addresses --}}
                        @if(!empty($settings->contact_emails))
                            <div class="space-y-1">
                                @foreach($settings->contact_emails as $email)
                                    <a href="mailto:{{ $email['email'] }}" 
                                       class="flex items-center gap-2 text-sm text-white/60 hover:text-white transition-colors">
                                        <svg class="w-4 h-4 text-brand-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                        <span>{{ $email['label'] }}:</span>
                                        <span class="font-medium">{{ $email['email'] }}</span>
                                    </a>
                                @endforeach
                            </div>
                        @endif

                        {{-- Social Media Icons --}}
                        @if(!empty($settings->social_media))
                            <div class="flex flex-wrap gap-3 pt-2">
                                @foreach($settings->social_media as $social)
                                    @if(isset($icons[$social['platform']]))
                                        <a href="{{ $social['url'] }}" target="_blank" rel="noopener noreferrer"
                                            class="p-1.5 sm:p-2 rounded-full bg-white/5 hover:bg-white/10 transition-colors group"
                                            aria-label="{{ ucfirst($social['platform']) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="text-white/50 group-hover:text-white transition-colors sm:w-5 sm:h-5">
                                                {!! $icons[$social['platform']] !!}
                                            </svg>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div
            class="flex flex-col sm:flex-row justify-between items-center pt-6 border-t border-white/10 gap-4 sm:gap-6">
            <p class="text-xs font-black text-white uppercase tracking-[0.3em] text-center sm:text-left">
                {{ now()->year }} AXION International GROUP — ALL RIGHTS RESERVED
            </p>

            <div
                class="flex flex-wrap justify-center sm:justify-end gap-4 sm:gap-8 text-xs font-black text-white uppercase tracking-[0.15em]">
                <a target="_blank" href="{{ route('privacy-policy') }}"
                    class="hover:text-brand-yellow transition-colors">Privacy Policy</a>
                <a target="_blank" href="{{ route('terms-and-conditions') }}"
                    class="hover:text-brand-yellow transition-colors">Terms of Service</a>
                <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
                    class="text-brand-yellow hover:text-white transition-all transform hover:-translate-y-1">TOP
                    ↑</button>
            </div>
        </div>
    </div>
</footer>