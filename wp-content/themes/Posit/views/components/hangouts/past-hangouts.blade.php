@php
    $sectionGrid                = $sectionOptions['grid'];
    $gridType                   = $sectionGrid['grid_type'];

    if ( $gridType == 'archive' ) {
        $cards = getHangoutsByStatus(['past'], 150);
    } else {
        $cards = getHangoutsByStatus(['past'], 3);
    }
    
    $sectionPadding             = $sectionOptions['padding'];
    $sectionAttributes          = $sectionOptions['attributes'];
    $sectionVisibility          = $sectionOptions['visibility'];

    $sectionId                  = $sectionAttributes['section_id'];
    $sectionClasses             = $sectionAttributes['section_classes'];

    $override_pt                = $sectionPadding['override_padding_top'];
    $override_pb                = $sectionPadding['override_padding_bottom'];
    $pt                         = $sectionPadding['padding_top'];
    $pb                         = $sectionPadding['padding_bottom'];

    $sectionId                  = $sectionId ? 'id=' . $sectionId . '' : '';

    $gridProps                  = $gridType == 'archive' ? 
                                    'md:gap-x-[64px] gap-y-[60px] md:gap-y-[80px]' : 
                                    'lg:col-span-9 lg:col-start-4 md:gap-[16px] lg:gap-[28px] gap-y-[60px] md:gap-y-0'
                                ;
@endphp

@if(sizeof($cards) > 0)
    <section {{ $sectionId }} class="section-past-hangouts-cards space-between-sections {{ $sectionClasses }} {{ $override_pt ? 'pt-' . $pt : '' }} {{ $override_pb ? 'pb-' . $pb : '' }}">
        <div class="container space-between-sections grid grid-cols-12">

            @if( $sectionVisibility['toggle_section_header'] )
            @include('partials.header', [
                'data' => $header,
                'containerClasses' => 'col-span-12 md:col-span-8 lg:col-span-5',
            ])
            <!-- .section-header -->
            @endif

            <div class="grid grid-cols-12 col-span-12 mt-[80px] lg:mt-[120px] {{ $gridProps }}">
                @foreach($cards as $index => $card)
                    @include('partials.play-cards.past-hangouts-card', [
                        'data' => $card,
                        'containerClasses' => 'col-span-12 md:col-span-4',
                        'gridType' => $gridType
                    ])
                @endforeach
            </div>
        </div>
    </section>
@endif
