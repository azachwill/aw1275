@php
    $cards = getHangoutsByStatus(['past'], 3);

    $mainCard = $cards[0];
    $videoCards = array_slice($cards, 1);
@endphp

<section>
    <div class="container space-between-sections grid grid-cols-12">
        @include('partials.header', [
            'data' => $header,
            'containerClasses' => 'col-span-12 md:col-span-8 lg:col-span-5',
        ])
        <div class="col-span-12 md:col-span-10 lg:col-span-9 md:col-start-3 lg:col-start-4 mt-[60px] md:mt-[80px] mt-[60px] md:mt-[80px] lg:mt-[200px]">
            <div class="grid grid-cols-12 flex md:gap-[16px] lg:gap-[28px]">
                <div class="col-span-12 lg:col-span-8">
                    @include('partials.play-cards.aspect-square-card', [
                        'data' => $mainCard,
                    ])
                </div>
                <div class="col-span-12 lg:col-span-4 flex flex-col md:flex-row lg:flex-col">
                     @if($videoCards)
                        @foreach($videoCards as $index => $card)
                             @include('partials.play-cards.aspect-video-card', [
                                 'data' => $card,
                                 'containerClasses' => 'w-full md:w-1/2 lg:w-full mt-[28px] md:mt-0 md:[&:not(:first-of-type)]:ml-[16px] lg:[&:not(:first-of-type)]:ml-0 lg:[&:not(:first-of-type)]:mt-[28px]'
                             ])
                        @endforeach
                     @endif
                </div>
            </div>
        </div>
    </div>
</section>
