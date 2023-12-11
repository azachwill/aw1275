@php

$tabsPosition       = $tabsOptions['tabs_position'];
$gridProps          = $tabsPosition == 'left' ? 'flex flex-row flex-nowrap features-tabs-grid--side-nav' : '';
$navProps           = $tabsPosition == 'left' ? 'flex flex-col flex-none gap-4 w-[25%] feature-tabs--side-nav' : 'flex gap-8';

@endphp

<div class="feature-tabs-mobile lg:hidden">

    <div class="feature-tabs tabs">

        @if ( $featureTabs )

            @php $i=0; @endphp

            @foreach( $featureTabs as $featureTab )

            @php

            $i++;
            $n              = $i . '-' . rand(10,1000);
            $tabProps       = 'w-[100%] feature-tab--top';
            $tabHighlight   = $tabsOptions['highlight_color'];
            $tabBorder      = $tabHighlight . ' !important';
            $tabStyles      = 'border-color:' . $tabHighlight . ';';
            $panelId        = $i . '-' . $sectionId;

            @endphp

            <style>
                .feature-tab-header {
                    border-color: {{ $tabBorder }};
                }
            </style>

            <div class="feature-tab-mobile-card">

                <div class="feature-tab feature-tab-header tab {{ $tabProps }} p-[16px]">
                
                    @if ( $featureTab['icon'] )
    
                        @php
    
                        $image          = $featureTab['icon'];
                        $size           = 'full';
                        $imageProps     = ['class' => 'h-[100%] w-auto'];
    
                        @endphp
    
                        <div class="feature-tab__icon mb-[32px] h-[40px]">
                            {!! wp_get_attachment_image( $image, $size, '', $imageProps ) !!}
                        </div>
                        
                    @endif
                    
                    @if ( $featureTab['title'] )
    
                    <h3 class="feature-tab__title h5">
                        {{ $featureTab['title'] }}
                    </h3>
    
                    @endif
    
                </div><!-- .feature-tab-header -->
    
                <div class="feature-tab-body">
    
                    <div class="feature-panel p-[16px] md:p-[32px]">
    
                        <div class="feature-panel__grid">
                        
                            @if ( $featureTab['media_type'] == 'image' )

                            @php
                                $image          = $featureTab['image'];
                                $size           = 'full';
                                $imageProps     = ['class' => 'w-[100%] h-auto rounded-lg'];
                            @endphp
                            <div class="feature-panel__media rounded-lg mb-[32px] mt-[32px]">
                                {!! wp_get_attachment_image( $image, $size, '', $imageProps ) !!}
                            </div>

                            @endif

                            @if ( $featureTab['media_type'] == 'video' )

                            <div class="feature-panel__media rounded-lg w-[100%] mb-[32px] mt-[32px]">
                                {!! $featureTab['embed_code'] !!}
                            </div>
                            
                            @endif
    
                            @if ( $featureTab['copy'] )

                            <div class="feature-panel__copy">
                                <div class="text-blue1/[.62] body-md-regular link-p:link-light">
                                    {!! $featureTab['copy'] !!}
                                </div>
                            </div>

                            @endif
                        </div>
        
                        <div class="feature-panel__footer repeater-modal-container flex flex-col md:flex-row mt-[64px]">
                            @if ( $featureTab['cta_button'] )
                                @foreach( $featureTab['cta_button'] as $cta )
                                    @php
                                        $toggleModal            = $cta['cta']['toggle_cta_modal'];
                                        $modalTitle             = $cta['cta']['modal_title'];
                                        $modalDesc              = $cta['cta']['modal_description'];
                                        $modalVideoEmbed        = $cta['cta']['modal_video_embed'];
                                    @endphp
                                    @if ( $toggleModal )

                                        <div class="repeater-modal-box flex flex-col md:flex-row mb-[16px] last-of-type:mb-0 md:mb-0 md:mr-[16px] md:last-of-type:mr-0">
                                            @include('partials.cta-modal', [
                                                'data' => $cta,
                                                'additional_classes' => 'repeater-modal-trigger cta-modal-trigger mb-[16px] last-of-type:mb-0 md:mb-0 md:mr-[16px] md:last-of-type:mr-0'
                                            ])
                                        
                                            @include('components.modal-cta', [
                                                'modalContent' => 'video-embed', 
                                                'theme' => 'light',
                                                'modalTitle' => $modalTitle,
                                                'modalDesc' => $modalDesc,
                                                'modalVideoEmbed' => $modalVideoEmbed,
                                                'isRepeaterModal' => true,
                                            ])
                                        </div>
                                    @else
                                        @include('partials.cta', [
                                            'data' => $cta,
                                            'additional_classes' => 'mb-[16px] last-of-type:mb-0 md:mb-0 md:mr-[16px] md:last-of-type:mr-0'
                                        ])
                                    @endif
                                @endforeach
                            @endif
                        </div>
        
                    </div><!-- .feature-panel -->
    
                </div><!-- .feature-tab-body -->

            </div><!-- .feature-tab-mobile -->

            @endforeach

        @endif
    
    </div><!-- .feature-tabs -->

</div><!-- .feature-tabs-mobile -->

<div class="feature-tabs-desktop hidden lg:block">

    <div class="features-tabs-grid {{ $gridProps }}">

        <div class="feature-tabs tabs {{ $navProps }}">
    
            @if ( $featureTabs )
    
                @php $i=0; @endphp
    
                @foreach( $featureTabs as $featureTab )
    
                @php
    
                $i++;
                $n              = $i . '-' . rand(10,1000);
                $tabProps       = $tabsPosition == 'left' ? 'feature-tab--left w-[100%]' : 'feature-tab--top w-[25%]';
                $tabHighlight   = $tabsOptions['highlight_color'];
                $tabBorder      = $tabHighlight . ' !important';
                $tabStyles      = 'border-color:' . $tabHighlight . ';';
                $panelId        = $i . '-' . $sectionId;
    
                @endphp
    
                <style>
                    .feature-tab.active {
                        border-color: {{ $tabBorder }};
                    }
                </style>
    
                <div class="feature-tab tab{{ $i == 1 ? ' active' : '' }} {{ $tabProps }} p-[32px]" data-tab-target="#tab-{{ $panelId }}">
                    
                    @if ( $featureTab['icon'] )
    
                        @php
    
                        $image          = $featureTab['icon'];
                        $size           = 'full';
                        $imageProps     = ['class' => 'h-[100%] w-auto'];
    
                        @endphp
    
                        <div class="feature-tab__icon mb-[32px] h-[40px]">
                            {!! wp_get_attachment_image( $image, $size, '', $imageProps ) !!}
                        </div>
                        
                    @endif
                    
                    @if ( $featureTab['title'] )
    
                    <h3 class="feature-tab__title h5">
                        {{ $featureTab['title'] }}
                    </h3>
    
                    @endif
    
                </div>
    
                @endforeach
    
            @endif
        
        </div><!-- .feature-tabs -->
    
        <div class="feature-tabs-panels tab-content flex-auto">
    
            @if ( $featureTabs )
    
                @php $i=0; @endphp
    
                @foreach( $featureTabs as $featureTab )
    
                @php
    
                $i++;
                $n                  = $i . '-' . rand(10,1000);
                $panelProps         = $tabsPosition == 'left' ? 'feature-panel--side-nav' : null;
                $panelGridProps     = $tabsPosition == 'left' ? 'flex flex-col flex-none gap-16' : 'flex gap-8';
                $panelId            = $i . '-' . $sectionId;
    
                @endphp
    
                <div id="tab-{{ $panelId }}" class="feature-panel {{ $panelProps }}{{ $i == 1 ? ' active' : '' }} px-[48px] py-[64px]" data-tab-content>
    
                    <div class="feature-panel__grid {{ $panelGridProps }}">

                        @if ( $featureTab['copy'] )

                        @php

                        $tabCopyWidth       = $featureTab['media_type'] == 'none' ? 'w-[100%]' : 'w-[25%]';

                        @endphp

                        <div class="feature-panel__copy{{ $tabsPosition == 'left' ? ' w-[100%] order-2' : ' ' . $tabCopyWidth .' flex-none' }}">
                            <div class="text-blue1/[.62] body-md-regular link-p:link-light">
                                {!! $featureTab['copy'] !!}
                            </div>
                        </div>

                        @endif
    
                        @if ( $featureTab['media_type'] == 'image' )

                        @php
                            $image          = $featureTab['image'];
                            $size           = 'full';
                            $imageProps     = ['class' => 'w-[100%] h-auto rounded-lg'];
                        @endphp
                        <div class="feature-panel__media rounded-lg">
                            {!! wp_get_attachment_image( $image, $size, '', $imageProps ) !!}
                        </div>

                        @endif

                        @if ( $featureTab['media_type'] == 'video' )

                        <div class="feature-panel__media w-[100%] rounded-lg">
                            {!! $featureTab['embed_code'] !!}
                        </div>

                        @endif

                    </div>
    
                    <div class="feature-panel__footer repeater-modal-container flex flex-col md:flex-row mt-[64px]">
                        @if ( $featureTab['cta_button'] )
                            @foreach( $featureTab['cta_button'] as $cta )
                                @php
                                    $toggleModal            = $cta['cta']['toggle_cta_modal'];
                                    $modalTitle             = $cta['cta']['modal_title'];
                                    $modalDesc              = $cta['cta']['modal_description'];
                                    $modalVideoEmbed        = $cta['cta']['modal_video_embed'];
                                @endphp
                                @if ( $toggleModal )
                                    <div class="repeater-modal-box flex flex-col md:flex-row mb-[16px] last-of-type:mb-0 md:mb-0 md:mr-[16px] md:last-of-type:mr-0">
                                        @include('partials.cta-modal', [
                                            'data' => $cta,
                                            'additional_classes' => 'repeater-modal-trigger cta-modal-trigger mb-[16px] last-of-type:mb-0 md:mb-0'
                                        ])
                                        
                                        <div>
                                            @include('components.modal-cta', [
                                                'modalContent' => 'video-embed', 
                                                'theme' => 'light',
                                                'modalTitle' => $modalTitle,
                                                'modalDesc' => $modalDesc,
                                                'modalVideoEmbed' => $modalVideoEmbed,
                                                'isRepeaterModal' => true,
                                            ])
                                        </div>
                                    </div>
                                @else
                                    @include('partials.cta', [
                                        'data' => $cta,
                                        'additional_classes' => 'mb-[16px] last-of-type:mb-0 md:mb-0 md:mr-[16px] md:last-of-type:mr-0'
                                    ])
                                @endif
                            @endforeach
                        @endif
                    </div>
    
                </div><!-- .feature-panel -->
    
                @endforeach
    
            @endif
    
        </div><!-- .feature-tabs-panels -->
    
    </div><!-- .feature-tabs-grid -->

</div><!-- .feature-tabs-desktop -->

