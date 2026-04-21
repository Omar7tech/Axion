<section 
    x-data="{ 
        open: false, 
        selected: 'a new website',
        options: ['a new website', 'branding design branding design branding design', 'a partnership', 'something else']
    }" 
    class="min-h-screen bg-[#050505] text-white flex flex-col lg:flex-row font-sans selection:bg-brand-yellow selection:text-black relative overflow-hidden">
    
    <div class="absolute inset-0 pointer-events-none z-0">
        <div class="absolute inset-0 opacity-[0.05]" 
             style="background-image: radial-gradient(circle, #ffffff 1px, transparent 1px); background-size: 40px 40px;"></div>
        
        <div class="absolute inset-0 opacity-[0.03] mix-blend-overlay" 
             style="background-image: url('https://grainy-gradients.vercel.app/noise.svg');"></div>
             
        <div class="absolute inset-0 opacity-[0.02] bg-[linear-gradient(rgba(18,16,16,0)_50%,rgba(0,0,0,0.25)_50%),linear-gradient(90deg,rgba(255,0,0,0.06),rgba(0,255,0,0.02),rgba(0,0,255,0.06))] bg-[size:100%_4px,3px_100%] pointer-events-none"></div>
    </div>

    <div class="w-full lg:w-2/5 p-6 lg:p-20 flex flex-col justify-between border-b lg:border-b-0 lg:border-r border-white/10 bg-[#020202]/80 backdrop-blur-sm relative z-10">
        <div class="relative space-y-6">
            <h1 style="font-size: clamp(3rem, 8vw, 5rem);" class="font-bold tracking-tighter leading-none">
                Start the <br/>
                <span class="italic text-brand-yellow">Dialogue.</span>
            </h1>
        </div>

        <div class="relative space-y-12 mt-20">
            <div class="group cursor-default">
                <p class="text-[10px] uppercase tracking-widest text-white/30 mb-2">Inquiries</p>
                <a href="mailto:hello@yourbrand.com" class="text-xl font-medium hover:text-brand-yellow transition-colors duration-300">hello@yourbrand.com</a>
            </div>
            
            <div class="group cursor-default">
                <p class="text-[10px] uppercase tracking-widest text-white/30 mb-2">Voice</p>
                <a href="tel:+96170123456" class="text-xl font-medium hover:text-brand-yellow transition-colors duration-300">+961 70 123 456</a>
            </div>

            <div class="flex gap-8 pt-6">
                <a href="#" class="text-[10px] font-bold uppercase tracking-widest text-white/40 hover:text-white transition-colors">Instagram</a>
                <a href="#" class="text-[10px] font-bold uppercase tracking-widest text-white/40 hover:text-white transition-colors">LinkedIn</a>
                <a href="#" class="text-[10px] font-bold uppercase tracking-widest text-white/40 hover:text-white transition-colors">WhatsApp</a>
            </div>
        </div>
    </div>

    <div class="w-full lg:w-3/5 p-6 lg:p-20 flex items-center justify-center bg-transparent relative z-10">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-brand-yellow/[0.07] blur-[150px] rounded-full pointer-events-none"></div>

        <form action="#" class="w-full max-w-xl space-y-16 relative">
            <div class="space-y-4">
                <h2 class="text-xl md:text-2xl font-light">Hello, I am <input type="text" placeholder="Your Name" class="bg-transparent border-b border-white/20 pb-1 focus:border-brand-yellow outline-none transition-all w-full md:w-auto mt-2 md:mt-0 text-brand-yellow font-medium italic px-2"></h2>
            </div>

            <div class="space-y-4">
                <h2 class="text-xl md:text-2xl font-light flex flex-wrap items-center gap-2">
                    And I'm looking to discuss 
                    <div class="relative inline-block" @click.away="open = false">
                        <button 
                            type="button" 
                            @click="open = !open"
                            class="border-b border-white/20 text-brand-yellow font-medium italic px-2 pb-1 flex items-center gap-2 hover:border-brand-yellow transition-all duration-300">
                            <span x-text="selected"></span>
                            <svg :class="open ? 'rotate-180' : ''" class="w-3 h-3 opacity-50 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        
                        <div 
                            x-show="open"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-95"
                            class="absolute left-0 top-full mt-2 w-64 bg-[#0a0a0a] border border-white/10 shadow-[0_20px_50px_rgba(0,0,0,1)] z-50 rounded-sm overflow-hidden"
                            style="display: none;">
                            <div class="flex flex-col py-2">
                                <template x-for="option in options" :key="option">
                                    <div @click="selected = option; open = false" class="px-4 py-3 text-[10px] font-bold uppercase tracking-widest text-white/60 hover:bg-brand-yellow hover:text-black cursor-pointer transition-colors" x-text="option"></div>
                                </template>
                            </div>
                        </div>
                    </div>
                </h2>
            </div>

            <div class="space-y-4">
                <h2 class="text-xl md:text-2xl font-light leading-relaxed">You can reach me at <input type="email" placeholder="Email Address" class="bg-transparent border-b border-white/20 pb-1 focus:border-brand-yellow outline-none transition-all w-full md:w-64 text-brand-yellow font-medium italic px-2"> to talk about the details.</h2>
            </div>

            <div class="pt-10">
                <button class="group relative inline-flex items-center gap-6 overflow-hidden">
                    <div class="relative z-10 bg-brand-yellow text-black px-10 py-5 font-bold uppercase text-[11px] tracking-[0.3em] group-hover:bg-white transition-colors duration-300">
                        Send Request
                    </div>
                    <div class="w-12 h-[1px] bg-brand-yellow group-hover:w-20 transition-all duration-500"></div>
                </button>
            </div>
        </form>
    </div>
</section>