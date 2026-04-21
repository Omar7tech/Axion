<section class="min-h-screen bg-[#050505] text-white flex flex-col lg:flex-row font-sans selection:bg-brand-yellow selection:text-black">
    
    <div class="w-full lg:w-2/5 p-6 lg:p-20 flex flex-col justify-between border-b lg:border-b-0 lg:border-r border-white/10 bg-[#020202]">
        <div class="space-y-6">
            <div class="inline-block px-3 py-1 border border-brand-yellow/30 rounded-full">
                <span class="text-[9px] font-bold uppercase tracking-[0.3em] text-brand-yellow">Available for Projects</span>
            </div>
            <h1 style="font-size: clamp(3rem, 8vw, 5rem);" class="font-bold tracking-tighter leading-none">
                Start the <br/>
                <span class="italic font-serif text-brand-yellow">Dialogue.</span>
            </h1>
        </div>

        <div class="space-y-12 mt-20">
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

    <div class="w-full lg:w-3/5 p-6 lg:p-20 flex items-center justify-center bg-[#050505] relative overflow-hidden">
        <div class="absolute top-[-10%] right-[-10%] w-[400px] h-[400px] bg-brand-yellow/5 blur-[120px] rounded-full"></div>

        <form action="#" class="w-full max-w-xl space-y-16 relative z-10">
            
            <div class="space-y-4">
                <h2 class="text-xl md:text-2xl font-light">Hello, I am <input type="text" placeholder="Your Name" class="bg-transparent border-b border-white/20 pb-1 focus:border-brand-yellow outline-none transition-all w-full md:w-auto mt-2 md:mt-0 text-brand-yellow font-medium italic px-2"></h2>
            </div>

            <div class="space-y-4">
                <h2 class="text-xl md:text-2xl font-light flex flex-wrap items-center gap-2">
                    And I'm looking to discuss 
                    <div class="relative inline-block" id="custom-select-container">
                        <button type="button" onclick="toggleDropdown(event)" class="border-b border-white/20 text-brand-yellow font-medium italic px-2 pb-1 flex items-center gap-2 hover:border-brand-yellow transition-all duration-300">
                            <span id="selected-option">a new website</span>
                            <svg id="arrow-icon" class="w-3 h-3 opacity-50 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        
                        <div id="dropdown-menu" class="absolute left-0 top-full mt-2 w-64 bg-[#0a0a0a] border border-white/10 shadow-2xl opacity-0 scale-95 pointer-events-none transition-all duration-300 z-50 rounded-sm overflow-hidden">
                            <div class="flex flex-col py-2">
                                <div onclick="selectOpt('a new website')" class="px-4 py-3 text-[10px] font-bold uppercase tracking-widest text-white/60 hover:bg-brand-yellow hover:text-black cursor-pointer transition-colors">A New Website</div>
                                <div onclick="selectOpt('branding design')" class="px-4 py-3 text-[10px] font-bold uppercase tracking-widest text-white/60 hover:bg-brand-yellow hover:text-black cursor-pointer transition-colors">Branding Design</div>
                                <div onclick="selectOpt('a partnership')" class="px-4 py-3 text-[10px] font-bold uppercase tracking-widest text-white/60 hover:bg-brand-yellow hover:text-black cursor-pointer transition-colors">A Partnership</div>
                                <div onclick="selectOpt('something else')" class="px-4 py-3 text-[10px] font-bold uppercase tracking-widest text-white/60 hover:bg-brand-yellow hover:text-black cursor-pointer transition-colors">Something Else</div>
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

<script>
    const menu = document.getElementById('dropdown-menu');
    const arrow = document.getElementById('arrow-icon');
    const container = document.getElementById('custom-select-container');

    function toggleDropdown(event) {
        event.stopPropagation();
        const isOpen = !menu.classList.contains('opacity-0');
        
        if (isOpen) {
            closeMenu();
        } else {
            openMenu();
        }
    }

    function openMenu() {
        menu.classList.remove('opacity-0', 'scale-95', 'pointer-events-none');
        menu.classList.add('opacity-100', 'scale-100');
        arrow.classList.add('rotate-180');
    }

    function closeMenu() {
        menu.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
        menu.classList.remove('opacity-100', 'scale-100');
        arrow.classList.remove('rotate-180');
    }

    function selectOpt(val) {
        document.getElementById('selected-option').innerText = val;
        closeMenu();
    }

    // Close when clicking outside
    window.addEventListener('click', (e) => {
        if (!container.contains(e.target)) {
            closeMenu();
        }
    });
</script>