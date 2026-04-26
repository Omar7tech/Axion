<footer class="relative pt-20 pb-10 px-6 lg:px-20 overflow-hidden bg-[#020202] border-t border-white/10 font-sans">
    
    <div class="absolute inset-0 pointer-events-none opacity-[0.04]" 
         style="background-image: linear-gradient(#fff 1px, transparent 1px), linear-gradient(90deg, #fff 1px, transparent 1px); background-size: 50px 50px;">
    </div>
    <div class="absolute inset-0 bg-gradient-to-t from-[#020202] via-transparent to-transparent"></div>

    <div class="container mx-auto max-w-7xl relative z-10">
        
        <div class="flex flex-col lg:flex-row justify-between items-start gap-16 mb-16">
            
            <div class="space-y-6">
                <h2 class="text-7xl font-black uppercase tracking-tighter italic text-white leading-none">
                    Axion<span class="text-brand-yellow">.</span>
                </h2>
                <p class="text-lg text-white/40 uppercase tracking-[0.4em] leading-tight">
                    Industrial <br /> Excellence.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-x-20 gap-y-12">
                <div class="space-y-5">
                    <h6 class="text-lg font-black uppercase tracking-[0.3em] text-brand-yellow">Ecosystem</h6>
                    <ul class="text-xl font-light uppercase tracking-[0.15em] space-y-1 text-white/50">
                        <li><a href="#" class="hover:text-white transition-colors">Architecture</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Trading</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Digital</a></li>
                    </ul>
                </div>

                <div class="space-y-5">
                    <h6 class="text-lg font-black uppercase tracking-[0.3em] text-brand-yellow">Company</h6>
                    <ul class="text-xl font-light uppercase tracking-[0.15em] space-y-1 text-white/50">
                        <li><a href="{{ route('about-us') }}" wire:navigate class="hover:text-white transition-colors">About</a></li>
                        <li><a href="{{ route('global-partnerships') }}" wire:navigate class="hover:text-white transition-colors">Partners</a></li>
                        <li><a href="{{ route('careers.index') }}" wire:navigate class="hover:text-white transition-colors">Careers</a></li>
                    </ul>
                </div>

                <div class="space-y-5 col-span-2 md:col-span-1">
                    <h6 class="text-lg font-black uppercase tracking-[0.3em] text-brand-yellow">Inquiries</h6>
                    <div class="space-y-4">
                        <a href="mailto:support@axion.com" class="block text-2xl font-light text-white hover:text-brand-yellow transition-colors tracking-tight uppercase">support@axion.com</a>
                        <div class="flex gap-8 pt-2">
                            <a href="#" class="text-sm font-light text-white/30 hover:text-white transition-colors tracking-widest border-b border-white/10 pb-1">LN</a>
                            <a href="#" class="text-sm font-light text-white/30 hover:text-white transition-colors tracking-widest border-b border-white/10 pb-1">TW</a>
                            <a href="#" class="text-sm font-light text-white/30 hover:text-white transition-colors tracking-widest border-b border-white/10 pb-1">IG</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row justify-between items-center pt-10 border-t-2 border-white/10 gap-8">
            <p class="text-sm font-black text-white uppercase tracking-[0.4em]">
                © 2026 AXION International GROUP — ALL RIGHTS RESERVED
            </p>
            
            <div class="flex gap-12 text-sm font-black text-white uppercase tracking-[0.2em]">
                <a target="_blank" href="{{ route('privacy-policy') }}" class="hover:text-brand-yellow transition-colors">Privacy Policy</a>
                <a target="_blank" href="{{ route('terms-and-conditions') }}" class="hover:text-brand-yellow transition-colors">Terms of Service</a>
                <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="text-brand-yellow hover:text-white transition-all transform hover:-translate-y-1">TOP ↑</button>
            </div>
        </div>
    </div>
</footer>