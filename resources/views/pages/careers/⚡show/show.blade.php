<div class="bg-[#050505] text-white min-h-screen selection:bg-brand-yellow selection:text-black"
     x-data="{
         applied: JSON.parse(localStorage.getItem('gc_applied_careers') || '[]'),
         hasApplied(id) { return this.applied.includes(id); },
         markApplied(id) {
             if (!this.hasApplied(id)) {
                 this.applied.push(id);
                 localStorage.setItem('gc_applied_careers', JSON.stringify(this.applied));
             }
         },
         showForm: false
     }"
     @career-applied.window="markApplied($event.detail.careerId)">
    {{-- HERO SECTION --}}
    <section class="relative min-h-[50vh] md:min-h-[60vh] flex items-end overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-t from-[#050505] via-[#050505]/90 to-transparent"></div>
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff03_1px,transparent_1px),linear-gradient(to_bottom,#ffffff03_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        </div>

        <div class="container mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 pb-12 relative z-10">
            <div class="max-w-4xl space-y-4 md:space-y-6">
                @if($career->is_active)
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-brand-yellow text-black rounded-sm shadow-xl shadow-brand-yellow/10">
                        <span class="text-[9px] font-black uppercase tracking-tighter border-r border-black/20 pr-2">Status</span>
                        <span class="text-base md:text-xl font-black">Open Position</span>
                    </div>
                @else
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-white/10 text-white/60 rounded-sm border border-white/10">
                        <span class="text-[9px] font-black uppercase tracking-tighter border-r border-white/20 pr-2">Status</span>
                        <span class="text-base md:text-xl font-black">Closed</span>
                    </div>
                @endif

                <h1 class="text-3xl sm:text-5xl md:text-7xl font-black uppercase tracking-tighter leading-[0.95] break-words">
                    {{ $career->title }}
                </h1>

                <div class="flex flex-wrap items-center gap-4 text-[10px] font-bold uppercase tracking-widest text-white/40">
                    @if($career->location)
                        <div class="flex items-center gap-1.5">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span>{{ $career->location }}</span>
                        </div>
                    @endif

                    @if($career->type)
                        <div class="flex items-center gap-1.5">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>{{ $career->type }}</span>
                        </div>
                    @endif

                    <div class="flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span>{{ $career->created_at->format('M Y') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- MAIN GRID LAYOUT --}}
    <div class="container mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            {{-- LEFT: CONTENT --}}
            <div class="lg:col-span-8 space-y-12">
                @if($career->description)
                    <div x-show="!showForm" class="space-y-6">
                        <h2 class="text-xl md:text-2xl font-black uppercase tracking-tighter border-b border-white/10 pb-4">About This Role</h2>
                        <article class="prose prose-invert prose-lg max-w-none
                            prose-headings:text-white prose-headings:font-bold prose-headings:tracking-tight
                            prose-h1:text-3xl prose-h1:mb-4 prose-h1:mt-8
                            prose-h2:text-2xl prose-h2:mb-3 prose-h2:mt-6
                            prose-h3:text-xl prose-h3:mb-2 prose-h3:mt-5
                            prose-h4:text-lg prose-h4:mb-2 prose-h4:mt-4
                            prose-p:text-white/70 prose-p:leading-relaxed prose-p:mb-4
                            prose-a:text-brand-yellow prose-a:no-underline hover:prose-a:underline prose-a:font-medium
                            prose-strong:text-white prose-strong:font-bold
                            prose-em:text-white/80 prose-em:italic
                            prose-ul:list-disc prose-ul:pl-6 prose-ul:mb-4 prose-ul:text-white/70
                            prose-ol:list-decimal prose-ol:pl-6 prose-ol:mb-4 prose-ol:text-white/70
                            prose-li:mb-2 prose-li:text-white/70
                            prose-blockquote:border-l-4 prose-blockquote:border-brand-yellow prose-blockquote:pl-4 prose-blockquote:italic prose-blockquote:text-white/60
                            prose-code:text-brand-yellow prose-code:bg-white/5 prose-code:px-1.5 prose-code:py-0.5 prose-code:rounded prose-code:text-sm
                            prose-pre:bg-white/5 prose-pre:border prose-pre:border-white/10 prose-pre:rounded-lg prose-pre:p-4
                            prose-img:rounded-lg prose-img:border prose-img:border-white/10
                            prose-hr:border-white/10 prose-hr:my-8
                            prose-table:border-collapse prose-table:w-full
                            prose-thead:border-b prose-thead:border-white/20
                            prose-th:text-left prose-th:p-3 prose-th:font-bold prose-th:text-white
                            prose-td:p-3 prose-td:border-b prose-td:border-white/10 prose-td:text-white/70">
                            {!! $career->description !!}
                        </article>
                    </div>
                @endif

                {{-- Application Form --}}
                <div x-show="showForm" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                    <div wire:loading.flex wire:target="submit"
                         class="fixed inset-0 z-50 items-center justify-center bg-black/60 backdrop-blur-sm">
                        <div class="flex flex-col items-center gap-3">
                            <svg class="w-7 h-7 text-brand-yellow animate-spin" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-20" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="3"/>
                                <path class="opacity-90" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/>
                            </svg>
                            <p class="text-[11px] font-black uppercase tracking-widest text-white/40">Submitting…</p>
                        </div>
                    </div>

                    <div x-show="hasApplied({{ $career->id }})" x-cloak
                         class="rounded-2xl bg-amber-500/10 border border-amber-500/30 px-6 py-5 flex items-start gap-3 mb-6">
                        <div class="w-7 h-7 rounded-full bg-amber-500/20 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-black text-[13px] text-amber-300 mb-0.5">Already applied</p>
                            <p class="text-[12px] text-amber-200/70">You've already submitted an application for this position from this browser. We've received it and will be in touch.</p>
                        </div>
                    </div>

                    @if($this->submitted)
                        <div class="rounded-2xl bg-white/5 border border-white/10 overflow-hidden">
                            <div class="px-7 py-12 flex flex-col items-center text-center gap-5">
                                <span class="w-14 h-14 rounded-full bg-green-500/20 flex items-center justify-center">
                                    <svg class="w-7 h-7 text-green-400" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </span>
                                <div>
                                    <p class="font-black text-[18px] text-white mb-2">Application submitted!</p>
                                    <p class="text-[13.5px] leading-relaxed text-white/50 max-w-sm">
                                        Your email client should have opened. Thank you for applying to <strong>{{ $career->title }}</strong>.
                                    </p>
                                </div>
                            </div>
                        </div>
                    @else
                        <form
                            novalidate
                            x-data="{
                                fe: { fullName: null, email: null, phone: null, address: null, notes: null },
                                msg(el, label) {
                                    const v = el.validity;
                                    if (v.valueMissing)                        return 'The ' + label + ' field is required.';
                                    if (v.typeMismatch && el.type === 'email') return 'The ' + label + ' field must be a valid email address.';
                                    if (v.tooLong)                             return 'The ' + label + ' field is too long.';
                                    return 'The ' + label + ' field is invalid.';
                                },
                                validate() {
                                    const fields = [
                                        { key: 'fullName', label: 'full name' },
                                        { key: 'email',    label: 'email' },
                                        { key: 'phone',    label: 'phone number' },
                                        { key: 'address',  label: 'address' },
                                    ];
                                    let ok = true;
                                    fields.forEach(({ key, label }) => {
                                        const el = this.$refs[key];
                                        this.fe[key] = (el && !el.checkValidity()) ? this.msg(el, label) : null;
                                        if (this.fe[key]) ok = false;
                                    });
                                    return ok;
                                }
                            }"
                            x-on:submit.prevent="validate() && $wire.submit()"
                            class="space-y-4"
                        >
                            <div class="rounded-2xl bg-white/5 border border-white/10 overflow-hidden">
                                <div class="flex items-center justify-between px-7 py-5 border-b border-white/5 bg-white/[0.02]">
                                    <div class="flex items-center gap-3">
                                        <span class="w-6 h-6 rounded-lg bg-brand-yellow/15 flex items-center justify-center">
                                            <svg class="w-3.5 h-3.5 text-brand-yellow" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                                            </svg>
                                        </span>
                                        <p class="text-[11px] font-black uppercase tracking-[0.3em] text-white/70">Personal Details</p>
                                    </div>
                                </div>

                                <div class="px-7 py-6 grid gap-5 sm:grid-cols-2">
                                    <div>
                                        <label for="fullName" class="block text-[10.5px] font-bold uppercase tracking-[0.28em] text-white/45 mb-2">
                                            Full Name <span class="text-brand-yellow">*</span>
                                        </label>
                                        <input id="fullName" x-ref="fullName" type="text" wire:model.blur="fullName"
                                               autocomplete="name" placeholder="John Smith" required maxlength="255"
                                               class="w-full rounded-xl border bg-white/5 px-4 py-3 text-[13.5px] text-white outline-none transition-all duration-150 placeholder:text-white/25"
                                               :class="fe.fullName ? 'border-red-500 bg-red-500/10 focus:border-red-400' : 'border-white/10 focus:border-brand-yellow focus:shadow-[0_0_0_3px_rgba(246,171,3,0.10)]'">
                                        <p x-show="fe.fullName" x-text="fe.fullName" class="mt-1.5 text-[11.5px] text-red-400 font-medium"></p>
                                        @error('fullName') <p class="mt-1.5 text-[11.5px] text-red-400 font-medium">{{ $message }}</p> @enderror
                                    </div>

                                    <div>
                                        <label for="email" class="block text-[10.5px] font-bold uppercase tracking-[0.28em] text-white/45 mb-2">
                                            Email Address <span class="text-brand-yellow">*</span>
                                        </label>
                                        <input id="email" x-ref="email" type="email" wire:model.blur="email"
                                               autocomplete="email" placeholder="you@example.com" required maxlength="255"
                                               class="w-full rounded-xl border bg-white/5 px-4 py-3 text-[13.5px] text-white outline-none transition-all duration-150 placeholder:text-white/25"
                                               :class="fe.email ? 'border-red-500 bg-red-500/10 focus:border-red-400' : 'border-white/10 focus:border-brand-yellow focus:shadow-[0_0_0_3px_rgba(246,171,3,0.10)]'">
                                        <p x-show="fe.email" x-text="fe.email" class="mt-1.5 text-[11.5px] text-red-400 font-medium"></p>
                                        @error('email') <p class="mt-1.5 text-[11.5px] text-red-400 font-medium">{{ $message }}</p> @enderror
                                    </div>

                                    <div>
                                        <label for="phone" class="block text-[10.5px] font-bold uppercase tracking-[0.28em] text-white/45 mb-2">
                                            Phone Number <span class="text-brand-yellow">*</span>
                                        </label>
                                        <input id="phone" x-ref="phone" type="tel" wire:model.blur="phone"
                                               autocomplete="tel" placeholder="+1 234 567 8900" required maxlength="50"
                                               class="w-full rounded-xl border bg-white/5 px-4 py-3 text-[13.5px] text-white outline-none transition-all duration-150 placeholder:text-white/25"
                                               :class="fe.phone ? 'border-red-500 bg-red-500/10 focus:border-red-400' : 'border-white/10 focus:border-brand-yellow focus:shadow-[0_0_0_3px_rgba(246,171,3,0.10)]'">
                                        <p x-show="fe.phone" x-text="fe.phone" class="mt-1.5 text-[11.5px] text-red-400 font-medium"></p>
                                        @error('phone') <p class="mt-1.5 text-[11.5px] text-red-400 font-medium">{{ $message }}</p> @enderror
                                    </div>

                                    <div>
                                        <label for="address" class="block text-[10.5px] font-bold uppercase tracking-[0.28em] text-white/45 mb-2">
                                            Address <span class="text-brand-yellow">*</span>
                                        </label>
                                        <input id="address" x-ref="address" type="text" wire:model.blur="address"
                                               autocomplete="street-address" placeholder="City, Country" required maxlength="500"
                                               class="w-full rounded-xl border bg-white/5 px-4 py-3 text-[13.5px] text-white outline-none transition-all duration-150 placeholder:text-white/25"
                                               :class="fe.address ? 'border-red-500 bg-red-500/10 focus:border-red-400' : 'border-white/10 focus:border-brand-yellow focus:shadow-[0_0_0_3px_rgba(246,171,3,0.10)]'">
                                        <p x-show="fe.address" x-text="fe.address" class="mt-1.5 text-[11.5px] text-red-400 font-medium"></p>
                                        @error('address') <p class="mt-1.5 text-[11.5px] text-red-400 font-medium">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-2xl bg-white/5 border border-white/10 overflow-hidden">
                                <div class="flex items-center justify-between px-7 py-5 border-b border-white/5 bg-white/[0.02]">
                                    <div class="flex items-center gap-3">
                                        <span class="w-6 h-6 rounded-lg bg-brand-yellow/15 flex items-center justify-center">
                                            <svg class="w-3.5 h-3.5 text-brand-yellow" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"/>
                                            </svg>
                                        </span>
                                        <p class="text-[11px] font-black uppercase tracking-[0.3em] text-white/70">Additional Information</p>
                                    </div>
                                </div>

                                <div class="px-7 py-6">
                                    <label for="notes" class="block text-[10.5px] font-bold uppercase tracking-[0.28em] text-white/45 mb-2">
                                        Notes
                                        <span class="normal-case tracking-normal font-medium text-white/30 ml-1">(optional)</span>
                                    </label>
                                    <textarea id="notes" wire:model.blur="notes" rows="4" maxlength="2000"
                                              placeholder="Tell us a bit about yourself, your experience, or why you're interested in this role..."
                                              class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-[13.5px] text-white outline-none transition-all duration-150 placeholder:text-white/25 focus:border-brand-yellow focus:shadow-[0_0_0_3px_rgba(246,171,3,0.10)] resize-none"></textarea>
                                    @error('notes') <p class="mt-1.5 text-[11.5px] text-red-400 font-medium">{{ $message }}</p> @enderror
                                </div>

                                <div class="px-7 py-5 border-t border-white/5 bg-white/[0.02] flex items-center justify-between gap-4 flex-wrap">
                                    <p class="text-[11.5px] text-white/40 max-w-xs leading-relaxed">
                                        Your application will be saved and your email client will open for review before sending.
                                    </p>
                                    <button type="submit"
                                            wire:loading.attr="disabled"
                                            wire:loading.class="opacity-60 cursor-not-allowed"
                                            class="inline-flex items-center gap-2.5 rounded-xl bg-brand-yellow px-7 py-3.5 text-[11px] font-black uppercase tracking-[0.22em] text-black transition-all duration-150 hover:bg-brand-yellow/85 hover:shadow-lg disabled:opacity-50 disabled:cursor-not-allowed">
                                        <span wire:loading.remove wire:target="submit">Submit Application</span>
                                        <span wire:loading wire:target="submit" class="flex items-center gap-2">
                                            <svg class="w-3.5 h-3.5 animate-spin" fill="none" viewBox="0 0 24 24">
                                                <circle class="opacity-20" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="3"/>
                                                <path class="opacity-80" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/>
                                            </svg>
                                            Submitting…
                                        </span>
                                        <svg wire:loading.remove wire:target="submit" class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                    @endif
                </div>
            </div>

            {{-- RIGHT: STICKY CTA CARD --}}
            <aside class="lg:col-span-4">
                <div class="sticky top-25 p-8 rounded-xl bg-white/[0.03] border border-white/10 backdrop-blur-md">
                    <h3 class="text-xl font-black uppercase tracking-tight mb-3">Apply Now</h3>
                    <p class="text-xs text-white/50 leading-relaxed mb-6">
                        Join our team and be part of our mission to deliver industrial excellence at Axion.
                    </p>
                    
                    @if($career->is_active)
                        <div class="flex flex-col gap-3">
                            @if($this->submitted)
                                <div class="flex items-center justify-center gap-3 px-6 py-4 bg-green-600 text-white font-black uppercase text-xs tracking-widest cursor-default">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Application Submitted
                                </div>
                            @else
                                <button x-show="!showForm && !hasApplied({{ $career->id }})" @click="showForm = true"
                                    class="flex items-center justify-center gap-3 px-6 py-4 bg-brand-yellow text-black font-black uppercase text-xs tracking-widest hover:translate-y-[-2px] transition-all active:translate-y-0 shadow-xl shadow-brand-yellow/10">
                                    Submit Application
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                    </svg>
                                </button>
                                <button x-show="showForm" @click="showForm = false"
                                    class="flex items-center justify-center gap-3 px-6 py-4 bg-red-600 text-white font-black uppercase text-xs tracking-widest hover:bg-red-700 transition-all">
                                    Cancel
                                </button>
                                <div x-show="!showForm && hasApplied({{ $career->id }})" class="flex items-center justify-center gap-3 px-6 py-4 bg-green-600 text-white font-black uppercase text-xs tracking-widest cursor-default">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Application Submitted
                                </div>
                            @endif
                            <a wire:navigate href="{{ route('careers.index') }}"
                                class="flex items-center justify-center gap-3 px-6 py-4 border border-white/10 text-white font-black uppercase text-xs tracking-widest hover:bg-white/5 transition-all">
                                View All Positions
                            </a>
                        </div>
                    @else
                        <div class="p-4 rounded-lg bg-white/5 border border-white/10 text-center">
                            <p class="text-sm text-white/40 font-medium">This position is currently closed</p>
                            <a wire:navigate href="{{ route('careers.index') }}"
                                class="inline-flex items-center gap-2 mt-4 text-brand-yellow text-xs font-black uppercase tracking-widest hover:underline">
                                View Open Positions
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    @endif

                    <div class="mt-6 pt-6 border-t border-white/5 flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-brand-yellow">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                        </svg>
                        <span class="text-[9px] uppercase tracking-widest text-white/40">Equal Opportunity Employer</span>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>