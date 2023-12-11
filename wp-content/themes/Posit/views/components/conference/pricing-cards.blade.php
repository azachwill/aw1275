<section id="pricingCards" class="pricing-cards">

    <div class="container space-between-sections grid grid-cols-12 gap-y-[87px]">

        @include('partials.header', [
            'data' => $header,
            'containerClasses' => 'col-span-12 lg:col-span-6',
        ])

        @if( !empty($priceGroups) )

            @foreach($priceGroups as $priceGroup)

                <div class="price-group col-span-12 grid grid-cols-12 lg:col-start-4 lg:col-end-13">

                    @if ( $priceGroup['title'] )

                        <div class="col-span-12 h3 text-blue1">
                            {{ $priceGroup['title'] }}
                        </div>

                    @endif

                    @if ( $priceGroup['price_cards'] )
                    
                        <div class="grid grid-cols-3 col-span-12 gap-6 lg:gap-7 mt-10">

                            @foreach ( $priceGroup['price_cards'] as $pricingCard )

                                @php
                                    $cardProps = '';
                                    $cardProps .= $pricingCard['span_across'] ? 'col-span-12' : 'col-span-3 md:col-span-1';
                                @endphp
                                
                                @if ( !$pricingCard['toggle_card'] )
                                    @continue
                                @endif

                                <div class="{{ $cardProps }}"> 

                                    @if ( $pricingCard['span_across'] )
                                        @include('components.conference.pricing-card-span-across', $pricingCard)
                                    @else
                                        @include('components.conference.pricing-card', $pricingCard)
                                    @endif
                                    
                                </div>

                            @endforeach

                        </div>
                        
                    @endif

                </div>

            @endforeach

        @endif

    </div>

</section><!-- .pricing-cards -->