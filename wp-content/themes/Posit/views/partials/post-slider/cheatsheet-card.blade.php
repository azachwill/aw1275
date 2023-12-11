<div class="post-slider-card relative flex flex-col {{$columns}} {{$additionalClasses}} md:gap-x-[16px] lg:gap-x-[28px]">
    <a
        href="{{ $post['customData']['link']['url'] }}"
        aria-label="{{ 'Go to '.$post['title'] }}"
        class="absolute the link top-0 bottom-0 right-0 left-0 z-[6] focus-link rounded-[8px]"></a>
    <div class="{{$size == 'lg' ? "col-span-full md:col-span-6" : "col-span-full"}} w-full h-fit">
        @if($addImage)
            <div class="relative overflow-hidden rounded-lg {{ $imageClasses }}">
                <img class="w-full aspect-video object-contain {{ $imageClasses }}" src="{{$post['image']}}" alt="{{$post['imageAlt']}}"/>
            </div>
        @endif
    </div>
    <div class="{{$size == 'lg' ? "col-span-full md:col-span-6 md:h-fit" : "col-span-full"}} h-full">
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
                    data-title="{{ $post['title'] }}"
                    aria-label="Share {{ $post['title'] }}"
                    data-url="{{$post['customData']['download_file']['url']}}"
                    class="btn-share-modal ml-[4px] h-fit z-[8] rounded-lg hover:bg-gray4/40 focus-link">
                        @include('partials.icons', [
                            'icon' => 'share',
                            'class' => 'w-[44px] h-[44px] p-[10px]'
                        ])
                </button>
            @endif
        </div>
        <div class="flex mt-[8px] body-md-regular text-neutral-blue62 wysiwyg-content slider-card">
            @if(!empty($post['customData']['description']))
                {!! $post['customData']['description'] !!}
            @else
                {{ $post['excerpt'] }}
            @endif
        </div>
        @if(!$isChampion)
            <div class="flex justify-between mt-[16px] body-md-regular text-blue1">
                <div>
                    @if($isCheatSheet && $post['customData'] && !empty($post['customData']['last_updated_date']))
                        {{ date('m/d/Y', strtotime($post['customData']['last_updated_date'])) }}
                    @elseif($post['publishDate'] && !$listingPage)
                        {{ date('m/d/Y', strtotime($post['publishDate'])) }}
                    @endif
                </div>
            </div>
        @endif
        <div class="flex mt-[16px]">
            @if ( isset($post['customData']['add_url']) )
                <a href="{{ $post['customData']['link']['url'] }}" class="btn btn-md-primary z-[8]" target="_blank" aria-label="Download {{$post['title']}}">
                    {{ $post['customData']['link']['title'] }}
                </a>
            @else
                <a href="{{ $post['customData']['download_file']['url'] }}" class="btn btn-md-primary z-[8]" download aria-label="Download {{$post['customData']['download_file']['name']}}">
                    DOWNLOAD
                </a>
            @endif
        </div>
    </div>
</div>
