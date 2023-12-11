@php
    $dateInSecs = strtotime($startDate);
    $sectionId = $attributes['section_id'];
    $sectionClasses = $attributes['section_classes'];
@endphp

<section {{ $sectionId ? 'id=' . $sectionId . '' : '' }} class="countdown bg-blue1 {{ $sectionClasses }}" data-date-secs={{ $dateInSecs }}>
    <div class="container grid grid-cols-12 gap-y-[40px] text-neutral-light uppercase py-[40px] justify-center items-center">
        <div class="col-span-full md:col-span-6 flex justify-center md:justify-end md:pr-[40px] md:border-r md:border-blue3/40">
            <div class="mr-[40px] text-center">
                <div class="weeks sh1"></div>
                <div class="sh4">
                    weeks
                </div>
            </div>
            <div class="min-w-[1px] min-h-full bg-blue3/40"></div>
            <div class="ml-[40px] text-center">
                <div class="days sh1"></div>
                <div class="sh4">
                    days
                </div>
            </div>
        </div>
        <div class="col-span-12 md:col-span-6 flex justify-center md:justify-start md:pl-[40px]">
            <div class="mr-[40px] text-center">
                <div class="hours sh1"></div>
                <div class="sh4">
                    hours
                </div>
            </div>
            <div class="min-w-[1px] min-h-full bg-blue3/40"></div>
            <div class="ml-[40px] text-center">
                <div class="minutes sh1"></div>
                <div class="sh4">
                    minutes
                </div>
            </div>
        </div>
    </div>
</section>