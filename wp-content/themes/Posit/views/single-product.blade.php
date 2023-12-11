@extends('master')

@section('content')
    @while( have_posts() )
        @php
            the_post();
            $data = get_fields(get_the_ID());
            $post_type = get_post_type();
            $taxonomies = get_the_terms(get_the_ID(), 'topics');
        @endphp

        <section class="single-product">
            @while (have_rows('flexible_content'))
                @php the_row(); @endphp
                
                @if(get_row_layout() == 'hero')
                    @include('components.hero', [
                        'video' => get_sub_field('video'),
                        'header' => get_sub_field('header'),
                        'heroImage' => get_sub_field('image'),
                        'showLogo' => get_sub_field('show_logo_svg'),
                        'imagePosition' => get_sub_field('image_position'),
                        'addLottie' => get_sub_field('add_lottie'),
                        'lottieFile' => get_sub_field('lottie_file'),
                        'lottieOptions' => get_sub_field('lottie_options')
                    ])

                @elseif(get_row_layout() == 'features')
                    @include('components.product-detail.features', [
                        'header' => get_sub_field('header'),
                        'media' => get_sub_field('media'),
                        'description' => get_sub_field('description'),
                        'mediaPosition' => get_sub_field('media_position')
                    ])

                @elseif(get_row_layout() === 'vertical_cards')
                    @include('components.cards-layout', [
                        'header' => get_sub_field('header'),
                        'cards' => get_sub_field('cards')
                    ])

                @elseif(get_row_layout() == 'top_features')
                    @include('components.product-detail.top-features', [
                        'header' => get_sub_field('header'),
                        'cardsMedia' => get_sub_field('cards_media'),
                        'cards' => get_sub_field('cards'),
                        'cta' => get_sub_field('cta_button')
                    ])

                @elseif(get_row_layout() == 'price_table')
                    @include('components.product-detail.price-table', [
                        'header' => get_sub_field('header'),
                        'priceCards' => get_sub_field('price_cards')
                    ])

                @elseif(get_row_layout() == 'customer_stories_posts')
                        @include('components.header-with-cpt', [
                        'header' => get_sub_field('header'),
                        'posts' => get_sub_field('posts'),
                        'togglePosts' => get_sub_field('front_end_posts'),
                        'sectionOptions' => get_sub_field('section_options'),
                    ])

                @elseif(get_row_layout() == 'partner_companies')
                        @include('components.partner-companies', [
                        'header' => get_sub_field('header'),
                        'companies' => get_sub_field('companies'),
                    ])

                @elseif(get_row_layout() === 'stack_animated_carousel')
                    @include('components.stacked-carousel-section', [
                        'conditions' => get_sub_field('conditions'),
                        'header' => get_sub_field('header'),
                        'slides' => get_sub_field('cards'),
                        'alignment' => get_sub_field('carousel_position'),
                        'type'=> 'solid'
                    ])

                @elseif(get_row_layout() == 'text_columns')
                    @include('components.product-detail.text-columns', [
                      'columns' => get_sub_field('columns')
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

                @elseif(get_row_layout() === 'cards_grid_layout')
                    @include('components.cards-grid-layout', [
                        'header' => get_sub_field('header'),
                        'cardsGrid' => get_sub_field('cards_grid'),
                    ])

                @elseif(get_row_layout() === 'purpose_cards')
                    @include('components.industries.purpose-cards', [
                        'header' => get_sub_field('header'),
                        'middleText' => get_sub_field('middle_text'),
                        'cards' => get_sub_field('cards'),
                    ])

                @elseif(get_row_layout() === 'sliding_cards')
                    @include('components.sliding-cards', [
                        'title' => get_sub_field('sliding_title'),
                        'content' => get_sub_field('content'),
                        'contentCards' => get_sub_field('cards'),
                        'posts' => get_sub_field('posts')
                    ])
        
                @elseif(get_row_layout() === 'text_blocks_with_links_menu')
                    @include('components.product-detail.text-blocks-with-links-menu', [
                        'textBlocks' => get_sub_field('text_blocks'),
                        'linksMenu' => get_sub_field('links_menu'),
                        'cta' => get_sub_field('cta'),
                    ])

                @elseif(get_row_layout() === 'video_layout')
                    @include('components.video-layout', [
                        'header' => get_sub_field('header'),
                        'hasVideo' => get_sub_field('has_video'),
                        'responsiveVideo' => get_sub_field('is_responsive'),
                        'video' => get_sub_field('video'),
                        'mediaPosition' => get_sub_field('media_position'),
                        'image' => get_sub_field('image'),
                        'addFooter' => get_sub_field('add_footer'),
                        'footerType' => get_sub_field('footer_type'),
                        'quote' => get_sub_field('quote'),
                        'text' => get_sub_field('text'),
                        'sectionOptions' => get_sub_field('section_options'),
                    ])       
                    
                @elseif(get_row_layout() === 'feature_tabs')
                    @include('components.feature-tabs', [
                        'header' => get_sub_field('header'),
                        'tabsOptions' => get_sub_field('feature_tabs_options'),
                        'featureTabs' => get_sub_field('feature_tabs'),
                        'sectionOptions' => get_sub_field('section_options'),
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

                @elseif(get_row_layout() == 'sticky_sub_nav')
                    @include('components.sticky-sub-nav', [
                        'navItems' => get_sub_field('nav_items'),
                        'sectionAttributes' => get_sub_field('attributes'),
                        'sectionBackground' => get_sub_field('background'), 
                    ])

                @elseif(get_row_layout() == 'sponsors')
                    @include('components.conference.sponsors', [
                        'header' => get_sub_field('header'),
                        'hasSponsors' => get_sub_field('toggle_sponsors'),
                        'sponsorGroups' => get_sub_field('sponsor_groups')
                    ])

                @elseif(get_row_layout() == 'customer_logos_new')
                    @include('components.partner-companies', [
                    'header' => get_sub_field('header'),
                    'companies' => get_sub_field('companies'),
                ])

                @endif
            @endwhile
        </section>
    @endwhile
@endsection