@php
    $meetUs = get_field('meet_us')
@endphp

<section id="meet-us" class="section bg-blue5 h-screen" data-anchor="meet-us">
    <div class="section-container flex justify-center items-center h-full">
        <div class="meet-us-container">
            <div class="grid grid-cols-4 md:grid-cols-12 meet-us-text">
                <h2 class="h2 text-center col-span-4 px-[20px] md:px[0] md:col-span-12 lg:col-span-8 xl:col-span-6 md:col-start-1 lg:col-start-3 xl:col-start-4">
                    {{ $meetUs['title'] }}
                </h2>
            </div>
            <div class="flex justify-center mt-[40px] description-container">
                <div class="text-center max-w-[874px]">
                    {!! $meetUs['description'] !!}
                </div>
            </div>
        </div>
    </div>
</section>