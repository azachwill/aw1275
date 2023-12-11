<div class="pricing-card flex flex-col justify-between h-full px-[24px] py-[32px] bg-gray4/[.2] border border-solid border-blue3/[.4] rounded-lg text-center text-blue1">

    <div class="flex flex-col gap-7">

        @if($pricingCard['product_name'])
            <h5 class="h5-regular">
                {!! $pricingCard['product_name'] !!}
            </h5>
        @endif

        <div>
            @if($pricingCard['price_note'])
                <div class="body-sm-regular">
                    {{ $pricingCard['price_note'] }}
                </div>
            @endif
            <div class="h3-regular">
                {!! $pricingCard['price']  !!}
            </div>
        </div>

        @if($pricingCard['price_description'])
            <div class="body-sm-regular">
                {!! $pricingCard['price_description'] !!}
            </div>
        @endif
        
    </div>

    <div class="flex justify-center mt-[24px] lg:mt-[50px]">
        @include('partials.cta', [
            'data' => $pricingCard['cta_button'],
            'additional_classes' => $pricingCard['is_sold_out'] ? 'disabled' : ''
        ])
    </div>
</div>