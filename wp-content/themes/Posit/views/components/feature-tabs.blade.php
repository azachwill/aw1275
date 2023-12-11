@php

$media                      = $header['media'];

$sectionPadding             = $sectionOptions['padding'];
$sectionAttributes          = $sectionOptions['attributes'];
$sectionVisibility          = $sectionOptions['visibility'];
$sectionBackground          = $sectionOptions['background'];

$bgClass                    = ( $sectionBackground['override_color'] && $sectionBackground['color'] != 'custom' ) ? $sectionBackground['color'] : null;
$bgStyle                    = ( $sectionBackground['override_color'] && $sectionBackground['color'] == 'custom' ) ? 'style=background-color:' . $sectionBackground['custom_color'] . ';' : null;

$sectionId                  = $sectionAttributes['section_id'];
$sectionClasses             = $sectionAttributes['section_classes'];

$override_pt                = $sectionPadding['override_padding_top'];
$override_pb                = $sectionPadding['override_padding_bottom'];
$pt                         = $sectionPadding['padding_top'];
$pb                         = $sectionPadding['padding_bottom'];

@endphp

<section {{ $sectionId ? 'id=' . $sectionId . '' : '' }} class="section-feature-tabs space-between-sections {{ $bgClass }} {{ $sectionClasses }} {{ $override_pt ? ' pt-' . $pt : '' }} {{ $override_pb ? ' pb-' . $pb : '' }}" {{ $bgStyle }}>

    @if ( $sectionVisibility['toggle_section_header'] )

    <div class="section-header container space-between-sections grid grid-cols-12 gap-y-[48px] lg:gap-y-[87px]">

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

    <div class="section-body container mt-[32px] lg:mt-[64px]">

        @include('partials.feature-tab', [
            'featureTabs' => $featureTabs,
            'tabsOptions' => $tabsOptions,
            'sectionId' => $sectionId,
        ])

    </div><!-- .section-body -->

</section><!-- .section-feature-tabs -->

