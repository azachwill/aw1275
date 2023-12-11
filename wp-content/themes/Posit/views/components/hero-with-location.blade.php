@php
    $isSingle = $isSingle ?? false;
    $sectionPadding = $sectionPadding ?? [];

    $postUrl = get_permalink(get_post()->ID);

    $pt = $sectionPadding['padding_top'] ?? null;
    $pb = $sectionPadding['padding_bottom'] ?? null;
    $override_pt = $sectionPadding['override_padding_top'] ?? false;
    $override_pb = $sectionPadding['override_padding_bottom'] ?? false;
@endphp

<section id="hero" class="section space-between-sections {{ $override_pt ? ' pt-' . $pt : '' }} {{ $override_pb ? ' pb-' . $pb : '' }} share-modal-parent">
    <div class="hero-wrapper container grid grid-cols-12">
        <div class="col-span-12 rtl">
            <div class="grid grid-cols-12 flex items-start md:items-center h-fit">
                <div class="grid col-span-12 md:col-span-6 {{ $isSingle ? 'md:hidden' : ''}}">
                    <a href="" class="ml-auto btn-share-modal h-fit z-20 " aria-label="Share {{ $title }}" data-title="{{ $title }}" data-url="{{ $postUrl }}">
                        @include('partials.icons', [
                            'icon' => 'share',
                            'class' => 'w-[44px] h-[44px] p-[10px] rounded-lg hover:bg-gray4/40'
                        ])
                    </a>
                </div>
                @if(!empty($location))
                    <div class="grid justify-end col-span-12 md:col-span-6 mt-[24px] md:mt-0">
                        <div class="flex items-center">
                            <div class="body-sm-semibold ml-[4px] text-blue1 uppercase">
                                {{ $location }}
                            </div>
                            @include('partials.icons', [
                                'icon' => 'location',
                                'class' => 'shrink-0'
                            ])
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-span-12 grid grid-cols-12 {{ $isSingle ? 'mt-[14px] md:mt-0' : 'mt-[8px]'}} lg:gap-x-[28px]">
            <div class="col-span-12 md:col-span-10 lg:col-span-6">
                <h1 class="h1 text-blue1">
                    {{ $title }}
                </h1>
                @if(!empty($description))
                    <div class="text-blue1/[.62] body-lg-regular mt-[24px]">
                        {{ $description }}
                    </div>
                @endif
                @if(!empty($ctas))
                    <div class="flex flex-col md:flex-row mt-[40px]">
                        @foreach($ctas as $index => $cta)
                            @include('partials.cta', [
                                'data' => $cta,
                                'additional_classes' => 'mb-[16px] last-of-type:mb-0 md:mb-0 md:mr-[16px] md:last-of-type:mr-0'
                            ])
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="hidden col-span-12 md:col-span-1 md:col-start-12 {{ $isSingle ? 'md:grid justify-self-end' : ''}}">
                <a href="" class="ml-auto btn-share-modal h-fit z-20 " aria-label="Share {{ $title }}" data-title="{{ $title }}" data-url="{{ $postUrl }}">
                    @include('partials.icons', [
                        'icon' => 'share',
                        'class' => 'w-[44px] h-[44px] p-[10px] rounded-lg hover:bg-gray4/40'
                    ])
                </a>
            </div>
        </div>
        @if($image)
            <div class="col-span-12 mt-[60px] lg:mt-[80px]">
                <img class="w-full rounded-lg" src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
            </div>
        @endif
    </div>
    @include('partials.share-modal')
</section>
