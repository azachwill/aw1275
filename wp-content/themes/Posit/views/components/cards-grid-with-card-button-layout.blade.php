@php
    $width = 0
@endphp

<section>
    <div class="container space-between-sections grid grid-cols-12">
        @include('partials.header', [
            'data' => $header,
            'containerClasses' => 'col-span-12 md:col-span-8 lg:col-span-5',
        ])
        <div class="grid grid-cols-12 col-span-12 lg:col-span-9 lg:col-start-3 gap-[16px] md:gap-[24px] mt-[60px] md:mt-[80px] lg:mt-[120px]">
            @foreach($cards['rows'] as $index => $row)
                @if (count($row['columns']) == 3)
                    @php $width = '4' @endphp
                @elseif(count($row['columns']) == 2)
                    @php $width = '6' @endphp
                @else
                    @php $width = '12' @endphp
                @endif

                @foreach($row['columns'] as $index => $card)
                    @include('partials.card', [
                        'data' => $card,
                        'containerClasses' => 'col-span-12 md:col-span-'. $width,
                    ])
                @endforeach
            @endforeach

            <div class="col-span-12 grid grid-cols-12 bg-gray4/[0.2] flex px-[24px] py-[60px] md:px-[60px] lg:px-[80px] lg:py-[100px]">
                <div class="col-span-12 lg:col-span-7">
                    <h3 class="h3 text-blue1">
                        {{ $cardWithButton['title'] }}
                    </h3>
                    <p class="body-lg-regular text-blue1/[.62] mt-[16px]">
                        {{ $cardWithButton['description'] }}
                    </p>
                </div>
                 <div class="col-span-12 lg:col-span-5 flex justify-start lg:justify-end items-center mt-[40px] lg:mt-0">
                    @include('partials.cta', [
                        'data' => $cardWithButton['button'],
                        'additional_classes' => 'w-full md:w-fit'
                    ])
                 </div>
            </div>
        </div>
    </div>
</section>
