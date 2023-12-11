@extends('master')
@section('content')
    <div>
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
                        'imagePosition' => get_sub_field('image_position'),
                        'addLottie' => get_sub_field('add_lottie'),
                        'lottieFile' => get_sub_field('lottie_file'),
                        'lottieOptions' => get_sub_field('lottie_options')
                    ])
                @elseif(get_row_layout() == 'quick_links')
                    @include('components.sliding-cards', [
                        'title' => get_sub_field('sliding_title'),
                        'content' => get_sub_field('content'),
                        'contentCards' => get_sub_field('cards'),
                        'posts' => get_sub_field('posts'),
                    ])
                @elseif(get_row_layout() == 'latest_posts')
                    @include('components.resources.latest-posts', [
                        'header' => get_sub_field('header'),
                        'addMainPosts' => get_sub_field('add_main_posts'),
                        'mainPosts' => get_sub_field('main_posts'),
                    ])
                @elseif(get_row_layout() == 'posts_section')
                    @include('components.resources.posts-section', [
                        'header' => get_sub_field('header'),
                        'categories' => get_sub_field('categories'),
                        'addMainPosts' => get_sub_field('add_main_posts'),
                        'mainPosts' => get_sub_field('main_posts'),
                    ])
                @elseif(get_row_layout() == 'contact_banner')
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
    </div>
@endsection
