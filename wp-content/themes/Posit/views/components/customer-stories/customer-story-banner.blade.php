<section id="customer-story-banner" class="section bg-blue1 mt-[80px] [&:last-of-type]:mb-[80px]">
    <div class="container grid grid-cols-12 py-[60px] md:py-[40px] lg:px-[80px]">
        @if ($statistics)
            <div class="col-span-12 mb-[40px] lg:mb-[80px] h-fit">
                <div class="flex flex-wrap flex-col md:flex-row justify-center md:justify-around items-center gap-y-[40px]">
                    @foreach($statistics as $index => $statistic)
                        @if($index > 0)
                            <div class="w-[1px] md:h-[82px] lg:h-[92px] bg-blue3/[.4] shrink-0 self-center"></div>
                        @endif
                        <div class="flex flex-auto justify-center w-[190px] md:w-[100px] lg:w-[190px] text-center">
                            <div class="w-[190px] md:w-[100px] lg:w-[190px]">
                                <p class="sh1 text-neutral-light">
                                    {{ $statistic['headline'] }}
                                </p>
                                <p class="sh4 text-neutral-light uppercase">
                                    {{ $statistic['description'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        <div class="col-span-12">
            <p class="h4 text-neutral-light">
                {{ $testimony }}
            </p>
            <p class="h6-regular text-neutral-light mt-[80px]">
                {{ $author }}
            </p>
            <p class="h6 text-neutral-light mt-[8px]">
                {{ $jobPosition }}
            </p>
        </div>
    </div>
</section>