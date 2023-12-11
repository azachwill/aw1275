<section class="quote">
    <div class="container py-[80px]">
        <div class="bg-blue2 px-[20px] md:px-[80px] py-[40px] md:py-[40px] lg:py-[80px] rounded-lg text-neutral-light">
            <div class="h4">
                {{ $quote }}
            </div>
            <div class="h6-regular mt-[32px] md:mt-[40px] lg:mt-[80px]">
                {{ $author }}
            </div>
            @if(!empty($jobPosition))
                <div class="h6 mt-[8px]">
                    {{ $jobPosition }}
                </div>
            @endif
        </div>
    </div>
</section>