@php
    $status = getSingleConferenceStatus($startDate, $startTime, $endDate, $endTime);
@endphp

<section class="single-banner">
    @if($status === 'upcoming')
        @include('components.conference.countdown', [
            'startDate' => $startDate . ' ' . $startTime
        ])
    @else
        <div class="single-conference-banner bg-blue1">
            <div class="grid grid-cols-12 container uppercase text-neutral-light pb-[40px] pt-[32px] lg:pt-[40px] md:gap-x-[16px] lg:gap-x-[28px]">
                <div class="grid col-span-12 lg:col-span-6">
                    <div class="sh1">
                        {{ $status == 'past' ? 'ended' : 'in progress'}}
                    </div>
                    <div class="sh4">
                        {{date("F d Y", strtotime($startDate)) . ' - '. date("F d Y", strtotime($endDate))}}
                    </div>
                </div>
                @if($status == 'past' && !empty($singleDetails['cta']))
                    <div class="grid col-span-12 lg:col-span-6 md:col-end-13 lg:col-end-13 mt-[24px] md:mt-[16px] lg:mt-0 md:justify-end">
                        @include('partials.cta', [
                            'data' => $singleDetails['cta'],
                            'additional_classes' => 'w-full md:w-fit'
                        ])
                    </div>
                @endif
            </div>
        </div>
    @endif
</section>