@php
    $os = null;
    $button_classes = $button_classes ?? '';
    $containerClasses = $containerClasses ?? '';
    $titleAsLogo = $data['title_as_logo'] ?? false;
    $buttonContainerClasses = $buttonContainerClasses ?? '';
    $data['tag'] = $data['tag'] ?? null;

    $heading = 'h2';

    if (!empty($data['title_heading']['heading_tag'])){
        $heading = $data['title_heading']['heading_tag'];
    }

    $addDownloadCta = isset($data['add_download_cta']) && $data['add_download_cta'];
    $addDownloadCta &= isset($data['include_os_detection']) && is_array($data['include_os_detection']);

    if ($addDownloadCta && $data['include_os_detection']['product']) {
        $os = getOsInfo();
        $productPath = $data['include_os_detection']['product'] . '/stable/desktop/installer/' . $os;
        $downloadData = getProductDetails($productPath);
    }
@endphp

<div class="header {{ $containerClasses }}">
    @if ( $data['tag'] )
        <p class="sh4 uppercase mb-[8px] text-blue1">
            {{ $data['tag'] }}
        </p>
    @endif
    <div>
        @if (!$titleAsLogo)
            @if(!!$data['title_heading']['title'])
                <{{$heading}} class="h2 text-blue1">
                    {!! $data['title_heading']['title'] !!}
                </{{$heading}}>
            @endif
        @else
            <img class="max-w-[190px] w-full object-contain max-h-min" src="{{ $data['logo']['url'] }}" alt="{{ $data['logo']['alt'] }}" />
        @endif
    </div>

    @if (!empty($data['subtitle']))
        <div class="h5 mt-[24px] text-blue1">
            {{ $data['subtitle'] }}
        </div>
    @endif

    @if (isset($data['description'])  && $data['description'])
        <div class="description mt-[24px] text-blue1/[.62] body-{{$data['description_size']}}-{{$data['description_style']}} link-p:link-light">
            {!! do_shortcode($data['description']) !!}
        </div>
    @endif

    @if (!empty($data['add_cta']))
        <div class="header-ctas mt-[40px] flex {{ $buttonContainerClasses }}">
            @foreach($data['cta'] as $index => $cta)
                @include('partials.cta', [
                    'data' => $cta['cta'],
                    'additional_classes' => 'w-full md:w-auto ' . $button_classes. ' mb-[16px] last-of-type:mb-0 md:mb-0 md:mr-[16px] md:last-of-type:mr-0'
                ])
            @endforeach
        </div>
    @endif

    @if (!empty($data['add_cta_link']))
        <div class="header-ctas mt-[40px] flex">
            @include('partials.links.link', [
               'data' => $data['cta_link'],
               'additional_classes' => 'inline-block'
            ])
        </div>
    @endif

    @if ($addDownloadCta)
        @if($os !== 'other' && isset($downloadData))
            @php
                $product = $downloadData;
                $ctaLabel = $os == 'mac' ? 'macos 11+' : $os;
            @endphp
            <div class="revision-content mt-[40px] flex flex-col">
                <div>
                    @include('partials.cta', [
                        'data' => [
                            'link' => [
                                'url' => $product->url,
                                'title' => $data['download_cta_title'] . ' ' . $ctaLabel,
                                'target' => '_blank'
                            ],
                            'button_type' => 'primary',
                            'button_size' => 'md',
                        ],
                        'additional_classes' => 'revision-content__cta flex md:inline-block'
                    ])
                </div>

                @if ( $data['download_cta_description'] && $os == 'mac' )
                <div class="description mt-[24px] text-blue1/[.62] body-lg-regular link:link-light">
                    {!! $data['download_cta_description'] !!}
                </div>
                @endif

                @if($product)
                    @include('partials.downloads.installer-information', compact('product'))
                @endif
            </div>
        @elseif ($os === 'other' && $data['fallback_text'])
            <div class="description mt-[24px] text-blue1/[.62] body-lg-regular link-p:link-light">
                {!! $data['fallback_text'] !!}
            </div>
        @endif
    @endif

    @if(!empty($data['add_image_grid']))
        <div class="mt-[40px] lg:mt-[80px] flex justify-between">
            @foreach($data['images'] as $key => $image)
                @if(count($data['images']) > 2)
                    <img class="w-[32%] object-cover rounded-[8px] {{ $loop->first || $loop->last ? 'h-[105px]' : '' }} {{ $loop->last? 'mt-auto' : '' }} {{ $key == 2 ? 'max-h-[217px]' : '' }}" src="{{ $image['image']['url'] }}" alt="{{ $image['image']['alt'] }}">
                @else
                    <img src="{{ $image['image']['url'] }}" alt="{{ $image['image']['alt'] }}" class="object-cover rounded-[8px] {{ $loop->first ? 'w-[36%]' : 'w-[58%]' }} {{ $loop->first ? 'h-[87px] md:h-[186px] lg:h-[122px]' : '' }} {{ $loop->last? 'mt-auto' : '' }}">
                @endif
            @endforeach
        </div>
    @endif
</div>
