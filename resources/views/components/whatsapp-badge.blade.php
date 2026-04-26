@php
    $settings = app(\App\Settings\GeneralSettings::class);
    $visible  = $settings->whatsapp_badge_visible;
    $number   = trim($settings->whatsapp_phone_number ?? '');
@endphp

@if ($visible && $number)
    @php
        $clean = preg_replace('/[^0-9]/', '', $number);
    @endphp

    <div x-data="{ open: false, message: '' }"
         @keydown.escape.window="open = false"
         class="relative font-sans">

        {{-- Smaller Badge --}}
        <button @click="open = !open"
                aria-label="Chat on WhatsApp"
                class="fixed bottom-6 right-6 z-[100] flex items-center justify-center 
                       bg-[#25D366] text-white shadow-lg
                       transition-all duration-300 hover:scale-105 active:scale-95
                       w-12 h-12 rounded-full">
            
            {{-- Unified Icon Container to prevent weird rendering --}}
            <div class="relative w-6 h-6 flex items-center justify-center">
                <svg x-show="!open" 
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 scale-75"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="absolute w-full h-full fill-white" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347zM12 0C5.373 0 0 5.373 0 12c0 2.115.549 4.103 1.51 5.833L.055 23.454a.5.5 0 0 0 .491.606l5.797-1.52A11.954 11.954 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.882a9.88 9.88 0 0 1-5.034-1.378l-.361-.214-3.741.981.999-3.648-.235-.374A9.855 9.855 0 0 1 2.118 12C2.118 6.533 6.533 2.118 12 2.118c5.468 0 9.882 4.415 9.882 9.882 0 5.468-4.414 9.882-9.882 9.882z"/>
                </svg>

                <svg x-show="open" 
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 scale-75"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="absolute w-5 h-5 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                    <path d="M18 6L6 18M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </button>

        {{-- Chat Window --}}
        <div x-show="open"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             class="fixed bottom-20 right-4 sm:right-6 z-[100] w-[calc(100vw-2rem)] sm:w-[340px] origin-bottom-right"
             style="display:none">

            <div class="bg-[#1c1c1e] rounded-[1.25rem] overflow-hidden shadow-2xl border border-white/5">
                
                {{-- Header Updated to Axion Support --}}
                <div class="bg-[#2c2c2e] px-5 py-4 flex items-center gap-3">
                    <div class="w-9 h-9 rounded-full bg-[#25D366] flex items-center justify-center shadow-inner">
                        <svg class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-[13px] font-bold text-white tracking-tight">Axion Support</h3>
                        <div class="flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#25D366]"></span>
                            <span class="text-[10px] text-white/40">Active</span>
                        </div>
                    </div>
                </div>

                {{-- Body --}}
                <div class="relative p-5 space-y-4 min-h-[140px] bg-[#0b0b0b]">
                    <div class="flex flex-col gap-2 max-w-[85%]">
                        <div class="bg-[#2c2c2e] text-white p-3 rounded-2xl rounded-tl-none shadow-sm">
                            <p class="text-[13px] leading-relaxed">
                                Hi! Welcome to Axion. How can we help you today?
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Input Bar --}}
                <div class="bg-[#1c1c1e] p-3 flex items-center gap-2">
                    <div class="flex-1 bg-[#2c2c2e] rounded-full px-4 py-2">
                        <input type="text" 
                               x-model="message"
                               @keydown.enter="if (message.trim()) { window.open('https://wa.me/{{ $clean }}?text=' + encodeURIComponent(message.trim()), '_blank'); message = ''; open = false; }"
                               placeholder="Message..."
                               class="w-full bg-transparent border-none outline-none text-[13px] text-white placeholder:text-white/20">
                    </div>

                    <button @click="if (message.trim()) { window.open('https://wa.me/{{ $clean }}?text=' + encodeURIComponent(message.trim()), '_blank'); message = ''; open = false; }"
                            class="w-9 h-9 rounded-full bg-[#25D366] flex items-center justify-center text-white shrink-0 active:scale-90 transition-transform">
                        <svg class="w-4 h-4 translate-x-0.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                            <path d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endif