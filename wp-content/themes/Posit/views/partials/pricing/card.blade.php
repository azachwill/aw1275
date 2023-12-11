<div class="pricing-card h-full px-8 {{ $pricingCard['price_card']['product_tag'] ? 'pt-10' : 'pt-20' }} pb-10 text-center bg-gray4/[.2] border border-solid border-blue3/[.4] rounded-lg">
    <div class="flex flex-col gap-7 mb-8">
        @if($pricingCard['price_card']['product_tag'])
            <p class="body-sm-regular">
                {{ $pricingCard['price_card']['product_tag'] }}
            </p>
        @endif

        @if($pricingCard['price_card']['product_name'])
            <h3 class="h5-regular">
                {!! $pricingCard['price_card']['product_name'] !!}
            </h3>
        @endif

        <div class="flex justify-center items-center gap-2">
            <span class="h3-regular">{{ $pricingCard['price_card']['price']  }}</span>
            <span class="body-sm-regular">{{ $pricingCard['price_card']['period'] }}</span>
        </div>

        @if($pricingCard['price_card']['price_note'])
            <p class="body-sm-regular">
                {{ $pricingCard['price_card']['price_note'] }}
            </p>
        @endif
    </div>

    <div class="flex justify-center mb-10">
        @include('partials.cta', [
            'data' => $pricingCard['price_card']['cta_button'],
            'additional_classes' => ''
        ])
    </div>

    @if($pricingCard['price_card']['benefits'])
        <div class="text-left">
            @foreach($pricingCard['price_card']['benefits'] as $benefit)
                <div class="flex items-center gap-4 p-4 border-b border-solid border-blue3/[.2]">
                    @include('partials.icons', ['icon' => 'check'])
                    <p class="body-md-regular w-full">{{ $benefit['benefit'] }}</p>
                </div>
            @endforeach
        </div>
    @endif
</div>
