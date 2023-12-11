<section>
    <div class="container space-between-sections grid grid-cols-12">
        @include('partials.header', [
            'data' => $header,
            'containerClasses' => 'col-span-12 md:col-span-8 lg:col-span-5',
        ])

        <div class="col-span-12 lg:col-span-9 lg:col-start-4 mt-[60px] md:mt-[80px] lg:mt-[120px]">
            <div class="grid grid-cols-12 md:gap-x-[16px] lg:gap-x-[28px] md:gap-y-[100px] hidden md:grid">
                @if($cards)
                    @foreach($cards as $index => $card)
                        <div class="col-span-4">
                            @include('partials.card-without-background', [
                                'data' => $card,
                            ])
                        </div>
                    @endforeach
                @endif
            </div>

            <div class="glide block md:hidden mr-[-20px]" data-mobile-peek-after="85">
                <div class="glide__track overflow-hidden" data-glide-el="track">
                    <div class="gap-[16px] md:gap-[28px] flex flex-row">
                        @if($cards)
                            @foreach($cards as $index => $card)
                                <div class="glide__slide max-w-[408px]">
                                    @include('partials.card-without-background', [
                                        'data' => $card,
                                    ])
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
