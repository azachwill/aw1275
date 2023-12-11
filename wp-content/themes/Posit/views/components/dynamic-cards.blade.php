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

<section {{ $sectionId ? 'id=' . $sectionId : null }} class="section-dynamic-cards space-between-sections {{ $bgClass }} {{ $sectionClasses }} {{ $override_pt ? ' pt-' . $pt : null }} {{ $override_pb ? ' pb-' . $pb : null }}" {{ $bgStyle }}>

    @if( $sectionVisibility['toggle_section_header'] )

    <div class="section-header container space-between-sections grid grid-cols-12 gap-y-[87px]">

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

    @php
    $sectionProps  = $cardType == 'solid-1' ? 'lg:col-span-9 lg:col-start-4' : '';
    @endphp

    @if ( $sectionGridType == '2-by-3' )

    <div class="section-body grid grid-cols-12 col-span-12">

        @if ( $dynamicCards )

            @php
                $twoCards               = count($dynamicCards) <= 2;
                $threeCards             = count($dynamicCards) >= 3;
                $twoCardLayout          = 'col-span-12 md:col-span-6 mb-[48px] lg:mb-[0]';
                $threeCardLayout        = 'col-span-12 md:col-span-6 lg:col-span-4 mb-[36px] md:mb-[12px] lg:mb-[0]';
            @endphp

            <div class="dynamic-card-grid card-grid card-grid--2-across container grid grid-cols-12 col-span-12 gap-8 mt-[24px] {{ $sectionProps }}">

                <div class="dynamic-card standard-card rounded-[8px] col-span-12 md:col-span-6 lg:col-span-4 mb-[36px] md:mb-[12px] lg:mb-[0] hidden lg:block lg:invisible"></div>

                @foreach( $dynamicCards as $dynamicCard )
                    @if ( $loop->index >= 2 )
                        @php continue; @endphp
                    @endif
                    @include('partials.dynamic-card', [
                        'dynamicCard' => $dynamicCard,
                        'cardType' => $cardType,
                        'twoCards' => $twoCards,
                        'layoutClasses' => count($dynamicCards) <= 2 ? $twoCardLayout : (count($dynamicCards) >= 3 ? $threeCardLayout : ''),
                    ])
                @endforeach

            </div><!-- First two cards -->

            <div class="dynamic-card-grid card-grid card-grid--3-across container col-span-12 grid grid-cols-12 gap-8 mt-[24px] lg:mt-[96px] {{ $sectionProps }}">
                
                @foreach( $dynamicCards as $dynamicCard )
                    @if ( $loop->index <= 1 )
                        @php continue; @endphp
                    @endif
                    @include('partials.dynamic-card', [
                        'dynamicCard' => $dynamicCard,
                        'cardType' => $cardType,
                        'twoCards' => $twoCards,
                        'layoutClasses' => count($dynamicCards) <= 2 ? $twoCardLayout : (count($dynamicCards) >= 3 ? $threeCardLayout : ''),
                    ])
                @endforeach

            </div><!-- Rest of cards -->

        @endif

    </div><!-- .section-body -->

    @else

    <div class="section-body dynamic-card-grid card-grid container col-span-12 grid grid-cols-12 gap-8 mt-[24px] {{ $sectionProps }}">

        @if ( $dynamicCards )

            @php
                $twoCards               = count($dynamicCards) <= 2;
                $threeCards             = count($dynamicCards) >= 3;
                $twoCardLayout          = 'col-span-12 md:col-span-6 mb-[48px] lg:mb-[0]';
                $threeCardLayout        = 'col-span-12 md:col-span-6 lg:col-span-4 mb-[36px] md:mb-[12px] lg:mb-[0]';
            @endphp

            @foreach( $dynamicCards as $dynamicCard )
                @include('partials.dynamic-card', [
                    'dynamicCard' => $dynamicCard,
                    'cardType' => $cardType,
                    'twoCards' => $twoCards,
                    'layoutClasses' => count($dynamicCards) <= 2 ? $twoCardLayout : (count($dynamicCards) >= 3 ? $threeCardLayout : ''),
                ])
            @endforeach

        @endif
        <!-- .dynamic-card -->

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

</section><!-- .section-dynamic-cards -->