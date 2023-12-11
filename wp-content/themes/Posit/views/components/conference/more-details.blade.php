<section id="moreDetails" class="more-details">
    <div class="container space-between-sections grid grid-cols-12 md:gap-x-[16px] lg:gap-x-[28px]">
        <div class="col-span-12 md:col-span-8 lg:col-span-5">
            @if ( $title )
            <h3 class="h3 text-blue1">
                {{ $title }}
            </h3>
            @endif
            @if ( $subtitle )
            <h5 class="h5 mt-[24px] text-blue1">
                {{ $subtitle }}
            </h5>
            @endif
            @if(!empty($description))
                <div class="mt-[24px]">
                    <div class="body-lg-regular text-blue1/[.62] ">
                        {!! $description !!}
                    </div>
                </div>
            @endif
        </div>
        <div class="more-details__ctas">

        </div>
        @if($image)
            <div class="relative col-span-12 md:col-start-7 md:col-end-13 mt-[80px] lg:mt-[120px] rounded-lg">
                <img class="w-screen rounded-lg" src="{{$image['url']}}" alt="{{ $image['alt'] }}">
            </div>
        @endif
    </div>
</section>
