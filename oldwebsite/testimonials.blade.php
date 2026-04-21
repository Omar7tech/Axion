<div>
    <div x-data="{ show: false }" x-on:feedback-submitted.window="show = true; setTimeout(() => show = false, 3000)"
        x-show="show" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="fixed inset-0 z-50 flex items-center justify-center pointer-events-none" style="display: none">
        <div
            class="pointer-events-auto flex items-center gap-3 bg-brand-dark text-white px-6 py-4 rounded-2xl shadow-2xl">
            <div class="w-7 h-7 rounded-full bg-brand-yellow flex items-center justify-center shrink-0">
                <svg class="w-4 h-4 text-brand-dark" fill="none" stroke="currentColor" stroke-width="2.5"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <div>
                <p class="font-vietnam font-bold text-sm">Thank you for your feedback!</p>
                <p class="font-vietnam text-white/50 text-[11px] mt-0.5">Your testimonial has been submitted.</p>
            </div>
        </div>
    </div>

    <section class="py-10 lg:py-14 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            {{-- Header --}}
            <div class="mb-10">
                {{-- Row 1: title + arrows --}}
                <div class="flex items-center justify-between mb-5 gap-4">
                    <div class="min-w-0">
                        <h2
                            class="font-vietnam font-extrabold text-xl sm:text-2xl lg:text-4xl text-brand-dark tracking-tight uppercase">
                            Testimonials<span class="text-brand-yellow">.</span>
                        </h2>
                        <div class="h-1 w-10 bg-brand-yellow mt-2 rounded-full"></div>
                    </div>

                    {{-- Navigation arrows always right of title --}}
                    <div class="flex items-center gap-2 shrink-0">
                        <button id="t-prev"
                            class="w-8 h-8 sm:w-9 sm:h-9 rounded-full border border-gray-100 flex items-center justify-center text-gray-400 hover:border-brand-yellow hover:text-brand-yellow transition-all cursor-pointer bg-white">
                            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <path d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <button id="t-next"
                            class="w-8 h-8 sm:w-9 sm:h-9 rounded-full border border-gray-100 flex items-center justify-center text-gray-400 hover:border-brand-yellow hover:text-brand-yellow transition-all cursor-pointer bg-white">
                            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <path d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- Row 2: action buttons --}}
                <div
                    x-data="{
                        count: parseInt(localStorage.getItem('testimonials_submitted') ?? '0'),
                        get maxed() { return this.count >= 3 },
                        increment() { this.count++; localStorage.setItem('testimonials_submitted', this.count); }
                    }"
                    x-on:feedback-submitted.window="increment()"
                    class="flex items-center gap-3"
                >
                    <button
                        wire:click="openModal"
                        :disabled="maxed"
                        :title="maxed ? 'You have reached the 3-submission limit.' : ''"
                        :class="maxed
                            ? 'opacity-50 cursor-not-allowed bg-brand-dark text-white'
                            : 'hover:bg-brand-yellow hover:text-brand-dark cursor-pointer'"
                        class="inline-flex items-center gap-2 font-vietnam text-[11px] font-bold uppercase tracking-wider text-white bg-brand-dark px-5 py-2.5 rounded-full transition-all duration-300"
                    >
                        <svg wire:loading wire:target="openModal" class="w-3.5 h-3.5 animate-spin" fill="none"
                            viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="3" />
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z" />
                        </svg>
                        <span x-text="maxed ? 'Limit Reached' : 'Submit Feedback'"></span>
                    </button>
                    @if($this->hasMore)
                        <a href="{{ route('testimonials') }}" wire:navigate
                            class="font-vietnam text-[11px] font-bold uppercase tracking-wider text-brand-dark border border-brand-dark/20 px-5 py-2.5 rounded-full hover:bg-brand-dark hover:text-white transition-all duration-300">
                            View All
                        </a>
                    @endif
                </div>
            </div>

            {{-- Swiper: Clean Card Design --}}
            <div class="swiper testimonials-swiper w-full !overflow-visible" data-swiper-options='{"loop": false}'>
                <div class="swiper-wrapper items-stretch">
                    @foreach ($this->testimonials as $testimonial)
                        <div class="swiper-slide !h-auto" wire:key="testimonial-{{ $testimonial->id }}">
                            <div
                                class="h-full flex flex-col p-8 bg-gray-50/50 rounded-2xl border border-gray-100 group hover:bg-white hover:shadow-[0_20px_40px_rgba(0,0,0,0.03)] transition-all duration-500">

                                <div class="flex-1">
                                    <p
                                        class="font-vietnam text-brand-yellow text-4xl leading-none mb-2 select-none italic">
                                        "</p>
                                    <p
                                        class="font-vietnam text-brand-dark/80 text-sm lg:text-base leading-relaxed tracking-tight -mt-2">
                                        {{ $testimonial->content }}
                                    </p>
                                </div>

                                <div class="mt-8 pt-6 border-t border-gray-100 flex items-center justify-between">
                                    <h4 class="font-vietnam text-brand-dark text-[13px] font-bold uppercase tracking-wide">
                                        {{ $testimonial->name }}
                                    </h4>
                                    <div
                                        class="w-1.5 h-1.5 rounded-full bg-brand-yellow group-hover:scale-150 transition-all duration-500">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- View More Card - Only show if more than 20 testimonials --}}
                    @if($this->testimonials->count() > 19)
                        <div class="swiper-slide !h-auto">
                            <a href="{{ route('testimonials') }}" class="block h-full">
                                <div
                                    class="h-full flex flex-col p-8 bg-linear-to-br from-brand-yellow/5 to-brand-yellow/10 rounded-2xl border border-brand-yellow/20 group hover:border-brand-yellow/40 hover:bg-linear-to-br hover:from-brand-yellow/10 hover:to-brand-yellow/15 transition-all duration-500 cursor-pointer">

                                    <div class="flex-1 flex flex-col items-center justify-center text-center">
                                        <div
                                            class="w-16 h-16 rounded-full bg-brand-yellow/20 flex items-center justify-center mb-4 group-hover:bg-brand-yellow/30 transition-colors">
                                            <svg class="w-8 h-8 text-brand-yellow" fill="none" stroke="currentColor"
                                                stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                            </svg>
                                        </div>

                                        <h3 class="font-vietnam font-bold text-brand-dark text-lg mb-2">View All
                                            Testimonials
                                        </h3>
                                        <p class="font-vietnam text-brand-dark/60 text-sm">
                                            Read more from our valued partners
                                        </p>
                                    </div>

                                    <div class="mt-6 pt-6 border-t border-brand-yellow/20 flex items-center justify-center">
                                        <span
                                            class="font-vietnam text-brand-dark text-[11px] font-bold uppercase tracking-wider">
                                            Explore More
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                </div>
            </div>

            {{-- Minimal Progress Bar --}}
            <div class="mt-10 max-w-[200px] mx-auto">
                <div class="h-1 bg-gray-100 rounded-full">
                    <div id="t-progress" class="h-full bg-brand-yellow rounded-full transition-all duration-300"
                        style="width:20%"></div>
                </div>
            </div>

        </div>

        {{-- Submit Feedback Modal --}}
        @if($showModal)
            <div x-data="{
                    name: '',
                    description: '',
                    submitting: false,
                    errors: { name: '', description: '' },
                    touched: { name: false, description: false },
                    namePattern: /^[\p{L}\s'\-.]+$/u,
                    descPattern: /^[^<>{}[\]\\]+$/u,
                    unsafeScheme: /(?:javascript|data|vbscript|file|blob):(?:\/\/)?/i,
                    nonHttpUrl: /(?:[a-z][a-z0-9+\-.]+):\/\//gi,
                    validate() {
                        if (this.name.trim().length === 0) {
                            this.errors.name = 'Name is required.';
                        } else if (!this.namePattern.test(this.name.trim())) {
                            this.errors.name = 'Name must not contain special characters.';
                        } else {
                            this.errors.name = '';
                        }

                        if (this.description.trim().length === 0) {
                            this.errors.description = 'Description is required.';
                        } else if (!this.descPattern.test(this.description.trim())) {
                            this.errors.description = 'Description must not contain < > { } [ ] characters.';
                        } else if (this.unsafeScheme.test(this.description)) {
                            this.errors.description = 'Description contains a disallowed URL scheme.';
                        } else {
                            const urls = [...this.description.matchAll(this.nonHttpUrl)];
                            const invalid = urls.some(m => !/^https?:\/\//i.test(m[0]));
                            this.errors.description = invalid ? 'Only http:// and https:// links are allowed.' : '';
                        }
                    },
                    handleSubmit() {
                        if (this.submitting) return;
                        this.touched.name = true;
                        this.touched.description = true;
                        this.validate();
                        if (this.errors.name || this.errors.description) return;
                        this.submitting = true;
                        const scrollY = window.scrollY;
                        $wire.name = this.name;
                        $wire.description = this.description;
                        $wire.Submit()
                            .then(() => window.scrollTo({ top: scrollY, behavior: 'instant' }))
                            .finally(() => { this.submitting = false; });
                    }
                }" x-init="$nextTick(() => document.body.classList.add('overflow-hidden'))"
                x-destroy="document.body.classList.remove('overflow-hidden')"
                class="fixed inset-0 z-50 flex items-center justify-center px-4">
                {{-- Backdrop --}}
                <div wire:click="closeModal" class="absolute inset-0 bg-brand-dark/40 backdrop-blur-sm"></div>

                {{-- Panel --}}
                <div class="relative w-full max-w-md bg-white rounded-2xl shadow-2xl p-8">

                    {{-- Close --}}
                    <button wire:click="closeModal"
                        class="absolute top-4 right-4 text-brand-dark/30 hover:text-brand-dark transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <h3 class="font-vietnam font-extrabold text-xl text-brand-dark uppercase tracking-tight mb-1">
                        Submit Feedback
                    </h3>
                    <div class="h-1 w-8 bg-brand-yellow rounded-full mb-6"></div>

                    <form @submit.prevent="handleSubmit" class="space-y-5">

                        {{-- Name --}}
                        <div>
                            <label
                                class="block font-vietnam text-[11px] font-bold uppercase tracking-wider text-brand-dark/50 mb-1.5">
                                Name <span class="text-red-500">*</span>
                            </label>
                            <input x-model="name" x-on:blur="touched.name = true; validate()" type="text"
                                placeholder="Your name"
                                :class="touched.name && errors.name ? 'border-red-400 bg-red-50' : 'border-gray-200 bg-gray-50'"
                                class="w-full font-vietnam text-sm text-brand-dark rounded-xl px-4 py-3 focus:outline-none focus:border-brand-yellow focus:bg-white transition-all duration-200 placeholder:text-brand-dark/25 border" />
                            <p x-show="touched.name && errors.name" x-text="errors.name"
                                class="mt-1.5 font-vietnam text-[11px] text-red-500"></p>
                            @error('name')
                                <p class="mt-1.5 font-vietnam text-[11px] text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Description --}}
                        <div>
                            <label
                                class="block font-vietnam text-[11px] font-bold uppercase tracking-wider text-brand-dark/50 mb-1.5">
                                Description <span class="text-red-500">*</span>
                            </label>
                            <textarea x-model="description" x-on:blur="touched.description = true; validate()" rows="4"
                                placeholder="Share your experience..."
                                :class="touched.description && errors.description ? 'border-red-400 bg-red-50' : 'border-gray-200 bg-gray-50'"
                                class="w-full font-vietnam text-sm text-brand-dark rounded-xl px-4 py-3 focus:outline-none focus:border-brand-yellow focus:bg-white transition-all duration-200 placeholder:text-brand-dark/25 resize-none border"></textarea>
                            <p x-show="touched.description && errors.description" x-text="errors.description"
                                class="mt-1.5 font-vietnam text-[11px] text-red-500"></p>
                            @error('description')
                                <p class="mt-1.5 font-vietnam text-[11px] text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center gap-3 pt-1">
                            <button type="submit"
                                :disabled="submitting"
                                :class="submitting ? 'opacity-60 cursor-not-allowed' : 'hover:bg-brand-yellow hover:text-brand-dark'"
                                class="inline-flex items-center gap-2 font-vietnam text-[11px] font-bold uppercase tracking-wider text-white bg-brand-dark px-6 py-2.5 rounded-full transition-all duration-300">
                                <svg x-show="submitting" class="w-3.5 h-3.5 animate-spin" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="3" />
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z" />
                                </svg>
                                Submit
                            </button>
                            <button type="button" wire:click="closeModal"
                                class="font-vietnam text-[11px] font-bold uppercase tracking-wider text-brand-dark/50 hover:text-brand-dark transition-colors">
                                Cancel
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        @endif

    </section>
</div>