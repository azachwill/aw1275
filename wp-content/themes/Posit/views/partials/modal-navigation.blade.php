@php
    $isSmallGrid = $navigationLink['add_right_related_links'] == 'right_related_links' && count($navigationLink['right_related_links']['column_links']) > 2;
    $colSpanLg = $isSmallGrid ? 'lg:col-span-6' : 'lg:col-span-8'
@endphp

<div class="flex flex-col h-full w-full lg:col-span-full overflow-y-auto">
    <!-- tablet and mobile header -->
    <a href="#" class="mobile-header flex lg:hidden py-[16px] px-[20px] md:px-[60px] items-center border-b border-neutral-light/20 sticky top-0 blur-bg z-10 uppercase">
        @include('partials.icons', [
            'icon' => 'nav-arrow-left'
        ])
        <div class="ml-[16px] ui-medium ">
            {{$navigationLink['name']}}
        </div>
    </a>
    <!-- modal content -->
    <div class="modal-content container w-full h-full lg:grid lg:grid-cols-12">
        <div class="banner-parent relative col-span-full {{ $colSpanLg }}">
            <div class="grid grid-cols-8 {{ $colSpanLg }} h-fit lg:pr-[28px] lg:py-[80px] {{$navigationLink['add_banner'] ? 'lg:pb-[162px]' : ''}} pb-[40px] gap-x-[8px] md:gap-x-[16px] lg:gap-x-[24px]">
                <!-- description -->
                @if($navigationLink['add_description'])
                    <div class="left-description col-span-full lg:col-span-4 pt-[40px] lg:pt-0 lg:mb-[40px]">
                        <div class="ui-small text-neutral-light uppercase">
                            {{$navigationLink['description']['title']}}
                        </div>
                        <div class="mt-[8px] body-sm-regular text-neutral-light/60">
                            {{$navigationLink['description']['description']}}
                        </div>
                    </div>
                @endif

                <div class="left-container col-span-full grid {{$navigationLink['add_right_related_links'] == 'right_related_links' && count($navigationLink['right_related_links']['column_links']) > 2 ? 'lg:grid-cols-6' : 'lg:grid-cols-8'}} gap-x-[8px] md:gap-x-[16px] lg:gap-x-[24px]">
                    <!-- related links -->
                    @foreach($navigationLink['related_links']['column_links'] as $key => $columnLink)
                        <div class="related-link-column {{$key === 0 ? 'lg:col-start-1' : ''}} col-span-full md:col-span-4 lg:col-span-2 mt-[40px] lg:mt-0">
                            @if($columnLink['disable_link'])
                                <div class=" relative flex w-full pb-[8px] pl-[8px] items-center justify-between">
                                    <div class="body-lg-regular text-neutral-light">
                                        {{$columnLink['column_title']}}
                                    </div>
                                </div>
                            @else
                                <a href="{{$columnLink['column_link']['url']}}" target="{{$columnLink['column_link']['target']}}" class="column-link relative flex w-full pb-[8px] pl-[8px] items-center justify-between" title="Go to {{$columnLink['column_link']['title']}}" aria-label="Go to {{$columnLink['column_link']['title']}}">
                                    <div class="body-lg-regular text-neutral-light">
                                        {{$columnLink['column_link']['title']}}
                                    </div>
                                    @include('partials.icons', [
                                        'icon' => 'nav-arrow-right'
                                    ])
                                </a>
                            @endif
                            @if($columnLink['description'])
                                <div class="pl-[8px] mt-[8px] body-sm-regular text-neutral-light/60">
                                    {{$columnLink['description']}}
                                </div>
                            @endif
                            <div class="grid mt-[16px]">
                                @if($columnLink['links'])
                                    @foreach($columnLink['links'] as $link)
                                        <a href="{{$link['page_link']['url']}}" target="{{$link['page_link']['target']}}" class="related-link py-[12px] px-[8px] body-md-regular text-neutral-light/60">
                                            {{$link['page_link']['title']}}
                                        </a>
                                    @endforeach
                                @endif
                                @if($columnLink['add_cta'])
                                    <div class="mt-[16px]">
                                        @include('partials.links.link', [
                                            'data' => $columnLink['cta']
                                        ])
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
                @if($navigationLink['related_links']['add_cta'])
                    <div class="col-span-full mt-[32px] ml-[8px]">
                        @include('partials.links.link', [
                            'data' => $navigationLink['related_links']['cta']
                        ])
                    </div>
                @endif
            </div>
            <!-- tablet and mobile banner -->
            <div class="lg:hidden">
                @if($navigationLink['add_banner'])
                    @include('partials.navigation-banner')
                @endif
            </div>
        </div>
        <div class="col-span-full {{$navigationLink['add_right_related_links'] == 'right_related_links' && count($navigationLink['right_related_links']['column_links']) > 2 ? 'lg:col-span-6' : 'lg:col-span-4'}} py-[40px] lg:py-[80px] lg:pl-[40px] lg:pr-0 border-t lg:border-l lg:border-t-0 border-neutral-light/[.1] z-10">
            <div class="grid {{$navigationLink['add_right_related_links'] == 'right_related_links' && count($navigationLink['right_related_links']['column_links']) > 2 ? 'lg:grid-cols-6' : ''}} grid-cols-4 h-fit gap-x-[8px] md:gap-x-[16px] lg:gap-x-[24px]">
                <!-- right description -->
                <div class="col-span-full h-fit pl-[8px] lg:pl-0">
                    <div class="ui-small text-neutral-light uppercase">
                        {{$navigationLink['right_description']['title']}}
                    </div>
                    <div class="mt-[8px] body-sm-regular text-neutral-light/60">
                        {{$navigationLink['right_description']['description']}}
                    </div>
                </div>

                @if($navigationLink['add_right_related_links'] == 'image_with_cta')
                    <!-- image with cta -->
                    <div class="grid col-span-full mt-[40px]">
                        <img class="hidden lg:block w-full max-h-[200px] rounded-lg" src="{{$navigationLink['image_with_cta']['desktop_image']['url']}}" alt="{{$navigationLink['image_with_cta']['desktop_image']['alt']}}"/>
                        <img class="lg:hidden w-full max-h-[188px] rounded-lg" src="{{$navigationLink['image_with_cta']['mobile_image']['url']}}" alt="{{$navigationLink['image_with_cta']['mobile_image']['alt']}}"/>
                        <div class="mt-[40px]">
                            @include('partials.links.link', [
                               'data' => $navigationLink['image_with_cta']
                            ])
                        </div>
                    </div>
                @else
                    <!-- right related links -->
                    @foreach($navigationLink['right_related_links']['column_links'] as $key => $columnLink)
                        <div class="grid col-span-2 h-fit mt-[40px] lg:mt-[50px] {{ $columnLink['double_row'] ? 'lg:row-span-2' : '' }}">
                            <div class="ui-small text-neutral-light uppercase pl-[8px]">
                                {{$columnLink['title']}}
                            </div>
                            <div class="grid mt-[16px]">
                                @foreach($columnLink['links'] as $link)
                                    <a href="{{$link['page_link']['url']}}" target="{{$link['page_link']['target']}}" class="related-link py-[12px] px-[8px] body-md-regular text-neutral-light/60">
                                        {{$link['page_link']['title']}}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- desktop banner-->
    @if($navigationLink['add_banner'])
        <div class="hidden lg:flex w-full absolute bottom-0 h-auto">
            <div class="container grid grid-cols-12 relative">
                <div class="banner-wrapper col-span-12 blur-bg {{ $colSpanLg }}">
                    @include('partials.navigation-banner', [
                        'isSmallGrid' => $isSmallGrid,
                    ])
                </div>
            </div>
        </div>
    @endif
</div>
