@php

$media                      = $header['media'];

$sectionPadding             = $sectionOptions['padding'];
$sectionAttributes          = $sectionOptions['attributes'];
$sectionVisibility          = $sectionOptions['visibility']; 
$sectionBackground          = $sectionOptions['background'];
$sectionGridType            = $sectionOptions['grid']['grid_type'];

$bgClass                    = ( $sectionBackground['override_color'] && $sectionBackground['color'] != 'custom' ) ? $sectionBackground['color'] : null;
$bgStyle                    = ( $sectionBackground['override_color'] && $sectionBackground['color'] == 'custom' ) ? 'style=background-color:' . $sectionBackground['custom_color'] . ';' : null;

$sectionId                  = $sectionAttributes['section_id'];
$sectionClasses             = $sectionAttributes['section_classes'] ?? null;

$override_pt                = $sectionPadding['override_padding_top'];
$override_pb                = $sectionPadding['override_padding_bottom'];
$pt                         = $sectionPadding['padding_top'];
$pb                         = $sectionPadding['padding_bottom'];

@endphp

<section {{ $sectionId ? 'id=' . $sectionId : null }} class="section-cta-banner py-[40px] {{ $bgClass }} {{ $sectionClasses }} {{ $override_pt ? ' pt-' . $pt : null }} {{ $override_pb ? ' pb-' . $pb : null }}" {{ $bgStyle }}>

    @if( $sectionVisibility['toggle_section_header'] )

    <div class="section-header container space-between-sections grid grid-cols-12 gap-y-[87px] mb-[24px]">

        @include('partials.header', [
            'data' => $header,
            'containerClasses' => 'col-span-12 lg:col-span-6',
        ])

        @if ( $media['type'] != 'none' )

        @include('partials.header-media', [
            'media' => $media,
            'containerClasses' => 'col-span-12 lg:col-span-6',
        ])

        @endif

    </div><!-- .section-header -->
    
    @endif

    @if ( $ctaBannerCards )

    <div class="section-body cta-banner-grid container col-span-12 grid lg:grid-cols-2 gap-8 md:gap-8 lg:gap-32 xl:gap-52 justify-between">

        @foreach ( $ctaBannerCards as $card )

        <div class="cta-banner-card flex flex-col justify-items-center gap-4 text-neutral-light">

            @if ( $card['card_items'] )

                @foreach ( $card['card_items'] as $card_item )

                    @if ( $card_item['item_type'] == 'title' )
                        <p class="cta-banner-title h5-regular text-neutral-light uppercase">
                            {!! $card_item['title'] !!}
                        </p>
                    @elseif ( $card_item['item_type'] == 'subtitle' )
                        <p class="cta-banner-subtitle body-lg-semibold text-neutral-light">
                            {!! $card_item['subtitle'] !!}
                        </p>
                    @elseif ( $card_item['item_type'] == 'description' )
                        <p class="cta-banner-description body-md-regular">
                            {!! $card_item['description'] !!}
                        </p>
                    @elseif ( $card_item['item_type'] == 'cta-group' )
                        
                        @if ( $card_item['ctas'] )

                        <div class="cta-banner-group flex flex-row gap-x-8 justify-center md:justify-start">
                            
                            @foreach ( $card_item['ctas'] as $cta )

                                @if ( $cta['cta_type'] == 'cta-image' )

                                    <div class="cta-banner-cta h-[56px]">
                                        <a class="h-full inline-block" href="{{ esc_url( $cta['link']['url'] ) }}" target="{{ esc_attr( $cta['link']['target'] ) }}">{!! wp_get_attachment_image( $cta['image'], 'full', false, ['class' => 'h-full w-auto'] ) !!}</a>
                                    </div>

                                @endif

                            @endforeach

                        </div>

                        @endif

                    @endif

                @endforeach

            @endif

        </div><!-- .cta-banner-card -->

        @endforeach

    </div><!-- .section-body -->

    @endif

    @if ( $sectionFooter['buttons_cta'] )

    <div class="section-footer container flex flex-col md:flex-row justify-center mt-[64px]">
        @if( $sectionFooter['buttons_cta'] )
            @foreach( $sectionFooter['buttons_cta'] as $index => $cta )
                @include('partials.cta', [
                    'data' => $cta,
                    'additional_classes' => 'mb-[16px] last-of-type:mb-0 md:mb-0 md:mr-[16px] md:last-of-type:mr-0'
                ])
            @endforeach
        @endif

    </div><!-- .section-footer -->

    @endif

</section><!-- .section-cta-banner -->