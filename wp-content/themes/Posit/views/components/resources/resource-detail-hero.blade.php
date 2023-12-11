@php
    $isVideo = $post['postType'] == 'Video';
    $isBlog = $isBlog ?? false;
@endphp

<section id="hero" class="section {{ $isVideo ? 'share-modal-parent' : ''}} pt-[80px]">
    <div class="hero-wrapper container grid grid-cols-12">
        <div class="col-span-12">
            <div class="hero-post-meta grid grid-cols-12 flex items-start md:items-center h-fit">
                <div class="col-span-12 md:col-span-6 h-fit">
                    <div class="flex flex-wrap">
                        @if ( !$isBlog )
                        <div class="hero-post-meta__item body-sm-semibold text-blue1 uppercase">
                            {{$post['postType']}}
                        </div>
                        @endif
                        @if( !empty($post['customData']['authors']) )
                            @foreach($post['customData']['authors'] as $index => $author)
                                <div class="hero-post-meta__item body-sm-semibold text-blue1 uppercase">
                                    {{ serializePost($author)['title'] }}
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 h-fit mt-[24px] md:mt-0">
                    <div class="flex flex-wrap justify-start md:justify-end gap-[8px]">
                        @foreach($post['categories'] as $category)
                            <div class="bg-blue1/[.1] rounded-[4px] px-[16px] py-[4px] ui-medium-semibold text-blue2 uppercase">
                                {{$category['name']}}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-full grid grid-cols-12 mt-[24px]">
            @if($isVideo)
                <div class="col-span-12 md:col-span-1 lg:col-span-3 md:order-2 md:flex">
                    <a href="" class="btn-share-modal md:ml-[4px] h-fit z-20 md:ml-auto" aria-label="Share {{ $post['title'] }}" data-title="{{ $post['title'] }}" data-url="{{ $post['url'] }}">
                        @include('partials.icons', [
                            'icon' => 'share',
                            'class' => 'w-[44px] h-[44px] p-[10px] rounded-lg hover:bg-gray4/40'
                        ])
                    </a>
                </div>
            @endif
            <div class="col-span-12 md:col-span-11 lg:col-span-9 mt-[24px] md:mt-0">
                <div>
                    <h1 class="h1 text-blue1">
                        {{ $post['title'] }}
                    </h1>
                </div>

                @if($post['excerpt'])
                    <div class="text-blue1/[.62] body-lg-regular mt-[24px]">
                        {{ $post['excerpt'] }}
                    </div>
                @endif

                <div class="text-blue1 body-md-regular mt-[24px]">
                    {{ date('Y-m-d', strtotime($post['publishDate'])) }}
                </div>
            </div>
        </div>
        <div class="col-span-full mt-[60px] mb-[80px] lg:mt-[80px]">
            @if($isVideo)
                {!! $post['customData']['video'] !!}
            @else
                <img class="w-full rounded-lg" src="{{ $post['image'] }}" alt="{{ $post['imageAlt'] }}">
            @endif
        </div>
    </div>
    @if($isVideo)
        @include('partials.share-modal')
    @endif
</section>
