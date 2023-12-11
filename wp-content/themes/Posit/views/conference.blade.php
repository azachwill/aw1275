@extends('master')

@section('content')
    <div>
        @while( have_posts() )
            @php
                the_post();
            @endphp

            @include('partials.breadcrumbs', [
                'pages'=> getBreadcrumbArray(get_post(), 'conference')
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
                        'sectionPadding' => get_sub_field('padding')
                    ])

                @elseif(get_row_layout() == 'countdown')
                    @include('components.conference.countdown', [
                        'startDate' => get_sub_field('start_date'),
                        'attributes' => get_sub_field('attributes')
                    ])

                @elseif(get_row_layout() == 'description_with_menu')
                    @include('components.conference.description-with-menu', [
                        'hasDate' => get_sub_field('toggle_date'),
                        'hasTime' => get_sub_field('toggle_time'),
                        'hasSubtitle' => get_sub_field('toggle_subtitle'),
                        'hasLocationLink' => get_sub_field('toggle_location_link'),
                        'startDate' => get_sub_field('start_date'),
                        'endDate' => get_sub_field('end_date'),
                        'startTime' => get_sub_field('start_time'),
                        'endTime' => get_sub_field('end_time'),
                        'subtitle' => get_sub_field('subtitle'),
                        'locationLink' => get_sub_field('location_link'),
                        'description' => get_sub_field('description'),
                        'menu' => get_sub_field('menu_container')
                    ])

                @elseif(get_row_layout() == 'highlights')
                    @include('components.conference.highlights', [
                        'videoLayout' => get_sub_field('video_layout'),
                        'imagesContent' => get_sub_field('images_content'),
                    ])

                @elseif(get_row_layout() == 'pricing_cards')
                    @include('components.conference.pricing-cards', [
                        'header' => get_sub_field('header'),
                        'priceGroups' => get_sub_field('price_group')
                    ])

                @elseif(get_row_layout() == 'past_conference_highlights')
                    @include('components.header-with-cpt', [
                        'header' => get_sub_field('header'),
                        'posts' => get_sub_field('posts'),
                        'isConference' => true
                    ])

                @elseif(get_row_layout() == 'more_details')
                    @include('components.conference.more-details', [
                        'title' => get_sub_field('title'),
                        'subtitle' => get_sub_field('subtitle'),
                        'description' => get_sub_field('description'),
                        'image' => get_sub_field('image')
                    ])

                @elseif(get_row_layout() === 'featured_workshops')
                    @include('components.stacked-carousel-section', [
                        'conditions' => get_sub_field('conditions'),
                        'header' => get_sub_field('header'),
                        'slides' => get_sub_field('cards'),
                        'alignment' => get_sub_field('carousel_position'),
                        'type' => 'solid'
                    ])

                @elseif(get_row_layout() == 'featured_talks')
                    @include('components.conference.featured-talks', [
                        'header' => get_sub_field('header'),
                        'talks' => get_sub_field('talks')
                    ])

                @elseif(get_row_layout() == 'quote')
                    @include('components.conference.quote', [
                        'quote' => get_sub_field('quote'),
                        'author' => get_sub_field('author'),
                        'jobPosition' => get_sub_field('job_position')
                    ])

                @elseif(get_row_layout() == 'sponsors')
                    @include('components.conference.sponsors', [
                        'header' => get_sub_field('header'),
                        'hasSponsors' => get_sub_field('toggle_sponsors'),
                        'sponsorGroups' => get_sub_field('sponsor_groups')
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

                @elseif(get_row_layout() == 'dynamic_cards')
                    @include('components.dynamic-cards', [
                        'header' => get_sub_field('header'),
                        'cardType' => get_sub_field('card_type'),
                        'dynamicCards' => get_sub_field('cards'),
                        'sectionFooter' => get_sub_field('section_footer'),
                        'sectionOptions' => get_sub_field('section_options'),
                        'containerClasses' => 'col-span-12 md:col-span-8 lg:col-span-5',
                    ])

                @elseif(get_row_layout() == 'cta_banner')
                    @include('components.banners.cta-banner', [
                        'header' => get_sub_field('header'),
                        'ctaBannerCards' => get_sub_field('cards'),
                        'sectionFooter' => get_sub_field('section_footer'),
                        'sectionOptions' => get_sub_field('section_options'),
                    ])

                @endif
            @endwhile
        @endwhile
    </div>
@endsection
