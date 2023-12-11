<section>
    <div class="container space-between-sections">
        <div class="grid grid-cols-12">
            @include('partials.header', [
                'data' => $header,
                'containerClasses' => 'col-span-12 lg:col-span-6'
            ])
        </div>

        @if($pricingCards['price_cards'])
            <div class="grid grid-cols-12 col-span-12 gap-6 lg:gap-7 mt-20">
                @foreach($pricingCards['price_cards'] as $pricingCard)
                    <div class="col-span-12 md:col-span-10 md:col-start-2 lg:col-span-4">
                        @include('partials.pricing.card', $pricingCard)
                    </div>
                @endforeach
            </div>
        @endif

        @if($pricingCards['price_cards'])
            <div class="grid grid-cols-12 mt-10">
                <div class="col-span-12 md:col-span-6">
                    <p class="body-sm-regular text-blue1/[.62] link:link-light">
                        {!! $pricingNotes !!}
                    </p>
                </div>
            </div>
        @endif
    </div>
</section>