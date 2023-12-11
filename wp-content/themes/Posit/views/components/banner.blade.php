@php
    $heading                    = 'h2';

    if ( !empty( $headingTag ) ) {
        $heading = $headingTag;
    }

    $sectionOptions             = $sectionOptions ?? [];

    $sectionPadding             = $sectionOptions['padding'];
    $override_pt                = $sectionPadding['override_padding_top'];
    $override_pb                = $sectionPadding['override_padding_bottom'];
    $pt                         = $sectionPadding['padding_top'];
    $pb                         = $sectionPadding['padding_bottom'];

    $sectionAttributes          = $sectionOptions['attributes'];
    $sectionId                  = $sectionAttributes['section_id'] ?? null;
    $sectionClasses             = $sectionAttributes['section_classes'] ?? null;

    $sectionVisibility          = $sectionOptions['visibility'];

    $sectionBackground          = $sectionOptions['background'];
    $bgClass                    = ( $sectionBackground['override_color'] && $sectionBackground['color'] != 'custom' ) ? $sectionBackground['color'] : null;
    $bgStyle                    = ( $sectionBackground['override_color'] && $sectionBackground['color'] == 'custom' ) ? 'style=background-color:' . $sectionBackground['custom_color'] . ';' : null;    

    $bgColorClass               = $sectionBackground['override_color'] ? $bgClass : 'bg-blue1';

    $titleStylesData            = $titleStylesData ?? [];
    $titleColor                 = $titleStylesData['override_color'] ? 'color:' . $titleStylesData['color'] . ';' : null;
    $titleStyles                = '';
    $titleStyles                .= 'style=' . $titleColor . '';

    $descriptionStylesData      = $descriptionStylesData ?? [];
    $descriptionColor           = $descriptionStylesData['override_color'] ? 'color:' . $descriptionStylesData['color'] . ';' : null;
    $descriptionStyles          = '';
    $descriptionStyles          .= 'style=' . $descriptionColor . '';

    $mediaData                  = $media['media_block'] ?? [];
    
    $mediaOptions               = $media['media_options'] ?? [];
    $mediaOrder                 = $mediaOptions['order'];

    $sectionBorderData          = $sectionOptions['border'];
    $sectionBorderRadius        = $sectionBorderData['radius'];
    $secRadiousTopLeft          = 'rounded-tl-[' . $sectionBorderRadius['top_left'] . 'px]';
    $secRadiousTopRight         = 'rounded-tr-[' . $sectionBorderRadius['top_right'] . 'px]';
    $secRadiousBottomLeft       = 'rounded-bl-[' . $sectionBorderRadius['bottom_left'] . 'px]';
    $secRadiousBottomRight      = 'rounded-br-[' . $sectionBorderRadius['bottom_right'] . 'px]';

    $sectionRadiusProps         = '';
    $sectionRadiusProps         = $sectionBorderRadius['override_radius'] ? $secRadiousTopLeft . ' ' . $secRadiousTopRight . ' ' . $secRadiousBottomLeft . ' ' . $secRadiousBottomRight : ' rounded-[8px] ';

@endphp

<section {{ $sectionId ? 'id=' . $sectionId . '' : '' }} class="contact-banner {{ $sectionClasses }}">

    <div class="container space-between-sections {{ $override_pt ? ' pt-' . $pt : null }} {{ $override_pb ? ' pb-' . $pb : null }}">

        <div class="contact-banner-wrapper {{ $bgColorClass }} flex flex-wrap lg:flex-nowrap gap-12 px-[24px] md:px-[60px] lg:px-[80px] py-[60px] lg:py-[80px] border-2 border-neutral-dimmed {{ $sectionRadiusProps }} lg:justify-between lg:items-center" {{ $bgStyle }}>

            <div class="primary-panel {{ $mediaData['type'] != 'none' ? 'w-full lg:w-[60%]' : null }} order-2 {{ $mediaOrder == 'natural' ? 'md:order-1' : 'md:order-2' }}">

                @if ( $title )
                <{{$heading}} class="h3 text-neutral-light mb-[36px]" {{ $titleStyles }}>
                    {{ $title }}
                </{{$heading}}>
                @endif

                @if ( $description )
                <p class="description body-lg-regular text-neutral-light/70" {{ $descriptionStyles }}>
                    {!! $description !!}
                </p>
                @endif

                @if($cta)
                    <div class="flex mt-[40px]">
                        @include('partials.cta', [
                            'data' => $cta,
                            'additional_classes' => 'w-full md:w-auto'
                        ])
                    </div>
                @endif

            </div><!-- .primary-panel -->

            @if ( $mediaData['type'] != 'none' )

            <div class="secondary-panel media-panel w-full lg:w-[40%] order-1 {{ $mediaOrder == 'natural' ? 'md:order-2' : 'md:order-1' }}">

                @if ( $mediaData['type'] = 'image' )

                    @php
                        $image          = $mediaData['image']['file'];
                        $size           = 'full';
                        $imageProps     = ['class' => 'w-[100%] h-[100%] object-cover'];
                    @endphp

                    <div class="media-image overflow-hidden rounded-[8px]">
                        {!! wp_get_attachment_image( $image, $size, '', $imageProps ) !!}
                    </div>

                @endif 

            </div><!--  -->

            @endif

        </div>

    </div>

</section><!-- .contact-banner -->
