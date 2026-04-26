<footer class="relative pt-12 pb-8 px-4 sm:px-6 lg:px-16 overflow-hidden bg-[#020202] border-t border-white/10 font-sans">
    
    <div class="absolute inset-0 pointer-events-none opacity-[0.04]" 
         style="background-image: linear-gradient(#fff 1px, transparent 1px), linear-gradient(90deg, #fff 1px, transparent 1px); background-size: 50px 50px;">
    </div>
    <div class="absolute inset-0 bg-gradient-to-t from-[#020202] via-transparent to-transparent"></div>

    <div class="container mx-auto max-w-7xl relative z-10">
        
        <div class="flex flex-col lg:flex-row justify-between items-start gap-8 lg:gap-12 mb-10">
            
            <div class="space-y-3">
                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-black uppercase tracking-tighter italic text-white leading-none">
                    Axion<span class="text-brand-yellow">.</span>
                </h2>
                <p class="text-sm sm:text-base text-white/40 uppercase tracking-[0.3em] leading-tight">
                    Industrial <br class="hidden sm:block" /> Excellence.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-x-16 lg:gap-y-8 w-full lg:w-auto">
                <div class="space-y-3">
                    <h6 class="text-sm font-black uppercase tracking-[0.2em] text-brand-yellow">Ecosystem</h6>
                    <ul class="text-base font-light uppercase tracking-[0.1em] space-y-1 text-white/50">
                        <li><a href="#" class="hover:text-white transition-colors">Architecture</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Trading</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Digital</a></li>
                    </ul>
                </div>

                <div class="space-y-3">
                    <h6 class="text-sm font-black uppercase tracking-[0.2em] text-brand-yellow">Company</h6>
                    <ul class="text-base font-light uppercase tracking-[0.1em] space-y-1 text-white/50">
                        <li><a href="{{ route('about-us') }}" wire:navigate class="hover:text-white transition-colors">About</a></li>
                        <li><a href="{{ route('global-partnerships') }}" wire:navigate class="hover:text-white transition-colors">Partners</a></li>
                        <li><a href="{{ route('careers.index') }}" wire:navigate class="hover:text-white transition-colors">Careers</a></li>
                    </ul>
                </div>

                <div class="space-y-3 sm:col-span-2 lg:col-span-1">
                    <h6 class="text-sm font-black uppercase tracking-[0.2em] text-brand-yellow">Inquiries</h6>
                    <div class="space-y-3">
                        <a href="mailto:support@axion.com" class="block text-lg sm:text-xl font-light text-white hover:text-brand-yellow transition-colors tracking-tight uppercase">support@axion.com</a>
                        <div class="flex flex-wrap gap-3 pt-1">
                            @php
                                $icons = [
                                    'facebook' => '<path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>',
                                    'instagram' => '<rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/>',
                                    'x' => '<path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>',
                                    'linkedin' => '<path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/>',
                                    'youtube' => '<path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.3 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/>',
                                    'tiktok' => '<path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"/>',
                                    'pinterest' => '<circle cx="12" cy="12" r="10"/><path d="M8 12c0-2.2 1.8-4 4-4s4 1.8 4 4c0 2.2-1.8 4-4 4"/>',
                                    'snapchat' => '<path d="M15.5 3c-1 0-1.5.5-2 1s-1.5 1-2.5 1c-1 0-1.5-.5-2-1s-1-1-2-1c-1.5 0-3 1.5-3 3 0 2 1 4 2 6s3 6 3 8c0 1.5 1 2 2 2s2-.5 3-1c1-.5 2-1 3-1s2 .5 3 1c1 .5 2 1 3 1s2-.5 2-2c0-2 2-6 3-8s2-4 2-6c0-1.5-1.5-3-3-3z"/>',
                                    'whatsapp' => '<path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>',
                                    'telegram' => '<path d="m22 2-7 20-4-9-9-4z"/><path d="M22 2 11 13"/>',
                                ];
                            @endphp
                            @foreach(app(\App\Settings\GeneralSettings::class)->social_media as $social)
                                @if(isset($icons[$social['platform']]))
                                    <a href="{{ $social['url'] }}" target="_blank" rel="noopener noreferrer" 
                                       class="p-1.5 sm:p-2 rounded-full bg-white/5 hover:bg-white/10 transition-colors group"
                                       aria-label="{{ ucfirst($social['platform']) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" 
                                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                             class="text-white/50 group-hover:text-white transition-colors sm:w-5 sm:h-5">
                                            {!! $icons[$social['platform']] !!}
                                        </svg>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col sm:flex-row justify-between items-center pt-6 border-t border-white/10 gap-4 sm:gap-6">
            <p class="text-xs font-black text-white uppercase tracking-[0.3em] text-center sm:text-left">
                2026 AXION International GROUP — ALL RIGHTS RESERVED
            </p>
            
            <div class="flex flex-wrap justify-center sm:justify-end gap-4 sm:gap-8 text-xs font-black text-white uppercase tracking-[0.15em]">
                <a target="_blank" href="{{ route('privacy-policy') }}" class="hover:text-brand-yellow transition-colors">Privacy Policy</a>
                <a target="_blank" href="{{ route('terms-and-conditions') }}" class="hover:text-brand-yellow transition-colors">Terms of Service</a>
                <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="text-brand-yellow hover:text-white transition-all transform hover:-translate-y-1">TOP ↑</button>
            </div>
        </div>
    </div>
</footer>