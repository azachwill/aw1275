<section class="top-features">
    <div class="grid grid-cols-12 container space-between-sections lg:gap-x-[28px]">

        @include('partials.header', [
            'data' => $header,
            'containerClasses' => 'col-span-12 lg:col-span-6',
        ])

        <div class="grid grid-cols-8 col-span-full md:gap-x-[28px] md:col-start-3 lg:col-start-5 md:col-end-13 mt-[80px]">

            @if ( $cardsMedia['type'] != 'none' )

                <div class="body-media col-span-full rounded-lg h-[350px]">

                    @if ( $cardsMedia['type'] == 'image' )

                        <img class="body-media__image rounded-lg object-cover h-[100%] w-[100%]" src="{{ $cardsMedia['image']['url'] }}" alt="{{ $cardsMedia['image']['alt'] ? $cardsMedia['image']['alt'] : '' }}">

                    @endif

                    @if ( $cardsMedia['type'] == 'video' )

                        <div class="rounded-lg">
                            {!! $cardsMedia['video'] !!}
                        </div>

                    @endif

                </div>

            @endif

            @if ( $cards )

                @foreach($cards as $index => $card)
                    @include('partials.card', [
                        'data' => $card['card'],
                        'containerClasses' => 'col-span-full mt-[40px] lg:mt-[80px] [&:not(:first-of-type)]:md:col-span-4 [&:not(:first-of-type)]:mt-[16px] md:[&:not(:first-of-type)]:mt-[24px]',
                    ])
                @endforeach
                
            @endif

            <div class="grid col-span-full justify-center">
                @include('partials.cta', [
                    'data' => $cta,
                    'additional_classes' => 'w-fit mt-[40px] lg:mt-[60px]'
                ])
            </div>
        </div>
    </div>
</section>
