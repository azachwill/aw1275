@php
    $postsData = getSelectedPostsContentFields($posts ?? []);
    $heading = 'h2';
    if ($addHeader){
        $heading = 'h3';
    }
@endphp

<section class="section-cards-with-tag-grid">
    <div class="container space-between-sections grid grid-cols-12">
        @if ($addHeader)
            @include('partials.header', [
                'data' => $header,
                'containerClasses' => 'col-span-12 md:col-span-8 lg:col-span-5',
            ])
        @endif
        <div class="grid grid-cols-12 col-span-12 lg:col-span-9 lg:col-start-4 gap-y-[60px] md:gap-x-[16px] lg:gap-x-[28px] mt-[80px] lg:mt-[120px]">
            @if($postsData)
                @foreach($postsData as $post)
                    <div class="card-with-tag col-span-12 md:col-span-4 flex flex-col [&:not(:first-of-type)]:mt-[60px] md:[&:not(:first-of-type)]:mt-0">
                        <div class="col-span-12 md:col-span-4 flex flex-col [&:not(:first-of-type)]:mt-[60px] md:[&:not(:first-of-type)]:mt-0">
                            <div class="ui-small-semibold text-blue2 uppercase bg-blue3/[.1] rounded-[4px] px-[8px] py-[4px] w-fit">
                                <span>{{ $post['type'] }}</span>
                            </div>
                            <img class="rounded-[8px] mt-[20px] max-h-[168px] object-cover" src="{{ $post['image'] }}" alt="{{ $post['imageAlt'] }}" />
                            <div class="my-[16px]">
                                @if($post['title'])
                                    <{{$heading}} class="h4 text-blue1 line-clamp-2">
                                        {{ $post['title'] }}
                                    </{{$heading}}>
                                @endif
                                @if ( $post['excerpt'] )
                                <p class="body-md-regular text-blue1/[.62] mt-[8px] line-clamp-4">
                                    {{ wp_strip_all_tags($post['excerpt']) }}
                                </p>
                                @endif
                            </div>
                            <div class="mt-auto">
                                @include('partials.links.link', [
                                    'data' => [
                                        'link' => [
                                            'url' => $post['url'],
                                            'title' => 'Learn more',
                                            'target' => '_self'
                                        ],
                                    ]
                                ])
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
