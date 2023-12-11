@php
    $totalPosts = wp_count_posts($type = 'post')->publish;
    
    $categories = get_terms_by_post_type([
        'taxonomy' => 'category',
        'order' => 'DESC',
        'orderby' => 'count',
        'hide_empty' => true,
        'post_types' => ['post'],
        'post_status' => 'publish'
    ]);
    
    $tags = get_terms_by_post_type([
        'taxonomy' => 'post_tag',
        'order' => 'DESC',
        'orderby' => 'count',
        'hide_empty' => true,
        'post_types' => ['post'],
        'post_status' => 'publish'
    ]);
    
    
@endphp

<section>
    <div class="bg-blue1 py-[60px] md:py-[40px]">
        <div class="container flex justify-center md:justify-start">
            <div class="text-neutral-light text-center inline-block max-w-min">
                <span class="sh1">
                    {{ $totalPosts }}+
                </span>
                <p class="sh4 uppercase">Posts</p>
            </div>
            <div class="bg-blue3/[.4] w-px mx-[15px] md:mx-[40px]"></div>
            <div class="sh4 text-neutral-light text-center inline-block max-w-min">
                <span class="sh1">
                    {{ count($categories) }}+
                </span>
                <p class="sh4 uppercase">Categories</p>
            </div>
            <div class="bg-blue3/[.4] w-px mx-[15px] md:mx-[40px]"></div>
            <div class="sh4 text-neutral-light text-center inline-block max-w-min">
                <span class="sh1">
                    {{ count($tags) }}+
                </span>
                <p class="sh4 uppercase">Tags</p>
            </div>
        </div>
    </div>

    @include('components.search.container', [
        'postObject' => get_sub_field('post_object'),
        'postsPerPage' => get_sub_field('posts_per_page'),
        'filters' => [
             'taxonomies' => ['category', 'post_tag'],
        ],
    ])
</section>
