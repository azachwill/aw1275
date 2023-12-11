<div class="post-slider-card relative flex flex-col {{$columns}} {{$additionalClasses}} md:gap-x-[16px] lg:gap-x-[28px]">
    @if(!$listingPage && !$isChampion)
        <div class="flex flex-wrap gap-[8px] text-blue2 min-h-min lg:h-[68px] overflow-hidden items-end mb-[16px]">
            @foreach($post['categories'] as $category)
                <div class="px-[8px] py-[4px] bg-blue3/10 ui-small-semibold rounded uppercase">
                    <a
                        href="?category={{ $category['slug'] }}"
                        aria-label="{{ 'Link to '. $category['name'] . ' category'}}">
                        {{$category['name'] }}
                    </a>
                </div>
            @endforeach
        </div>
    @endif
    <a
        href="{{$post['url']}}"
        aria-label="{{ 'Link to '.$post['title'] }}"
        class="md:grid md:grid-cols-12 md:gap-x-[16px] lg:gap-x-[28px] md:items-center rounded-[4px] outline-0 outline-none focus:shadow-focus-share-link focus-visible:shadow-focus-share-link">
        <div class="{{$size == 'lg' ? "col-span-full md:col-span-6" : "col-span-full"}} w-full h-fit">
            @if($addImage)
                <div class="relative overflow-hidden rounded-lg {{ $imageClasses }}">
                    @if ($isVideo)
                        <div class="flex absolute w-full h-full top-0 bottom-0 right-0 left-0 z-[4] items-center justify-center">
                            <div class="py-[27px] px-[28px] bg-neutral-light/60 rounded">
                                @include('partials.icons', [
                                    'icon' => 'play',
                                    'class' => ''
                                ])
                            </div>
                        </div>
                    @endif
                    <img class="w-full aspect-video object-cover {{ $imageClasses }}" src="{{$post['image']}}" alt="{{$post['imageAlt']}}"/>
                </div>
            @endif
        </div>
        <div class="{{$size == 'lg' ? "col-span-full md:col-span-6 md:h-fit" : "col-span-full"}} h-auto">
            @if(!$listingPage && !$isChampion)
                <div class="flex flex-wrap {{$size == 'lg' ? 'md:mt-0' : ''}} mt-[16px] gap-[8px] uppercase">
                    @if($post['postType'])
                        <div class="flex">
                            <div class="body-sm-semibold text-blue1">
                                {{$post['postType']}}
                            </div>
                            <div class="ml-[4px] body-sm-semibold text-gray4/80">
                                |
                            </div>
                        </div>
                    @endif
                    @if($post['customData'] && $post['customData']['authors'])
                        @foreach ($post['customData']['authors'] as $author)
                            <div class="flex">
                                <div class="body-sm-semibold text-blue1">
                                    {{serializePost($author)['title']}}
                                </div>
                                <div class="ml-[4px] body-sm-semibold text-gray4/80">
                                    |
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            @endif
            <div class="flex justify-between mt-[16px]">
                <div class="h4 text-blue1 line-clamp-3">
                    {{ $post['title'] }}
                </div>
                @if(!$isChampion)
                    <button
                        type="button"
                        class="btn-share-modal ml-[4px] h-fit z-[8] rounded-lg hover:bg-gray4/40 focus-link"
                        aria-label="Share {{ $post['title'] }}"
                        data-title="{{ $post['title'] }}"
                        data-url="{{$post['url']}}">
                        @include('partials.icons', [
                            'icon' => 'share',
                            'class' => 'w-[44px] h-[44px] p-[10px]'
                        ])
                    </button>
                @endif
            </div>
            <div class="flex mt-[8px] body-md-regular text-neutral-blue62 line-clamp-3">
                {{ $post['excerpt'] }}
            </div>
            @if(!$isChampion)
                <div class="flex justify-between mt-[16px] body-md-regular text-blue1 hidden">
                    <div>
                        @if($post['publishDate'] && !$listingPage)
                            {{ date('Y-m-d', strtotime($post['publishDate'])) }}
                        @endif
                    </div>
                </div>
            @endif
            @if($isChampion)
                <div class="mt-[16px] flex flex-col md:flex-row">
                    <div class="link link-md-light">
                        Learn More
                        @include('partials.icons', [
                            'icon' => 'link-md-light'
                        ])
                    </div>
                </div>
            @endif
        </div>
    </a>
</div>