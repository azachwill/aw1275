@extends('master')
@php
    $post =get_post();
    $content = get_field('content');
    $cta = get_field('content_table_cta');
    $sideCTAView = '';
    $sideMenuContent = [];

    foreach ($content as $key => $menuItem) {
        array_push($sideMenuContent, ['label' => $menuItem['menu_title'],'link'=> '#single-champion-'.$key]);
    }

    if(isset($cta) && $cta['type'] ==='file'){
        $ctaInfo = $cta['download_link'];
        $sideCTAView = view('partials.cta', [
        'data' => [
            'link'=> ['title' => $ctaInfo['text'] ?? $ctaInfo['file']['filename'],'url' => $ctaInfo['file']['url']],
            'button_size' => $ctaInfo['button_size'],
            'button_type'=> $ctaInfo['button_type'],
        ],
        'additional_classes' => 'w-full lg:w-auto lg:inline-block lg:mt-[40px]',
        'props' => ['download']
        ]);
    }

    if(isset($cta) && $cta['type'] ==='link'){
        $sideCTAView = view('partials.cta',
        [
            'data' => $cta['link']['cta'],
            'additional_classes' => 'w-full lg:w-auto lg:inline-block lg:mt-[40px]'
        ]);
    }

@endphp

@section('content')

    @include('partials.breadcrumbs', ['pages'=>  getBreadcrumbArray($post, 'champions')])

    @include('components.hero', [
        'header' => get_field('header'),
        'heroImage' => get_field('image'),
        'video' => get_sub_field('video'),
        'imagePosition' => get_field('image_position'),
        'addLottie' => get_sub_field('add_lottie'),
        'lottieFile' => get_sub_field('lottie_file'),
        'lottieOptions' => get_sub_field('lottie_options')
    ])
    <section>
        <div class="container space-between-sections pt-[16px] lg:pt-[120px]">

            <div class="grid grid-cols-12 gap-[28px]">
                {{-- left menu --}}
                <div class="col-span-12 lg:col-span-3">

                    <div class="flex flex-col sticky top-[80px] hidden lg:block">
                        @include('partials.table-of-content.list', ['contents' => $sideMenuContent])
                        {!! $sideCTAView !!}
                    </div>


                    <div class="flex flex-col top-[80px] sticky lg:hidden">
                        @include('partials.table-of-content.mobile-container',[
                            'title'=> 'Table of content',
                            'contents'=> $sideMenuContent,
                            'contentTableFooter' => $sideCTAView,
                            'content' => view('partials.table-of-content.list',['contents'=> $sideMenuContent]),
                            'containerClasses' => 'bg-neutral-light col-span-12 lg:col-span-3 sticky top-0 pt-[96px] pb-[16px] lg:py-0 z-[2]'
                        ])
                    </div>
                </div>

                {{-- content --}}
                <div class="col-span-12 lg:col-span-8 lg:col-start-5 lg:-mt-[120px]">
                    @foreach($content as $key => $item)
                        @if($item['content_type'] == 'text')
                            <div id="single-champion-{{$key}}" class="pt-[80px] lg:pt-[120px]">
                                <div>
                                    @if(!!$item['text']['title'])
                                        <h2 class="h3 text-blue1">
                                            {{ $item['text']['title'] }}
                                        </h2>
                                    @endif
                                </div>
                                <div class="mt-[40px] wysiwyg-content">
                                    {!! $item['text']['description'] !!}
                                </div>
                            </div>
                        @endif

                        @if($item['content_type'] == 'video')
                            <div id="single-champion-{{$key}}" class="pt-[80px] lg:pt-[120px]">
                                <div>
                                    @if(!!$item['video']['title'])
                                        <h2 class="h3 text-blue1">
                                            {{ $item['video']['title'] }}
                                        </h2>
                                    @endif
                                </div>
                                <div class="mt-[40px]">
                                    {!! $item['video']['video'] !!}
                                </div>
                            </div>
                        @endif

                        @if($item['content_type'] == 'slider')
                            <div id="single-champion-{{$key}}" class="pt-[80px] lg:pt-[120px]">
                                <div>
                                    @if(!!$item['slider']['title'])
                                        <h2 class="h3 text-blue1">
                                            {{ $item['slider']['title'] }}
                                        </h2>
                                    @endif
                                </div>
                                <div>
                                    <p class="h3 text-blue1 body-{{$item['slider']['description']['description_size']}}-{{$item['slider']['description']['description_style']}}">
                                        {{ $item['slider']['description']['description'] }}
                                    </p>
                                </div>

                                @include('partials.posts-slider', [
                                    'posts' => $item['slider']['posts'],
                                    'size' => 'md',
                                    'isChampion' => true
                                ])
                            </div>
                        @endif

                        @if($item['content_type'] == 'accordion')
                            <div id="single-champion-{{$key}}" class="pt-[80px] lg:pt-[120px]">
                                @foreach($item['accordion']['questions'] as $question)
                                    <div class="accordion-tab py-[24px] px-[24px] lg:px-[32px] lg:py-[32px] bg-gray4/20 mt-[8px] hover:bg-blue3/[.1] active:bg-blue3/[.2] rounded-[8px]  first-of-type:mt-0 focus-within:shadow-focus-accordion outline-0">
                                        <div class="accordion flex flex-row justify-between w-full relative cursor-pointer transition-height duration-300 text-left outline-0" tabindex="0" role="button">
                                            <h2 class="h6 mr-[36px]">
                                                {{ $question['title'] }}
                                            </h2>
                                            @include('partials.icons', [
                                                'icon' => 'plus',
                                                'class' => 'plus-icon absolute top-[13px] right-0 transition-all duration-300'
                                            ])
                                            @include('partials.icons', [
                                                'icon' => 'minus',
                                                'class' => 'minus-icon hidden absolute top-[22px] right-0'
                                            ])
                                        </div>
                                        <div class="answer max-h-0 overflow-hidden transition-all duration-300">
                                            <div class="body-sm-regular mt-[16px] text-neutral-dark/[.62] [&:not(:first-child)]:paragraphs:mt-[24px]">
                                                {!! $question['answer'] !!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection



