@php
    $heading = 'h1';

    if (!empty($header['title_heading']['heading_tag'])){
        $heading = $header['title_heading']['heading_tag'];
    }

    $isRightPosition = $imagePosition === 'right';
    $listingPage = $listingPage ?? false;
@endphp

@if ( is_page(14652) )
@include('partials.breadcrumbs', ['pages'=>  getBreadcrumbArray(get_post(), 'hangout')])
@endif

<section class="hero section">
    <div class="container grid grid-cols-12 md:gap-x-[28px] lg:gap-x-[28px] space-between-sections {{$isRightPosition && !$listingPage ? 'md:pb-[80px]' : ''}}">
        <div class="col-span-12 {{$isRightPosition ? 'lg:col-span-6' : 'lg:col-span-9'}}">
            @if (!empty($header['tag']))
                <p class="sh4 uppercase mb-[8px] text-blue1">
                    {{ $header['tag'] }}
                </p>
            @endif

            <{{$heading}} class="h1 text-blue1">
            {!! $header['title_heading']['title'] !!}
            </{{$heading}}>

            @if ($header['subtitle'])
                <div class="h5 mt-[24px] text-blue1">
                    {{ $header['subtitle'] }}
                </div>
            @endif

            @if ($header['description'])
            <div class="mt-[24px]">
                <div class="text-blue1/[.62] body-{{$header['description_size']}}-{{$header['description_style']}} link-p:link-light">
                    {!! $header['description'] !!}
                </div>
            </div>
            @endif

            @if($header['add_cta'] && $header['cta'])
                <div class="flex flex-col md:flex-row mt-[40px]">
                    @foreach($header['cta'] as $index => $cta)
                        @php
                            $toggleModal                = $cta['cta']['toggle_cta_modal'];
                            $modalType                  = $cta['cta']['modal_type'];
                            $modalTitle                 = $cta['cta']['modal_title'];
                            $modalDesc                  = $cta['cta']['modal_description'];
                            $modalFormEmbed             = $cta['cta']['modal_form_embed'];
                            $modalVideoEmbed            = $cta['cta']['modal_video_embed'];
                        @endphp
                        @if($toggleModal)
                            @include('partials.cta-modal', [
                                'data' => $cta,
                                'additional_classes' => 'partner-form-modal-trigger cta-modal-trigger mb-[16px] last-of-type:mb-0 md:mb-0 md:mr-[16px] md:last-of-type:mr-0'
                            ])
                            <div>
                                @include('components.modal-cta', [
                                    'modalContent' => $modalType, 
                                    'theme' => 'light',
                                    'modalTitle' => $modalTitle,
                                    'modalDesc' => $modalDesc,
                                    'modalFormEmbed' => $modalFormEmbed,
                                    'modalVideoEmbed' => $modalVideoEmbed,
                                ])
                            </div>
                        @else
                            @include('partials.cta', [
                                'data' => $cta,
                                'additional_classes' => 'mb-[16px] last-of-type:mb-0 md:mb-0 md:mr-[16px] md:last-of-type:mr-0'
                            ])
                        @endif
                    @endforeach
                </div>
            @endif

            @if (!empty($header['add_cta_link']) && $header['cta_link'])
                <div class="flex flex-col md:flex-row mt-[40px]">
                    @include('partials.links.link', [
                       'data' => $header['cta_link'],
                       'class' => 'mb-[16px] last-of-type:mb-0 md:mb-0 md:mr-[16px] md:last-of-type:mr-0'
                    ])
                </div>
            @endif

            @if($header['add_mkto_form_cta'])
                @include('partials.cta', [
                    'data' => [
                        'link' => [
                            'url' => '#',
                            'title' => $header['mkto_form_cta_title'],
                            'target' => '_blank'
                        ],
                        'button_type' => 'primary',
                        'button_size' => 'md',
                    ],
                    'additional_classes' => 'partner-form-modal-trigger flex md:inline-block justify-center mt-[40px]'
                ])
                <div>
                    @include('components.modal', ['modalContent' => 'partner-form', 'theme' => 'light', 'form' => $header['mkto_form']])
                </div>
            @endif

        </div>

        @if($heroImage || $video || ($addLottie && $lottieFile))
            @php
                $gridProps = '';

                if ( $isRightPosition ) {
                    // Default classes when $isRightPosition is true.
                    $gridProps = 'md:col-start-6 md:col-end-13 rounded-lg';

                    // Custom classes when is_front_page() is also true, or apply defaults
                    $gridProps .= is_front_page() 
                    // Reverted to defaults on 03-16-23 for Conference. Will implement dynamic solution for future edits.
                    ? ' lg:col-start-8 lg:mt-[10px]' 
                    : ' lg:col-start-8 lg:mt-[200px]';
                }
            @endphp
            <div class="mt-[80px] relative col-span-12 {{ $gridProps }}">
                @if(!empty($showLogo))
                    <div class="absolute w-[60px] md:w-[80px] h-[57px] md:h-[77px] right-[20px] md:right-[40px] lg:right-[80px] -top-[30px] md:-top-[40px]">
                        @include('partials.icons',['icon'=>'logo-lg', 'width'=>'100%', 'height'=>'100%'])
                    </div>
                @endif
                @if ($heroImage)
                    <img class="w-screen rounded-lg" src="{{$heroImage['url']}}" alt="{{ $heroImage['alt'] }}">
                @endif
                @if (!empty($video))
                    <div class="rounded-lg">
                        {!! $video !!}
                    </div>
                @endif
                @if($lottieFile)
                    <lottie-player
                        {{ implode(" ", $lottieOptions) }}
                        src="{{ $lottieFile }}"
                    >
                    </lottie-player>
                @endif
            </div>
        @endif
</section>
