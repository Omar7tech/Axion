@php
    $content = app(\App\Settings\GeneralSettings::class)->about_us_page_content;
@endphp

@if($content)
<section class="py-16 md:py-24 bg-[#030303] overflow-hidden px-6 lg:px-20">
    <div class="container mx-auto max-w-7xl">
        <div class="prose prose-invert prose-lg max-w-none
            prose-headings:font-black prose-headings:uppercase prose-headings:tracking-tighter prose-headings:text-white
            prose-h2:text-3xl prose-h2:mb-6 prose-h2:mt-12
            prose-h3:text-2xl prose-h3:mb-4 prose-h3:mt-8
            prose-p:text-white/70 prose-p:leading-relaxed prose-p:mb-6
            prose-strong:text-brand-yellow prose-strong:font-bold
            prose-a:text-brand-yellow prose-a:no-underline hover:prose-a:underline
            prose-ul:text-white/70 prose-ul:pl-6 prose-ul:mb-6
            prose-ol:text-white/70 prose-ol:pl-6 prose-ol:mb-6
            prose-li:mb-2
            prose-blockquote:border-l-brand-yellow prose-blockquote:bg-white/5 prose-blockquote:py-4 prose-blockquote:px-6 prose-blockquote:italic prose-blockquote:text-white/60">
            {!! $content !!}
        </div>
    </div>
</section>
@endif
