@php

$oneCardLayout              = !empty($posts) && count($posts) == 1;
$fourCardLayout             = !empty($posts) && count($posts) == 4;
$fiveCardLayout             = !empty($posts) && count($posts) == 5;

$togglePosts                = $togglePosts == 'one' ? 'hidden': null;
$postBlockTitle             = $postBlockTitle ?? null;
$postBlockDesc              = $postBlockDesc ?? null;

$media                      = $header['media'] ?? [];

$sectionPadding             = $sectionOptions['padding'];
$sectionAttributes          = $sectionOptions['attributes'];
$sectionVisibility          = $sectionOptions['visibility']; 
$sectionBackground          = $sectionOptions['background'];
$sectionGridType            = $sectionOptions['grid']['grid_type'];

$hasHeader                  = $sectionVisibility['toggle_section_header'] ?? null;

$bgClass                    = ( $sectionBackground['override_color'] && $sectionBackground['color'] != 'custom' ) ? $sectionBackground['color'] : null;
$bgStyle                    = ( $sectionBackground['override_color'] && $sectionBackground['color'] == 'custom' ) ? 'style=background-color:' . $sectionBackground['custom_color'] . ';' : null;

$sectionId                  = $sectionAttributes['section_id'];
$sectionClasses             = $sectionAttributes['section_classes'] ?? null;

$override_pt                = $sectionPadding['override_padding_top'];
$override_pb                = $sectionPadding['override_padding_bottom'];
$pt                         = $sectionPadding['padding_top'];
$pb                         = $sectionPadding['padding_bottom'];

@endphp

<section {{ $sectionId ? 'id=' . $sectionId : null }} class="{{ $layoutClass }}cpt-cards {{ $bgClass }} {{ $sectionClasses }} {{ $override_pt ? ' pt-' . $pt : null }} {{ $override_pb ? ' pb-' . $pb : null }}" {{ $bgStyle }}>
    <div class="container space-between-sections">

        @if( $hasHeader )
        <div class="section-header grid grid-cols-12">
            <div class="col-span-12 md:col-span-11 lg:col-span-6">
                @include('partials.header', [
                    'data' => $header
                ])
            </div>
        </div>
        @endif

        @if ( !empty($posts) )

            @php  
            
            $postGridProps      = $hasHeader ? 'mt-[80px] md:mt-[120px]' : 'mt-[0] md:mt-[0]';

            @endphp

            @if ( $sectionGridType == '3-across' )

            <div class="section-body col-span-12 mt-[40px] lg:mt-[80px]">
                
                <div class="card-grid 3-across grid grid-cols-12 gap-y-[80px] md:gap-x-[16px] lg:gap-x-[28px]">

                    @foreach( $posts as $key => $post )

                        <div class="customer-story-card relative flex flex-col col-span-full md:col-span-6 lg:col-span-4  md:gap-x-[16px] lg:gap-x-[28px]">
                            @include('partials.secondary-card', [
                                'post' => serializePost($post['post']),
                                'description' => true
                            ])
                        </div><!-- .customer-story-card -->

                    @endforeach

                </div><!-- .card-grid -->

            </div><!-- .section-body -->

            @else

            <div class="primary-post-grid grid grid-cols-12 {{ $postGridProps }} gap-[16px] lg:gap-[28px]">    
                @if(!$fiveCardLayout)

                    @if ( $postBlockTitle )
                    <div class="post-block-header col-span-12 md:col-span-8 lg:col-span-6 md:col-start-5 lg:col-start-7">
                        <p class="h3 text-blue1">
                            {{ $postBlockTitle }}
                        </p>
                    </div>
                    @endif

                    @if ( $postBlockDesc )
                    <div class="post-block-desc col-span-12 md:col-span-8 lg:col-span-6 md:col-start-5 lg:col-start-7 mb-[32px] mt-[0px] text-blue1/[.62] body-md-regular link-p:link-light">
                        {!! $postBlockDesc !!}
                    </div>
                    @endif

                    <div class="col-span-12 {{ $fourCardLayout ? 'md:col-span-8 lg:col-span-9 md:col-start-5 lg:col-start-4' : 'md:col-span-8 lg:col-span-6 md:col-start-5 lg:col-start-7' }}">
                        <div class="primary-card w-[100%]">
                            @include('partials.primary-card', [
                                'post' => serializePost($posts[0]['post'])
                            ])
                        </div>
                    </div>
                @endif
            </div>

            <div class="secondary-post-grid {{ $togglePosts }} grid grid-cols-12 gap-x-[16px] lg:gap-x-[28px] {{ $fiveCardLayout ? 'gap-y-[60px]' : '' }}">
                @foreach( $posts as $key => $post )
                    @if(!$fiveCardLayout)
                        @if($loop->first)
                            @php
                                continue;
                            @endphp
                        @endif
                    @endif
                    <div class="flex flex-col justify-between col-span-12 md:col-span-4 {{ ($fourCardLayout && $key == 1) ? 'lg:col-start-4' : '' }} {{ (!$fourCardLayout && !$fiveCardLayout && $key == 1) ? 'md:col-start-5 lg:col-start-7' : '' }} {{ !$fiveCardLayout ? 'lg:col-span-3 mt-[60px]' : '' }} {{ ($fiveCardLayout && $key == 0) ? 'md:col-start-5 md:col-end-9' : '' }}">
                        @include('partials.secondary-card', [
                            'post' => serializePost($post['post']),
                            'description' => true
                        ])
                    </div>
                @endforeach
            </div>

            @endif

        @endif
    </div>
</section>
