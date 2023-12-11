@php
    $media = get_field('media');
@endphp

@if ( $media['embed'] )
<section id="section-media" class="section section-media overflow-hidden">
    <div class="flex section-container justify-center items-center h-full overflow-hidden bg-blue5">
        <div class="section-container video-content lg:mt-[5%] lg:max-h-[500px] lg:h-full w-[100%]">
            <div class="grid grid-cols-12 gap-x-4">
                <div class="col-span-12 md:col-span-6 md:col-start-4">
                    <div class="video-container">
                        {!! $media['embed'] !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @include('partials.scroll-indicator')
</section>
@endif