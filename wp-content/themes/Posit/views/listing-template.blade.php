@extends('master')

@section('content')
    @while( have_posts() )
        @php
            the_post();
        @endphp
        @while (have_rows('listing_content'))
            @php the_row(); @endphp
            @if(get_row_layout() == 'hero')
                @include('components.hero', [
                'header' => get_sub_field('header'),
                'heroImage' => get_sub_field('image'),
                'video' => get_sub_field('video'),
                'imagePosition' => get_sub_field('image_position'),
                'showLogo' => get_sub_field('show_logo_svg'),
                'addLottie' => get_sub_field('add_lottie'),
                'lottieFile' => get_sub_field('lottie_file'),
                'lottieOptions' => get_sub_field('lottie_options'),
                'listingPage' => true
            ])

            @elseif(get_row_layout() == 'listing_main_resources')
                @include('components.listing.main-content', [
                'resources' => get_sub_field('main_resources'),
            ])

            @elseif(get_row_layout() == 'listing_resources')
                @include('components.listing.content', [
                'resources' => get_sub_field('resources'),
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
@endsection
