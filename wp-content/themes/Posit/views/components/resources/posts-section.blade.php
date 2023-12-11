@php
    $countOfMainPosts = $addMainPosts ? count($mainPosts) : 0;

    $mainPostsId = getMainPostsID($addMainPosts, $mainPosts);
    $categoryTaxArgs = getTaxArgs('category', $categories);
    $posts = getLatestPosts(['post', 'videos', 'cheatsheets'], 5, ['post__not_in' => $mainPostsId, 'tax_query' => $categoryTaxArgs]);
@endphp

<section class="posts-section share-modal-parent">
    <div class="space-between-sections">
        <div class="container grid grid-cols-12 px-0 md:gap-x-[16px] lg:gap-x-[28px]">
            @include('partials.header', [
                'data' => [
                     'title_heading' => [
                         'title' => $header['title_heading']['title'],
                         'heading_tag' => $header['title_heading']['heading_tag']
                     ],
                     'description' => $header['description']['description'],
                     'description_size' => $header['description']['description_size'],
                     'description_style' => $header['description']['description_style']
                 ],
                 'containerClasses' => 'px-[20px] md:px-[60px] lg:px-[80px] col-span-12 lg:col-span-6',
            ])
            <div class="col-span-full grid grid-cols-12 px-[20px] md:px-[60px] lg:px-[80px] md:gap-x-[16px] lg:gap-x-[28px] py-[80px]">
                @if($addMainPosts)
                    @foreach($mainPosts as $index => $mainPost)
                        @include('partials.post-slider-card', [
                                'post' => serializePost($mainPost['post']),
                                'size' => ($countOfMainPosts == 3 || $countOfMainPosts == 1) && $index == 0 ? 'lg' : 'md',
                                'additionalClasses' => $countOfMainPosts == 3 && $index != 0 ? 'mt-[80px]' : ($countOfMainPosts == 2 && $index != 0 ? 'mt-[80px] md:mt-0' : 'items-left'),
                                'listingPage' => false
                        ])
                    @endforeach
                @endif
            </div>
        </div>
        @if($posts)
            @include('partials.posts-slider', [
                'posts' => $posts,
                'addImages' => false,
                'size' => 'sm'
            ])
        @endif
    </div>
    @include('partials.share-modal')
</section>