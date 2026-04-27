@php
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

@php
    $hasTerms = $inquiryTerms->isNotEmpty();
    $termsList = $hasTerms ? $inquiryTerms->pluck('term')->toArray() : [];
@endphp

<section 
    x-data="{ 
        open: false, 
        selected: @js($hasTerms ? $termsList[0] ?? '' : ''),
        options: @js($hasTerms ? array_merge($termsList, ['Other']) : []),
        showOtherInput: false,
        hasTerms: @js($hasTerms),
        fe: {
            fullName: null,
            discussion: null,
            otherDiscussion: null,
            email: null,
            phone: null
        }
    }"
    x-on:inquiry-submitted.window="$nextTick(() => document.getElementById('success-message')?.scrollIntoView({behavior:'smooth',block:'center'}))"
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
            {{-- Email Addresses --}}
            @if(!empty($contactEmails))
                <div class="group cursor-default">
                    <p class="text-[10px] uppercase tracking-widest text-white/30 mb-2">Inquiries</p>
                    @foreach($contactEmails as $email)
                        <a href="mailto:{{ $email['email'] }}" class="text-xl font-medium hover:text-brand-yellow transition-colors duration-300 block">{{ $email['email'] }}</a>
                    @endforeach
                </div>
            @endif
            
            {{-- Phone Numbers --}}
            @if(!empty($contactPhones))
                <div class="group cursor-default">
                    <p class="text-[10px] uppercase tracking-widest text-white/30 mb-2">Voice</p>
                    @foreach($contactPhones as $phone)
                        <a href="tel:{{ $phone['phone'] }}" class="text-xl font-medium hover:text-brand-yellow transition-colors duration-300 block">{{ $phone['phone'] }}</a>
                    @endforeach
                </div>
            @endif

            {{-- Social Media --}}
            @if(!empty($socialMedia))
                <div class="flex gap-4 pt-6">
                    @foreach($socialMedia as $social)
                        @if(isset($icons[$social['platform']]))
                            <a href="{{ $social['url'] }}" target="_blank" rel="noopener noreferrer" 
                               class="p-2 rounded-full bg-white/5 hover:bg-white/10 transition-colors group"
                               aria-label="{{ ucfirst($social['platform']) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="text-white/50 group-hover:text-white transition-colors">
                                    {!! $icons[$social['platform']] !!}
                                </svg>
                            </a>
                        @endif
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    <div class="w-full lg:w-3/5 p-6 lg:p-20 flex items-center justify-center bg-transparent relative z-10">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-brand-yellow/[0.07] blur-[150px] rounded-full pointer-events-none"></div>

        @if($submitted)
            <div id="success-message" class="w-full max-w-xl">
                <div class="rounded-2xl bg-[#0a0a0a] border border-white/10 p-12 text-center">
                    <div class="w-16 h-16 rounded-full bg-green-500/20 flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Message Sent!</h3>
                    <p class="text-white/50">Thank you for reaching out. We'll get back to you shortly.</p>
                </div>
            </div>
        @else
        <form 
            novalidate
            x-on:submit.prevent="
                let valid = true;
                
                // Reset errors
                Object.keys(fe).forEach(k => fe[k] = null);
                
                // Validate full name
                if (!$wire.fullName.trim()) {
                    fe.fullName = 'The full name field is required.';
                    valid = false;
                } else if ($wire.fullName.length > 255) {
                    fe.fullName = 'The full name field must not exceed 255 characters.';
                    valid = false;
                }
                
                // Validate discussion
                if (!$wire.discussion.trim()) {
                    fe.discussion = 'Please select a discussion topic.';
                    valid = false;
                }
                
                // Validate other discussion if 'Other' is selected
                if (selected === 'Other' && !$wire.otherDiscussion.trim()) {
                    fe.otherDiscussion = 'Please specify your discussion topic.';
                    valid = false;
                }
                
                // Validate email if needed
                if (['email', 'both'].includes($wire.contactMethod)) {
                    if (!$wire.email.trim()) {
                        fe.email = 'The email field is required.';
                        valid = false;
                    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test($wire.email)) {
                        fe.email = 'Please enter a valid email address.';
                        valid = false;
                    } else if ($wire.email.length > 255) {
                        fe.email = 'The email field must not exceed 255 characters.';
                        valid = false;
                    }
                }
                
                // Validate phone if needed
                if (['phone', 'both'].includes($wire.contactMethod)) {
                    if (!$wire.phone.trim()) {
                        fe.phone = 'The phone field is required.';
                        valid = false;
                    } else if (!/^[\+]?[(]?[0-9]{1,4}[)]?[-\s\.]?[0-9]{1,4}[-\s\.]?[0-9]{1,9}$/.test($wire.phone)) {
                        fe.phone = 'Please enter a valid phone number.';
                        valid = false;
                    } else if ($wire.phone.length > 50) {
                        fe.phone = 'The phone field must not exceed 50 characters.';
                        valid = false;
                    }
                }
                
                if (valid) $wire.submit();
            "
            class="w-full max-w-xl space-y-8 relative">
            
            {{-- Full Name --}}
            <div class="space-y-2">
                <h2 class="text-xl md:text-2xl font-light">
                    Hello, I am 
                    <input 
                        type="text" 
                        wire:model="fullName"
                        placeholder="Your Name"
                        maxlength="255"
                        class="bg-transparent border-b pb-1 focus:border-brand-yellow outline-none transition-all w-full md:w-auto mt-2 md:mt-0 text-brand-yellow font-medium italic px-2"
                        :class="fe.fullName ? 'border-red-500' : 'border-white/20'">
                </h2>
                <p x-show="fe.fullName" x-text="fe.fullName" class="text-red-400 text-sm"></p>
                @error('fullName') <p class="text-red-400 text-sm">{{ $message }}</p> @enderror
            </div>

            {{-- Discussion Topic --}}
            <div class="space-y-2">
                <h2 class="text-xl md:text-2xl font-light flex flex-wrap items-center gap-2">
                    And I'm looking to discuss 
                    
                    {{-- If no terms, show text input directly --}}
                    <template x-if="!hasTerms">
                        <input 
                            type="text" 
                            wire:model="discussion"
                            placeholder="tell us more..."
                            maxlength="255"
                            class="bg-transparent border-b pb-1 focus:border-brand-yellow outline-none transition-all w-full md:w-auto text-brand-yellow font-medium italic px-2"
                            :class="fe.discussion ? 'border-red-500' : 'border-white/20'">
                    </template>
                    
                    {{-- If has terms, show dropdown --}}
                    <template x-if="hasTerms">
                        <div class="relative inline-block" @click.away="open = false">
                            <button 
                                type="button" 
                                @click="open = !open"
                                class="border-b pb-1 text-brand-yellow font-medium italic px-2 flex items-center gap-2 transition-all duration-300"
                                :class="fe.discussion ? 'border-red-500' : 'border-white/20 hover:border-brand-yellow'">
                                <span x-text="showOtherInput ? 'Other' : selected"></span>
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
                                        <div 
                                            @click="selected = option; open = false; showOtherInput = option === 'Other'; $wire.discussion = option" 
                                            class="px-4 py-3 text-[10px] font-bold uppercase tracking-widest text-white/60 hover:bg-brand-yellow hover:text-black cursor-pointer transition-colors" 
                                            x-text="option"></div>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </template>
                </h2>
                <p x-show="fe.discussion" x-text="fe.discussion" class="text-red-400 text-sm"></p>
                @error('discussion') <p class="text-red-400 text-sm">{{ $message }}</p> @enderror
                
                {{-- Show text input when "Other" is selected --}}
                <template x-if="hasTerms && showOtherInput">
                    <div class="mt-4">
                        <input 
                            type="text" 
                            wire:model="otherDiscussion"
                            placeholder="Please specify..."
                            maxlength="255"
                            class="bg-transparent border-b border-white/20 pb-1 focus:border-brand-yellow outline-none transition-all w-full md:w-64 text-brand-yellow font-medium italic px-2"
                            :class="fe.otherDiscussion ? 'border-red-500' : 'border-white/20'"
                            x-model="otherDiscussion"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100">
                        <p x-show="fe.otherDiscussion" x-text="fe.otherDiscussion" class="text-red-400 text-sm mt-2"></p>
                        @error('otherDiscussion') <p class="text-red-400 text-sm mt-2">{{ $message }}</p> @enderror
                    </div>
                </template>
            </div>

            {{-- Contact Method --}}
            <div class="space-y-4">
                <div class="flex flex-wrap items-center gap-2">
                    <h2 class="text-xl md:text-2xl font-light">You can reach me at</h2>
                    
                    {{-- Contact method toggle pills --}}
                    <div class="flex items-center gap-1 bg-white/5 rounded-full p-1">
                        <button 
                            type="button"
                            @click="$wire.contactMethod = 'email'; $wire.phone = ''; fe.email = null; fe.phone = null"
                            :class="$wire.contactMethod === 'email' ? 'bg-brand-yellow text-black' : 'text-white/60 hover:text-white'"
                            class="px-3 py-1 text-[10px] font-bold uppercase tracking-widest rounded-full transition-all duration-300">
                            Email
                        </button>
                        <button 
                            type="button"
                            @click="$wire.contactMethod = 'phone'; $wire.email = ''; fe.email = null; fe.phone = null"
                            :class="$wire.contactMethod === 'phone' ? 'bg-brand-yellow text-black' : 'text-white/60 hover:text-white'"
                            class="px-3 py-1 text-[10px] font-bold uppercase tracking-widest rounded-full transition-all duration-300">
                            Phone
                        </button>
                        <button 
                            type="button"
                            @click="$wire.contactMethod = 'both'; fe.email = null; fe.phone = null"
                            :class="$wire.contactMethod === 'both' ? 'bg-brand-yellow text-black' : 'text-white/60 hover:text-white'"
                            class="px-3 py-1 text-[10px] font-bold uppercase tracking-widest rounded-full transition-all duration-300">
                            Both
                        </button>
                    </div>
                </div>
                
                {{-- Email input --}}
                <template x-if="$wire.contactMethod === 'email' || $wire.contactMethod === 'both'">
                    <div 
                        class="flex items-center gap-2"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0">
                        <span class="text-white/40 text-sm" x-show="$wire.contactMethod === 'both'">Email:</span>
                        <input 
                            type="email" 
                            wire:model="email"
                            placeholder="your@email.com"
                            maxlength="255"
                            class="bg-transparent border-b pb-1 focus:border-brand-yellow outline-none transition-all w-full md:w-64 text-brand-yellow font-medium italic px-2"
                            :class="fe.email ? 'border-red-500' : 'border-white/20'">
                    </div>
                </template>
                <p x-show="fe.email" x-text="fe.email" class="text-red-400 text-sm"></p>
                @error('email') <p class="text-red-400 text-sm">{{ $message }}</p> @enderror
                
                {{-- Phone input --}}
                <template x-if="$wire.contactMethod === 'phone' || $wire.contactMethod === 'both'">
                    <div 
                        class="flex items-center gap-2"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0">
                        <span class="text-white/40 text-sm" x-show="$wire.contactMethod === 'both'">Phone:</span>
                        <input 
                            type="tel" 
                            wire:model="phone"
                            placeholder="+1 234 567 8900"
                            maxlength="50"
                            class="bg-transparent border-b pb-1 focus:border-brand-yellow outline-none transition-all w-full md:w-64 text-brand-yellow font-medium italic px-2"
                            :class="fe.phone ? 'border-red-500' : 'border-white/20'">
                    </div>
                </template>
                <p x-show="fe.phone" x-text="fe.phone" class="text-red-400 text-sm"></p>
                @error('phone') <p class="text-red-400 text-sm">{{ $message }}</p> @enderror
                
                <p class="text-white/40 text-sm">to talk about the details.</p>
            </div>

            <div class="pt-10">
                <button 
                    type="submit"
                    class="group relative inline-flex items-center gap-6 overflow-hidden"
                    wire:loading.attr="disabled">
                    <div class="relative z-10 bg-brand-yellow text-black px-10 py-5 font-bold uppercase text-[11px] tracking-[0.3em] group-hover:bg-white transition-colors duration-300 disabled:opacity-50">
                        <span wire:loading.remove>Send Request</span>
                        <span wire:loading>Sending...</span>
                    </div>
                    <div class="w-12 h-px bg-brand-yellow group-hover:w-20 transition-all duration-500"></div>
                </button>
            </div>
        </form>
        @endif
    </div>
</section>