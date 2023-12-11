@php
    $benefitsHeader = get_field('benefits_header');
@endphp

<section id="benefits-header" class="section overflow-hidden">
    <div class="flex section-container justify-center items-center h-full overflow-hidden bg-blue5">
        <div class="text-center max-w-[1280px]">
            <div class="text-blue1 text-center hidden md:block">
                {!! $benefitsHeader["desktop_text"] !!}
            </div>
            <div class="text-blue1 text-center md:hidden">
                {!! $benefitsHeader["mobile_text"] !!}
            </div>
        </div>
    </div>
    
    @include('partials.scroll-indicator')
</section>