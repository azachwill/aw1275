@php

$visibility         = get_the_ID() === 5874 || get_the_ID() === 3000 || get_the_ID() === 2991 || get_the_ID() === 749;

@endphp

@if ( is_front_page() || $visibility )

<section id="conference-banner" class="fixed z-20 top-0 w-full h-[196px] lg:h-[78px] bg-teal-dark">

    <div class="container flex flex-col lg:flex-row gap-4 lg:gap-16 lg:justify-start lg:items-center w-full lg:h-[78px] py-[32px] lg:py-[16px] lg:px-[80px]">
        <div class=" flex-1 text-center lg:text-left">
            <p class="body-sm-semibold lg:body-md-semibold text-neutral-light lg:inline-block">
                Grow your data science skills at
                <span></span>
                posit::conf(2023)
            </p>
            <p class="lg:text-xl lg:body-md-regular text-neutral-light mt-[10px] lg:mt-[0] lg:ml-6 lg:pl-6 lg:border-l lg:inline-block">
                September 17th-20th in Chicago
            </p>
        </div>

        <div class="flex justify-between lg:justify-left items-center">
            <a
                tabindex="0"
                role="button"
                target="_self"
                href="/conference"
                aria-label="Learn More"
                rel="noopener noreferrer"
                class="btn btn-sm-secondary-dark w-full md:w-fit !text-14 !py-[8px] !lg:py-[6px]"
            >
                Learn more
            </a>

            <button
                id="closeBanner"
                class="close-alert p-[16px] absolute top-[0] right-[0] lg:relative lg:top-[0]"
            >
                @include('partials.icons', [
                    'icon' => 'close-icon',
                    'class' => 'stroke-white'
                ])
            </button>
        </div>
    </div>
</section><!-- .conference-banner -->

@endif