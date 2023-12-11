@php

$media                      = $header['media'];
$mediaType                  = $media['type'];
$mediaPosition              = $media['position'];

$sectionPadding             = $sectionOptions['padding'] ?? [];
$sectionAttributes          = $sectionOptions['attributes'] ?? [];
$sectionVisibility          = $sectionOptions['visibility'] ?? [];
$sectionBackground          = $sectionOptions['background'] ?? [];

$bgClass                    = ( $sectionBackground['override_color'] && $sectionBackground['color'] != 'custom' ) ? $sectionBackground['color'] : null;
$bgStyle                    = ( $sectionBackground['override_color'] && $sectionBackground['color'] == 'custom' ) ? 'style=background-color:' . $sectionBackground['custom_color'] . ';' : null;

$sectionId                  = $sectionAttributes['section_id'];
$sectionClasses             = $sectionAttributes['section_classes'];

$override_pt                = $sectionPadding['override_padding_top'];
$override_pb                = $sectionPadding['override_padding_bottom'];
$pt                         = $sectionPadding['padding_top'];
$pb                         = $sectionPadding['padding_bottom'];

if ( $mediaPosition == 'right' ) {
    $bodyMediaProps = 'highlights-media col-span-12 lg:col-span-6 lg:col-start-7 mt-[80px] lg:mt-[120px]';
    $containerClasses = 'col-span-12 md:col-span-8 lg:col-span-5';
} else {
    $bodyMediaProps = 'highlights-media col-span-12 md:col-span-10 lg:col-span-9 md:col-start-3 lg:col-start-4 mt-[40px] md:mt-[120px] rounded-lg';
    $containerClasses = 'col-span-12 md:col-span-8 lg:col-span-6';
}

@endphp

<section {{ $sectionId ? 'id=' . $sectionId . '' : '' }} class="section-video-layout container space-between-sections grid grid-cols-12 {{ $bgClass }} {{ $sectionClasses }} {{ $additionalClasses ?? '' }}">

    @if ( $sectionVisibility['toggle_section_header'] )

        @include('partials.header', [
            'data' => $header,
            'containerClasses' => $containerClasses,
        ])

    @endif

    <div class="{{ $bodyMediaProps }}">

        @if ( $hasVideo )
            <div class="video-container{{ $responsiveVideo ? ' responsive-embed' : null }} col-span-12">
                {!! $video !!}
            </div>
        @else
            <img class="w-full object-cover rounded-lg" src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
        @endif

        @if ($addFooter && $footerType === 'quote')
            <div class="mt-[40px]">
                <p class="h6 text-blue1">
                    {{ $quote['quote'] }}
                </p>
                <p class="h6-regular text-blue1 text-end mt-[24px]">
                    {{ $quote['author'] }}
                </p>
                <p class="h6 text-blue1/[.62] text-end mt-[8px]">
                    {{ $quote['job_position'] }}
                </p>
            </div>
        @elseif ($addFooter && $footerType === 'text')
            <div class="mt-[40px] md:mt-[80px] lg:mt-[120px]">
                {!! $text !!}
            </div>
        @endif

    </div>

</section><!-- .section-video-layouts -->
