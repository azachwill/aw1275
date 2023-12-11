@php
    $formattedPosts = [];
    $mainPost = !$mainPost ? getLatestPosts('customer_stories', 1)[0] : serializePost($mainPost);

    if ($posts) {
        foreach($posts as $post) {
            array_push($formattedPosts, serializePost($post['post']));
        }
    }
@endphp

<section class="latest-posts">
    <div class="container grid grid-cols-12 md:gap-x-[16px] lg:gap-[28px] px-0 pb-[80px]">
        <div class="col-span-full grid grid-cols-12 px-[20px] md:px-[60px] lg:px-[80px] md:gap-x-[16px] lg:gap-x-[28px]">
            @if($mainPost)
                @include('components.customer-stories.post', [
                    'post' => $mainPost,
                    'isMain' => true,
                ])
            @endif
        </div>
    </div>
    @if(count($formattedPosts))
        @include('components.customer-stories.posts-slider', [
            'posts' => $formattedPosts,
        ])
    @endif
</section>