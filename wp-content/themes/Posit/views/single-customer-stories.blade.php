@extends('master')

@section('content')
    @while( have_posts() )
        @php
            the_post();
            $post = get_post();
            $data = get_fields(get_the_ID());
            $post_type = get_post_type();
            $taxonomies = get_the_terms(get_the_ID(), 'topics');
            $contactBannerGroup = get_field('cs_contact_banner', 'options');
            $tagSource = get_field('hero_tag_source');
            $tagText = get_field('hero_tag_text');
        @endphp

        @include('partials.breadcrumbs', ['pages'=>  getBreadcrumbArray($post, 'customer_story')])

        <section class="single-product single-customer-story">
            @while (have_rows('flexible_content'))
                @php the_row(); @endphp

                @if(get_row_layout() == 'hero')
                    @include('components.customer-stories.hero', [
                        'logo' => get_sub_field('logo'),
                        'ctas' => get_sub_field('ctas'),
                        'date' => get_sub_field('date'),
                        'title' => get_sub_field('title'),
                        'mediaChoice' => get_sub_field('media_choice'),
                        'image' => get_sub_field('image'),
                        'video' => get_sub_field('video'),
                        'description' => get_sub_field('description'),
                        'products' => $data['products'],
                        'tagSource' => $tagSource,
                        'tagText' => $tagText,
                        'industries' => get_the_terms(get_the_ID(), 'industries')
                    ])

                @elseif(get_row_layout() == 'customer_story_banner')
                    @include('components.customer-stories.customer-story-banner', [
                        'author' => get_sub_field('author'),
                        'testimony' => get_sub_field('testimony'),
                        'statistics' => get_sub_field('statistics'),
                        'jobPosition' => get_sub_field('job_position'),
                    ])

                @elseif(get_row_layout() == 'article')
                    @include('components.customer-stories.article', [
                        'tag' => get_sub_field('tag'),
                        'title' => get_sub_field('title'),
                        'video' => get_sub_field('video'),
                        'image' => get_sub_field('image'),
                        'description' => get_sub_field('description'),
                        'mediaChoice' => get_sub_field('media_choice')
                    ])

                @elseif(get_row_layout() == 'quote')
                    @include('components.customer-stories.quote', [
                        'quote' => get_sub_field('quote'),
                        'author' => get_sub_field('author'),
                        'jobPosition' => get_sub_field('job_position'),
                    ])

                @endif
            @endwhile

            @if($contactBannerGroup['show_banner'] && $contactBannerGroup['banner_info'])
                @include('components.banner', $contactBannerGroup['banner_info'])
            @endif
        </section>
    @endwhile
@endsection
