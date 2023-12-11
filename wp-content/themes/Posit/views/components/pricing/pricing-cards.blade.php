<section>
    <div class="container space-between-sections">
        @if($pricingCards['add_discount_banner'])
            <div class="flex justify-center bg-blue1 py-[12px] px-[16px] rounded-[4px]">
                <p class="ui-medium text-neutral-light/60 uppercase text-center">
                    <span class="text-neutral-light">
                        {{ $pricingCards['discount_banner']["discount"] }}
                    </span>
                    {{ $pricingCards['discount_banner']['additional_information'] }}
                </p>
            </div>
        @endif

        @if($pricingCards['price_cards'])
            <div class="grid grid-cols-12 col-span-12 gap-6 lg:gap-7 mt-10">
                @foreach($pricingCards['price_cards'] as $pricingCard)
                    <div class="col-span-12 md:col-span-10 md:col-start-2 lg:col-span-4">
                        @include('partials.pricing.card', $pricingCard)
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>