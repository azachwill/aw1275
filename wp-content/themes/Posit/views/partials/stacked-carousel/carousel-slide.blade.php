@php
    $containerClass = $conditions['has_images'] && $slide['image_position'] === 'top' ? 'flex-col': 'flex-col lg:flex-row';
    $imgClass = $conditions['has_images'] && $slide['image_position'] ==='top' && !$conditions['is_workshop'] ? 'h-[40px] md:h-[50px] lg:h-[60px] mb-[24px]': 'w-[160px] h-[200px] lg:w-[200px] lg:h-[250px] rounded-[8px] mb-[32px] lg:mr-[32px] shrink-0 overflow-hidden';
    $serializeWorkshop = $conditions['is_workshop'] ? serializePost($slide['workshop']) : '';
    $overrideCardBgColor = $slide['styles']['override_background_color'];
    $cardBgColor = $slide['styles']['background_color'];
@endphp

<div class="swiper-slide h-auto {{ $overrideCardBgColor ? $cardBgColor : 'bg-blue3 odd:bg-blue2' }} text-neutral-light rounded-[8px] px-[20px] md:px-[40px] lg:py-[80px] py-[40px] mr-[8px] :md-mr-[16px]">
    <div class="h-full w-full flex {{$containerClass}}">
        @if ( $conditions['has_images'] )
            @if ( $conditions['has_images'] && $slide['card_image'] || $conditions['is_workshop'] )
                <div class="{{$imgClass}} {{$conditions['is_workshop'] ? 'hidden md:grid' : ''}}">
                    @if($conditions['is_workshop'])
                        <img class="h-full w-auto object-cover" src="{{$serializeWorkshop['image']}}" alt="{{ $serializeWorkshop['imageAlt'] }}">
                    @else
                        <img class="h-full w-auto object-cover" src="{{$slide['card_image']['url']}}" alt="{{ $slide['card_image']['alt'] }}">
                    @endif
                </div>
            @endif
        @endif
        <div class="flex flex-col justify-between h-full w-full">
            @if ( $conditions['is_workshop'] )
                <div class="h4">
                    {{ $serializeWorkshop['title'] }}
                </div>
                <div class="grid grid-cols-2 gap-[8px] mt-[8px] body-md-semibold">
                    @if(!empty($serializeWorkshop['customData']['conference_details']['speakers']))
                        <div class="flex col-span-2 lg:col-span-1">
                            @foreach($serializeWorkshop['customData']['conference_details']['speakers'] as $speaker)
                                <div class="mr-[8px]">
                                    {{ serializePost($speaker)['title'] }}
                                </div>
                            @endforeach
                        </div>
                    @endif
                    @if ( $conditions['has_time'] )
                    <div class="col-span-2 lg:col-span-1">
                        <div class="uppercase">
                            {{ $serializeWorkshop['customData']['conference_details']['start_time'] }} - {{ $serializeWorkshop['customData']['conference_details']['end_time'] }}
                        </div>
                    </div>
                    @endif
                </div>
                @if ( $serializeWorkshop['excerpt'] )
                <p class="mt-[16px] lg:mt-[24px] body-md-regular text-neutral-light/70">
                    {{ $serializeWorkshop['excerpt'] }}
                </p>
                @endif
            @else
                @if ( $slide['content'] )
                <h4 class="swiper-slide__title h4">
                    {{ $slide['content'] }}
                </h4>
                @endif
                @if ( $slide['content_secondary'] )
                <p class="swiper-slide__lead text-white body-md-regular mt-[36px]">
                    {{ $slide['content_secondary'] }}
                </p>
                @endif
            @endif
            <div class="flex justify-between w-full mt-[24px] {{ $conditions['is_workshop'] ? 'lg:mt-[35px]' : 'md:mt-[50px] lg:mt-[60px]'}} flex-col md:flex-row lg:flex-grow">
                <div>
                    @if($conditions['has_author_field'] && $slide['author'])
                        <p class="h6-regular">
                            {{$slide['author']['name']}}
                        </p>
                        <p class="h6 mt-[8px]">
                            {{ $slide['author']['job_title']}}, {{$slide['author']['location']}}
                        </p>
                    @endif
                </div>
                @if ($conditions['has_ctas'] && $slide['cta_field'])
                    <div class="flex shrink-0 {{ !$conditions['is_workshop'] ? 'mt-[32px]' : ''}} md:mt-auto lg:mt-auto {{ !$conditions['is_workshop'] ? 'ml-auto' : '' }} md:ml-[24px] lg:ml-[24px]">
                        @include('partials.cta', [
                                'props'=>['tabindex=-1'],
                                'data' => $slide['cta_field']['cta'],
                                'additional_classes' =>  'btn' . $conditions['is_workshop'] ? 'w-full md:w-fit' : ''
                            ])
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
