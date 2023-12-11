@php
    $width = 0;
    $fullGrid = $data['full_grid'];
    $lgColSpan = $fullGrid ? 12 : 10;
    $headingCard = $data['heading_card_variant'];
@endphp


<div class="grid grid-cols-12 col-span-12 lg:col-span-{{ $lgColSpan }} {{ !$fullGrid ? 'lg:col-start-3 lg:ml-[45px]' : '' }} gap-[16px] md:gap-[24px] mt-[60px] md:mt-[80px] lg:mt-[120px] {{ $headingCard ? 'heading-card-variant' : '' }} {{ $containerClasses ?? '' }}">
    @if($data['rows'])
        @foreach($data['rows'] as $index => $row)
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
                    'containerClasses' => $headingCard ? 'col-span-12 md:col-span-6 lg:col-span-'.$width : 'col-span-12 md:col-span-'. $width,
                ])
            @endforeach
        @endforeach
    @endif
</div>
