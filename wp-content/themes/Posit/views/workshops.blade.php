@extends('master')

@section('content')
    <section class="workshops share-modal-parent">
        @while( have_posts() )
            @php
                the_post();
            @endphp

            @include('partials.breadcrumbs', [
                'pages'=> getBreadcrumbArray(get_post(), 'workshops')
            ])

            @while (have_rows('flexible_content'))
                @php the_row(); @endphp

                @if(get_row_layout() == 'hero')
                    @include('components.hero-with-location', [
                        'title' => get_sub_field('title'),
                        'description' => get_sub_field('description'),
                        'location' => get_sub_field('location'),
                        'ctas' => get_sub_field('ctas'),
                        'image' => get_sub_field('image'),
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
                                 ['speakers', 'speakers'],
                              ]
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