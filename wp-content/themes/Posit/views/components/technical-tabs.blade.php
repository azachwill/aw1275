@php

$technicalTabs ?? [];
$gridProps          = '';
$navProps           = 'flex gap-4';

@endphp

<div class="component-technical-tabs feature-tabs-desktop">

    <div class="features-tabs-grid {{ $gridProps }}">

        <div class="technical-tabs feature-tabs tabs {{ $navProps }}">
    
            @if ( $technicalTabs )
    
                @php $i=0; @endphp
    
                @foreach( $technicalTabs as $technicalTab )
    
                @php
    
                $i++;
                $n              = $i . '-' . rand(10,1000);
                $tabProps       = '';
                $panelId        = $i;
    
                @endphp
    
                <div class="technical-tab tab{{ $i == 1 ? ' active' : '' }} {{ $tabProps }} px-[16px] py-[8px]" data-tab-target="#tab-{{ $panelId }}">
                    
                    @if ( $technicalTab['title'] )
    
                    <h3 class="technical-tab__title title feature-tab__title h6">
                        {{ $technicalTab['title'] }}
                    </h3>
    
                    @endif
    
                </div>
    
                @endforeach
    
            @endif
        
        </div><!-- .technical-tabs -->
    
        <div class="technical-tabs-panels feature-tabs-panels tab-content flex-auto">
    
            @if ( $technicalTabs )
    
                @php $i=0; @endphp
    
                @foreach( $technicalTabs as $technicalTab )
    
                @php
    
                $i++;
                $panelProps         = null;
                $panelGridProps     = 'flex w-[100%]';
                $panelId            = $i;
    
                @endphp
    
                <div id="tab-{{ $panelId }}" class="technical-panel feature-panel {{ $panelProps }}{{ $i == 1 ? ' active' : '' }} mt-[24px]" data-tab-content>
    
                    <div class="technical-panel__grid feature-panel__grid {{ $panelGridProps }}">

                        @if ( $technicalTab['code_snippet'] )

                        <div class="technical-panel__snippet w-[100%] feature-panel__copy flex-none rounded-[8px]">
                            
                            <div class="panel-snippet flex flex-col md:flex-row justify-between px-[16px] py-[40px] lg:px-[40px] bg-gray4/[.2] rounded-[8px]" data-component-id="code-snippet">

                                <div class="flex flex-row justify-between md:hidden mb-[28px]">
                                    @include('partials.icons', [
                                      'icon' => 'snippet-arrow',
                                      'class' => 'snippet-arrow'
                                  ])
                                    <button class="mobile-copy-button relative" aria-label="Copy snippet to clipboard">
                                        @include('partials.icons', [
                                            'icon' => 'copy-snippet',
                                            'class' => 'copy-snippet'
                                        ])
                                    </button>
                                </div>

                                <div class="flex flex-row">
                                    <div class="hidden md:flex md:pr-[28px]">
                                        @include('partials.icons', [
                                            'icon' => 'snippet-arrow',
                                        ])
                                    </div>
                                    <div class="code-snippet">
                                        <p class="ui-medium text-blue1/[.62] max-w-[545px] break-words break-all">
                                            {!! $technicalTab['code_snippet'] !!}
                                        </p>
                                    </div>
                                </div>

                                <div class="self-center hidden md:flex md:pl-[28px]">
                                    <button class="copy-button relative" aria-label="Copy snippet to clipboard">
                                        @include('partials.icons', [
                                            'icon' => 'copy-snippet',
                                        ])
                                    </button>
                                </div>
                            </div><!-- .panel-snippet -->

                        </div>

                        @endif

                    </div>
    
                </div><!-- .feature-panel -->
    
                @endforeach
    
            @endif
    
        </div><!-- .feature-tabs-panels -->
    
    </div><!-- .feature-tabs-grid -->

</div><!-- .feature-tabs-desktop -->