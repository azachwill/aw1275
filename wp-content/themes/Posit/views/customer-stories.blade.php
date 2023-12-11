@extends('master')

@section('content')
    <section class="customer-stories share-modal-parent">
        @while( have_posts() )
            @php
                the_post();
            @endphp

            @while (have_rows('flexible_content'))
                @php the_row(); @endphp

                @if(get_row_layout() == 'hero')
                    @include('components.hero', [
                        'header' => get_sub_field('header'),
                        'heroImage' => get_sub_field('image'),
                        'video' => get_sub_field('video'),
                        'imagePosition' => get_sub_field('image_position'),
                        'addLottie' => get_sub_field('add_lottie'),
                        'lottieFile' => get_sub_field('lottie_file'),
                        'lottieOptions' => get_sub_field('lottie_options'),
                    ])
                @endif

                @if(get_row_layout() == 'main_posts')
                    @include('components.customer-stories.main-posts', [
                        'mainPost' => get_sub_field('main'),
                        'posts' => get_sub_field('posts'),
                    ])
                @endif

                @if(get_row_layout() == 'search_bar')
                    @php
                        $searchOptionsDisabled = get_sub_field('disable_search_options');
                    @endphp

                    @if(!$searchOptionsDisabled)
                        @include('components.search.container', [
                           'postObject' => get_sub_field('post_object'),
                           'postsPerPage' => get_sub_field('posts_per_page'),
                           'filters' => [
                               'postTypes' => [
                                   ['product', 'products'],
                               ],
                               'taxonomies' => ['industries'],
                           ],
                        ])
                    @else
                        @include('components.posts-paginated', [
                           'postObject' => get_sub_field('post_object'),
                           'postsPerPage' => get_sub_field('posts_per_page'),
                        ])
                    @endif
                @endif

                @if(get_row_layout() == 'contact_banner')
                    @include('components.banner', [
                        'title' => get_sub_field('title'),
                        'titleStylesData' => get_sub_field('title_styles'),
                        'headingTag' => get_sub_field('heading_tag'),
                        'description' => get_sub_field('description'),
                        'descriptionStylesData' => get_sub_field('description_styles'),
                        'cta' => get_sub_field('cta'),
                        'attributes' => get_sub_field('attributes'),
                        'background' => get_sub_field('background'),
                        'media' => get_sub_field('media'),
                        'sectionOptions' => get_sub_field('section_options')
                    ])
                @endif
            @endwhile
        @endwhile

        @include('partials.share-modal')
    </section>
@endsection