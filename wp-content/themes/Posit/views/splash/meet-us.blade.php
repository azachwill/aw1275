@php
    $meetUs = get_field('meet_us')
@endphp

<section id="meet-us" class="section section-hero h-screen" data-anchor="meet-us" style="background-image: url('/wp-content/themes/Posit/assets/images/splash-feature/papago1.png')">

    <div class="overlay"></div>

    <div class="section-container flex justify-center items-center h-full">
        <div class="meet-us-container">
            @if ( $meetUs['title'] )
            <div class="grid grid-cols-4 md:grid-cols-12 meet-us-text">
                <h2 class="h2 text-center col-span-4 px-[20px] md:px[0] md:col-span-12 lg:col-span-8 xl:col-span-6 md:col-start-1 lg:col-start-3 xl:col-start-4">
                    {{ $meetUs['title'] }}
                </h2>

                @if ( $meetUs['subtitle'] )
                <p class="meet-us-subtitle font-medium col-span-12 lg:col-span-12 text-center mt-[0]">{{ $meetUs['subtitle'] }}</p>
                @endif
            </div>
            @endif

            @if ( $meetUs['description'] )
            <div class="flex justify-center mt-[40px] description-container">
                <div class="text-center max-w-[874px]">
                    {!! $meetUs['description'] !!}
                </div>
            </div>
            @endif
        </div>
    </div>
</section>