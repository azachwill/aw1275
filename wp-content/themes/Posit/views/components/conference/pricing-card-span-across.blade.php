<div class="pricing-card flex flex-col justify-between h-full px-[24px] py-[32px] bg-gray4/[.2] border border-solid border-blue3/[.4] rounded-lg text-center text-blue1">

    @if($pricingCard['product_name'])

    <h5 class="pricing-card-title h5-regular mb-[30px]">
        {!! $pricingCard['product_name'] !!}
    </h5>

    @endif
    
    <div class="pricing-card-body flex flex-col md:flex-row gap-7">

        <div class="pricing-card-body-item md:flex-1">
            @if ( $pricingCard['price_note'] )
                <div class="body-sm-regular">
                    {{ $pricingCard['price_note'] }}
                </div>
            @endif

            <div class="h3-regular">
                {!! $pricingCard['price']  !!}
            </div>
        </div>

        @if ( $pricingCard['price_description'] )
            {!! $pricingCard['price_description'] !!}
        @endif
        
    </div>

    <div class="pricing-card-footer flex justify-center mt-[24px] lg:mt-[50px]">

        @include('partials.cta', [
            'data' => $pricingCard['cta_button'],
            'additional_classes' => $pricingCard['is_sold_out'] ? 'disabled' : ''
        ])
        
    </div>
</div>